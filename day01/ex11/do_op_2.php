#!/usr/bin/php
<?PHP
    if ($argc != 2)
    {
        echo ("Incorrect Parameters");
        return ;
    }
    $trim = trim($argv[1], " ");
    $trim = preg_replace('/\s+/', '',$trim);  
    $tap = preg_split("/[*%+-\/]/", $trim);
    if (ctype_digit($tap[0]) == false || ctype_digit($tap[1]) == false)
    {
        echo ("Syntax Error");
        return ;
    }   
    if (strpos($trim, "+"))
        echo ($tap[0] + $tap[1]);
    if (strpos($trim, "-"))
        echo ($tap[0] - $tap[1]);
    if (strpos($trim, "*"))
        echo ($tap[0] * $tap[1]);
    if (strpos($trim, "/"))
        echo ($tap[0] / $tap[1]);
    if (strpos($trim, "%"))
        echo ($tap[0] % $tap[1]);     
?>