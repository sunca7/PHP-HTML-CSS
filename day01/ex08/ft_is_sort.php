#!/usr/bin/php
<?PHP
    function ft_is_sort($array){
       $sorted = sort($array);
       if ($sorted === $array){
           return (true);
       }
       else {
           return (false);
       }
    }
?>