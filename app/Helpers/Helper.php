<?php

use Illuminate\Support\Str;

if(!function_exists('slugifyEvent'))
{
    function slugifyEvent($string)
    {
        return Str::slug($string, '-') . '-' . Str::random(8);
    }
}

?>