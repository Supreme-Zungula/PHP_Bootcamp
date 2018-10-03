#!/usr/bin/php
<?php
    print_r($argv);
    $i = 1;
    $str = "";
    $words_arr;
    while ($i < $argc)
    {
        $str = $str." ".$argv[$i];
        $i++;
    }
    $words_arr = preg_split('/\s+/', trim($str));
    sort($words_arr);
    foreach($words_arr as $word)
    {
        echo ($word);
        echo ("\n");
    }
?>