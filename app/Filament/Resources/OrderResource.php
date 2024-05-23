<?php

namespace App\Filament\Resources;

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Resources\OrderResource\RelationManagers\PaymentsRelationManager;
use App\Filament\Resources\OrderResource\Widgets\OrdersStatsOverview;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components;
use Filament\Infolists\Components\Tabs;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action as ActionsAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Ysfkaya\FilamentPhoneInput\PhoneInputNumberType;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationGroup = 'Shop';

    protected static ?int $navigationSort = 6;

    protected static ?string $recordTitleAttribute = 'tracking_no';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        $products = Product::get();

        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Order')
                        ->schema([
                            Group::make()
                                ->columnSpanFull()
                                ->schema([
                                    Forms\Components\Select::make('user_id')
                                        ->relationship('user', 'name')
                                        ->searchable()
                                        ->preload()
                                        ->required(),
                                    Grid::make(2)
                                        ->schema([
                                            Forms\Components\Select::make('payment_status')
                                                ->enum(PaymentStatus::class)
                                                ->options(PaymentStatus::class)
                                                ->searchable()
                                                ->required()
                                                ->default(PaymentStatus::DEFAULT),
                                            Forms\Components\Select::make('order_status')
                                                ->enum(OrderStatus::class)
                                                ->options(OrderStatus::class)
                                                ->searchable()
                                                ->required()
                                                ->default(OrderStatus::DEFAULT),
                                        ])
                                ]),
                            Group::make()
                                ->columnSpanFull()
                                ->schema([
                                    Section::make()
                                        ->schema([
                                            Repeater::make('products')
                                                ->addActionLabel('Add Product')
                                                ->schema([
                                                    Forms\Components\Select::make('product_id')
                                                        ->label('Product')
                                                        ->options(
                                                            $products->mapWithKeys(function (Product $product) {
                                                                return [$product->id => sprintf('%s %s (Kes%s)', $product->flavor->flavor . ' | ', $product->product, $product->retail_price)];
                                                            })
                                                        )
                                                        ->searchable()
                                                        ->preload()
                                                        ->disableOptionWhen(function ($value, $state, Get $get) {
                                                            return collect($get('../*.product_id'))
                                                                ->reject(fn($id) => $id == $state)
                                                                ->filter()
                                                                ->contains($value);
                                                        })
                                                        ->required(),
                                                    Forms\Components\TextInput::make('quantity')
                                                        ->integer()
                                                        ->default(1)
                                                        ->required()
                                                ])
                                                ->live()
                                                ->afterStateUpdated(function (Get $get, Set $set) {
                                                    self::updateTotals($get, $set);
                                                })
                                                ->deleteAction(
                                                    fn(Action $action) => $action->after(fn(Get $get, Set $set) => self::updateTotals($get, $set)),
                                                )
                                                ->reorderable(false)
                                                ->columns(2)
                                        ])->columnSpan(8),
                                    Section::make()
                                        ->schema([
                                            TextInput::make('subtotal')
                                                ->readOnly()
                                                ->afterStateUpdated(function (Get $get, Set $set) {
                                                    self::updateTotals($get, $set);
                                                }),
                                            TextInput::make('shipping')
                                                ->numeric()
                                                ->default(100)
                                                ->live(true)
                                                ->afterStateUpdated(function (Get $get, Set $set) {
                                                    self::updateTotals($get, $set);
                                                }),
                                            TextInput::make('total_price')
                                                ->readOnly(),
                                        ])->columnSpan(4),
                                ])->columns(12)
                        ]),
                    Wizard\Step::make('Delivery')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    PhoneInput::make('phone')
                                        ->defaultCountry('KE')
                                        ->displayNumberFormat(PhoneInputNumberType::INTERNATIONAL)
                                        ->focusNumberFormat(PhoneInputNumberType::INTERNATIONAL),
                                    Grid::make(2)
                                        ->schema([
                                            TextInput::make('address1')
                                                ->label('Address 1')
                                                ->required(),
                                            TextInput::make('address2')
                                                ->label('Address 2')
                                        ]),
                                    Grid::make(2)
                                        ->schema([
                                            TextInput::make('city')
                                                ->required(),
                                            TextInput::make('state')
                                                ->required()
                                        ]),
                                    TextInput::make('zipcode')
                                        ->label('Zip Code')
                                        ->columnSpanFull()
                                        ->required()
                                ])
                        ]),
                ])
                ->columnSpanFull()
            ]);
    }

    public static function updateTotals(Get $get, Set $set): void
    {
        $selectedProducts = collect($get('products'))->filter(fn($item) => !empty($item['product_id']) && !empty($item['quantity']));

        $prices = Product::find($selectedProducts->pluck('product_id'))->pluck('retail_price', 'id');

        $subtotal = $selectedProducts->reduce(function ($subtotal, $product) use ($prices) {
            return $subtotal + ($prices[$product['product_id']] * $product['quantity']);
        }, 0);

        $set('subtotal', number_format($subtotal, 2, '.', ''));
        $set('total_price', number_format($subtotal + $get('shipping'), 2, '.', ''));
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Tabs::make('Label')
                    ->tabs([
                        Tabs\Tab::make('Order Summary')
                            ->icon('heroicon-m-home-modern')
                            ->schema([
                                Components\Split::make([
                                    Components\Grid::make(2)
                                        ->schema([
                                            Components\Group::make([
                                                Components\TextEntry::make('user.name')
                                                    ->label('Customer Name'),
                                                Components\TextEntry::make('tracking_no')
                                                    ->label('Tracking Number'),
                                                Components\TextEntry::make('order_id')
                                                    ->label('Order ID'),
                                                Components\TextEntry::make('created_at')
                                                    ->date(),

                                            ]),
                                            Components\Group::make([
                                                Components\TextEntry::make('total_price')
                                                    ->money('Kes'),
                                                Components\TextEntry::make('payment_method'),
                                                Components\TextEntry::make('payment_status')
                                                    ->badge()
                                                    ->color(function ($state) {
                                                        return $state->getColor();
                                                    })
                                                    ->icon(function ($state) {
                                                        return $state->getIcon();
                                                    }),
                                                Components\TextEntry::make('order_status')
                                                    ->badge()
                                                    ->color(function ($state) {
                                                        return $state->getColor();
                                                    })
                                                    ->icon(function ($state) {
                                                        return $state->getIcon();
                                                    }),
                                            ]),
                                        ]),
                                ])->from('lg'),
                            ]),
                        Tabs\Tab::make('Billing Information')
                            ->icon('heroicon-m-adjustments-vertical')
                            ->schema([
                                Components\Split::make([
                                    Components\Grid::make(2)
                                        ->schema([
                                            Components\Group::make([
                                                Components\TextEntry::make('details.name')
                                                    ->label('Name'),
                                                Components\TextEntry::make('details.email')
                                                    ->label('Email'),
                                                Components\TextEntry::make('details.phone')
                                                    ->label('Phone Number'),
                                            ]),
                                            Components\Group::make([
                                                Components\TextEntry::make('details.address1')
                                                    ->label('Address Line 1'),
                                                Components\TextEntry::make('details.address2')
                                                    ->label('Address Line 2'),
                                                Components\TextEntry::make('details.city')
                                                    ->label('City'),
                                                Components\TextEntry::make('details.state')
                                                    ->label('State'),
                                                Components\TextEntry::make('details.zipcode')
                                                    ->label('Zip Code'),
                                            ]),
                                        ]),
                                ])->from('lg'),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tracking_no')
                    ->label('Tracking Number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_price')
                    ->prefix('Kes ')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order_status')
                    ->badge()
                    ->color(function ($state) {
                        return $state->getColor();
                    })
                    ->icon(function ($state) {
                        return $state->getIcon();
                    })
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->badge()
                    ->color(function ($state) {
                        return $state->getColor();
                    })
                    ->icon(function ($state) {
                        return $state->getIcon();
                    })
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                ActionsAction::make('stripe')
                    ->icon('heroicon-o-credit-card')
                    ->hidden(fn($record) => $record->paid())
                    ->url(fn($record): string => self::getUrl('checkout', [$record]))
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ItemsRelationManager::class,
            PaymentsRelationManager::class,
        ];
    }

    public static function getWidgets(): array
    {
        return [
            OrdersStatsOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'checkout' => Pages\Checkout::route('/{record}/checkout')
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getGlobalSearchResultUrl(Model $record): string
    {
        return OrderResource::getUrl('view', ['record' => $record]);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['total_price', 'items.product.product', 'payments.reference', 'user.name'];
    }
}
