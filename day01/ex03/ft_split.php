#!/usr/bin/php
<?PHP

    function ft_split($str)
    {
        $tap = explode (" ", $str);
        $reverse = array_reverse($tap);
        $delete = array_diff($reverse, [""]);
        $result = array_values($delete);
        return ($result);
    }
?>