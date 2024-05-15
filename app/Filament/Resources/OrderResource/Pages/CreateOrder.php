<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\OrderItem;
use App\Models\Product;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $record = static::getModel()::create([
            'user_id' => $data['user_id'],
            'total_price' => $data['total_price'],
            'tracking_no' => Str::uuid(),
            'order_id' => 'AXFYT-'.rand(1000000, 9999999),
            'payment_method' => '-',
            'payment_status' => $data['payment_status'],
            'order_status' => $data['order_status'],
            'shipping' => $data['shipping'],
        ]);

        foreach($data['products'] as $item) {
            OrderItem::create([
                'order_id' => $record->id,
                'product_id' => $product_id = $item['product_id'],
                'quantity' => $item['quantity'],
                'unit_price' => Product::find($product_id)->retail_price,
            ]);
        }

        $record->details()->create([
            'order_id' => $record->id,
            'name' => $record->user->name,
            'email' => $record->user->email,
            'phone' => $data['phone'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zipcode' => $data['zipcode'],
        ]);

        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
