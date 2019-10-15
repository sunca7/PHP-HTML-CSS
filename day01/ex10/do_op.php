#!/usr/bin/php
<?PHP
    if ($argc != 4)
        echo ("Incorrect Parameters");
    $a1 = (int)trim($argv[1], " ");
    $a2 = trim($argv[2], " ");
    $a3 = (int)trim($argv[3], " ");
    if ($a2 == "+")
        echo ($a1 + $a3);
    if ($a2 == "-")
        echo ($a1 - $a3);
    if ($a2 == "*")
        echo ($a1 * $a3);
    if ($a2 == "%")
        echo ($a1 % $a3);        
?>