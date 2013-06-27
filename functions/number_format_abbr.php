<?php

function number_format_abbr($n, $decimals = 1)
{
    // strip formatting
    $n = (0 + str_replace(',', '', $n));
   
    // check if number
    if (!is_numeric($n)) return false;
   
    // process
    if ($n >= 1000000000000) return round(($n / 1000000000000), $decimals).'T';
    elseif ($n >= 1000000000) return round(($n / 1000000000), $decimals).'B';
    elseif ($n >= 1000000) return round(($n / 1000000), $decimals).'M';
    elseif ($n >= 1000) return round(($n / 1000), $decimals).'K';
    else return number_format($n);
}