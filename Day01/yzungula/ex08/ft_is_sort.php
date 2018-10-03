#! /usr/bin/php
<?php
    function ft_is_sort($tab)
    {
        $i = 0;
        while ($tab[$i + 1])
        {
            if ($tab[$i] > $tab[$i + 1])
                return (false);
            $i++;
        }
        return (true);
    }
?>