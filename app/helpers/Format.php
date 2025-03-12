<?php
class Format {
    public static function formatCurrency($number) {
        return number_format($number, 0, ',', '.') . ' ₫';
    }
} 