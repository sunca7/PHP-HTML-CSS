#!/usr/bin/php
<?PHP
    if ($argc != 2){
        return ;
    }
    $trim = trim($argv[1], " ");
    $return = preg_replace('/\s+/', ' ',$trim);
    echo $return;
?>