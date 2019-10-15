#!/usr/bin/php
<?PHP
    if ($argc < 2)
        return ;
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
    /*
    $i = 0;
    foreach ($merge as $elem){
        echo "$elem\n";
    }
    */

    function start_with($str) {
        $c = $str[0];
        if (ctype_alpha($c)){
            return 'alpha';
        } else if (ctype_digit($c)){
            return 'numeric';
        } else {
            return 'other';
        }
    
    }
     foreach ($merge as $elem)
     {
         if (start_with($elem) == "alpha"){
            $alpha[] = $elem;
         }
         else if (start_with($elem) == "numeric"){
            $numeric[] = $elem;
         }
         else {
             $other[] = $elem;
         }
     }
     function first_char_compare($a, $b){
        return strcmp(substr($a, 0, 1), substr($b, 0, 1));
    }
     natcasesort($alpha);
     usort($numeric, "first_char_compare");
     usort($other, "first_char_compare");

     $merge1 = array_merge($alpha, $numeric);
     $merge2 = array_merge($merge1, $other);

     foreach ($merge2 as $elem){
         echo "$elem\n";
     }
?>