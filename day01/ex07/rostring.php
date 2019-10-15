#!/usr/bin/php
<?PHP

    $trim = trim($argv[1], " ");
    $words = preg_replace('/\s+/', ' ',$trim);
    $return = explode(" ", $words);
    $i = sizeof($return);

    $item = $return[0];
    unset($return[0]);
    array_push($return, $item);
    $reindexed = array_values($return);

    foreach ($reindexed as $key => $elem){
        if ($key != $i - 1){
            echo "$elem ";
        }
        else {
            echo "$elem";
        }
    }
?>