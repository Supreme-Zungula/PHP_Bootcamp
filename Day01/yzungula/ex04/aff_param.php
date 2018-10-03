#!/usr/bin/php
<?php
    if ($argc < 2)
        return ;
    $i = 1;
    while ($i < $argc)
    {
        echo ($argv[$i++]);
        echo ("\n");
    }
?>