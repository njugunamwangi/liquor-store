<?php

namespace App\Enums;

use Filament\Support\Colors\Color;

enum PaymentMethod: string
{
    case Stripe = 'Stripe';
    case PayStack = 'PayStack';

    public const DEFAULT = self::Stripe->value;

    public function getColor()
    {
        return match ($this) {
            self::Stripe => Color::Indigo,
            self::PayStack => Color::Blue,
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
