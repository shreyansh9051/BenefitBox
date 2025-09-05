<?php

namespace App\Helpers;

class Helper
{
    public static function formatPrice($price, $currencySymbol = '$')
    {
        return $currencySymbol . number_format($price, 2, '.', ',');
    }

    public static function numberFormat($n, $precision = 1)
    {
        if ($n < 900) {
        
            $n_format = number_format($n, $precision);
        
            $suffix = '';
        
        } else if ($n < 900000) {
        
            $value = floor($n / 1000 * pow(10, $precision)) / pow(10, $precision);
        
            $n_format = number_format($value, $precision);
        
            $suffix = 'K';
        
        } else if ($n < 900000000) {
        
            $value = floor($n / 1000000 * pow(10, $precision)) / pow(10, $precision);
        
            $n_format = number_format($value, $precision);
        
            $suffix = 'M';
        
        } else if ($n < 900000000000) {
        
            $value = floor($n / 1000000000 * pow(10, $precision)) / pow(10, $precision);
        
            $n_format = number_format($value, $precision);
        
            $suffix = 'B';
        
        } else {
        
            $value = floor($n / 1000000000000 * pow(10, $precision)) / pow(10, $precision);
        
            $n_format = number_format($value, $precision);
        
            $suffix = 'T';
        }

        if ($precision > 0) {
        
            $dotzero = '.' . str_repeat('0', $precision);
        
            $n_format = str_replace($dotzero, '', $n_format);
        }

        return $n_format . $suffix;
    }
}

