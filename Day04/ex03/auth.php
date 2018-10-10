<?php
    /* function auth($login, $passwd)
    {
        if ($login && $passwd)
        {
            $user = unserialize(file_get_contents("../private/passwd"));
            if($user)
            {
                foreach($user as $key => $value)
                {
                    if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
                        return true;
                }
            }
        }
        return false;
    } */
    function auth($login, $passwd) {
        if (!$login || !$passwd)
            return false;
        $account = unserialize(file_get_contents('../private/passwd'));
        if ($account) {
            foreach ($account as $k => $v) {
                if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
                    return true;
            }
        }
        return false;
    }
?>