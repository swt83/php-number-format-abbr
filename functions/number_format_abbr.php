<?php

function number_format_abbr($n, $decimals = 1)
{
    // first strip any formatting;
    $n = (0+str_replace(",","",$n));
   
    // is this a number?
    if(!is_numeric($n)) return false;
   
    // now filter it;
    if($n>=1000000000000) return round(($n/1000000000000),$decimals).'T';
    else if($n>=1000000000) return round(($n/1000000000),$decimals).'B';
    else if($n>=1000000) return round(($n/1000000),$decimals).'M';
    else if($n>=1000) return round(($n/1000),$decimals).'K';
    
    return number_format($n);
}