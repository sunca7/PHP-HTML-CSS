#!/usr/bin/php
<?PHP
    if ($argc <= 2)
        return ;
    $temp = $argv[1];
    unset($argv[0]);
    unset($argv[1]);

    $i = 0;
    foreach ($argv as $elem){
        $tab[$i] = explode(":", $elem);
        $i++;
    }
    foreach ($tab as $elem){
        if ($elem[0] == $temp)
            $result = $elem[1];
    }
    if ($result == null)
        return ;
    else 
        echo ($result);
?>