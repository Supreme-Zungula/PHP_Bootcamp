#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $words_arr = explode(' ', $str);
        sort($words_arr);
        return ($words_arr);
    }
?>