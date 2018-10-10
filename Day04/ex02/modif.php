<?php
    if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === "OK")
    {
        if (file_exists("../private/passwd"))
        {
            $users = unserialize(file_get_contents("../private/passwd"));
            foreach($users as $key => $value)
            {
                if ($_POST['login'] === $value['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw']))
                {
                    if ($users[$k]['passwd'] === hash('whirlpool', $_POST['newpw']))
                        echo "ERROR\n";
                    else
                    {
                        $users[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
                        file_put_contents('../private/passwd', serialize($user));
                        echo "OK\n";
                    }
                }
            }
        }
        else
            echo "ERROR\n";
    }
    else
        echo "ERROR\n";
?>