<?php

namespace App\Helpers;

class Helper
{
    public static function formatPrice($price, $currencySymbol = '$')
    {
        return $currencySymbol . number_format($price, 2, '.', ',');
    }

    public static function numberFormat( $n, $precision = 1 )
    {
        if ($n < 900) {
     
            $n_format = number_format($n, $precision);
     
            $suffix = '';
     
        } else if ($n < 900000) {
     
            $n_format = number_format($n / 1000, $precision);
     
            $suffix = 'K';
     
        } else if ($n < 900000000) {
     
            $n_format = number_format($n / 1000000, $precision);
     
            $suffix = 'M';
     
        } else if ($n < 900000000000) {
     
            $n_format = number_format($n / 1000000000, $precision);
     
            $suffix = 'B';
     
        } else {
     
            $n_format = number_format($n / 1000000000000, $precision);
     
            $suffix = 'T';
     
        }
    
        
        if ( $precision > 0 ) {
        
            $dotzero = '.' . str_repeat( '0', $precision );
        
            $n_format = str_replace( $dotzero, '', $n_format );
        }
    
        return $n_format . $suffix;
    }
}

