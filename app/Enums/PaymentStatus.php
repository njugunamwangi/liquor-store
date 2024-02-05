<?php

    namespace App\Enums;

    enum PaymentStatus: string {
        case NotPaid = 'Not Paid';
        case Paid = 'Paid';
        case Failed = 'Failed';

        public function getColor():string {
            return match($this) {
                self::NotPaid => 'warning',
                self::Paid => 'success',
                self::Failed => 'danger',
            };
        }

        public function getIcon():string {
            return match($this) {
                self::NotPaid => 'heroicon-o-clock',
                self::Paid => 'heroicon-o-check-badge',
                self::Failed => 'heroicon-o-x-circle',
            };
        }
    }