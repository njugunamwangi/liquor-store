<?php

    namespace App\Enums;

    enum OrderStatus: string {
        case Pending = 'Pending';
        case Processing = 'Processing';
        case Delivered = 'Delivered';
        case Cancelled = 'Cancelled';

        case Shipped = 'Shipped';

        public function getColor():string {
            return match($this) {
                self::Pending => 'gray',
                self::Processing => 'warning',
                self::Delivered => 'success',
                self::Shipped => 'info',
                self::Cancelled => 'danger',
            };
        }

        public function getIcon():string {
            return match($this) {
                self::Pending => 'heroicon-o-clock',
                self::Processing => 'heroicon-o-arrow-path',
                self::Delivered => 'heroicon-o-check-badge',
                self::Shipped => 'heroicon-o-truck',
                self::Cancelled => 'heroicon-o-x-circle',
            };
        }
    }