#! /usr/bin/php
<?php
    function rostring($argc, $argv)
    {
        $i = 1;
        $str = "";
        $words_arr;
        while ($i < $argc)
        {
            $str = $str." ".$argv[$i];
            $i++;
        }
        $words_arr = preg_split('/\s+/', trim($str));
        $i = 1;
        while ($words_arr[$i])
        {
            echo($words_arr[$i++]);
            echo(" ");
        }
        echo("$words_arr[0]\n");
    }
    if ($argc < 2)
        return;
    rostring($argc, $argv);
?>