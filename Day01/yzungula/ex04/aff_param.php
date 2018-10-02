#!/usr/bin/php
<?php
    $argv = func_get_args();
    $argc = func_num_args();
    $i = 1;
    
    while ($i < $argc)
    {
        echo ($argv[$i++]);
        echo ("\n");
    }
?>