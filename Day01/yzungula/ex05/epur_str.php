#!/usr/bin/php
<?php
    if ($argc != 2)
        return ;
    function isspace($c)
    {
        if ($c == ' ' || $c == '\t' || $c == '\n')
            return (true);
        return (false);
    }
    function epur_str($argv)
    {
        $i = 0;
        $input = trim($argv[1]);
        while ($input[$i])
        {
            echo ($input[$i]);
            if (isspace($input[$i]))
            {
                while (isspace($input[$i]))
                {
                    $i++;
                }
            }
            else
                $i++;
        }
    }

    epur_str($argv);
?>