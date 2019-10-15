#!/usr/bin/php
<?PHP
    if ($argc < 2){
        return ;
    }
    $tap = array();
    $sub = array();
    $i = 0;
    foreach ($argv as $key => $elem)
    {
        if ($key != 0){
            $sub = explode(" ", $elem);
            $tap = array_merge($tap, $sub);
            $merge = $tap;
            $i++; 
        }
    }
    sort($merge);
    $i = 0;
    foreach ($merge as $elem){
        echo "$elem\n";
    }
?>