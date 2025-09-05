<?php

namespace App\Traits;

trait BaseEnum
{
    public static function values()
    {
        return Self::values()->toArray();
    }
}
