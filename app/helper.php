<?php

use Illuminate\Support\Carbon;

if (!function_exists('getFormattedDate')) {
    function getFormattedDate($date, $format = 'Y-m-d')
    {
        return Carbon::parse($date)->format($format);
    }
}

if (!function_exists('customPrint')) {
    function customPrint($parameter)
    {
        echo "<pre>";
        print_r($parameter);
        echo "<pre>";
    }
}
