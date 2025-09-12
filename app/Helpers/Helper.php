<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helper 
{
    public static function title($value) {
        return Str::remove(' ', ucwords(Str::of($value)->replace('_', ' ')));
    }
}