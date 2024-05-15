<?php

namespace App\Enums;

enum PaymentStatus: string
{
    case Unpaid = 'Unpaid';
    case Paid = 'Paid';
    case Failed = 'Failed';

    public const DEFAULT = self::Unpaid->value;

    public function getColor(): string
    {
        return match ($this) {
            self::Unpaid => 'warning',
            self::Paid => 'success',
            self::Failed => 'danger',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Unpaid => 'heroicon-o-clock',
            self::Paid => 'heroicon-o-check-badge',
            self::Failed => 'heroicon-o-x-circle',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
