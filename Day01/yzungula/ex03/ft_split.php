#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $words_arr = array_filter(explode(' ', $str));
        sort($words_arr);
        return ($words_arr);
    }
?>