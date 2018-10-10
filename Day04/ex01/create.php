<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK")
    {
        !file_exists("../private") ? mkdir("../private") : 0;
        if (file_exists("../private/passwd"))
        {
            $users = unserialize(file_get_contents("../private/passwd"));
            foreach($users as $key => $value)
            {
                if ($_POST['login'] === $value)
                    echo "ERROR\n";
            }
        }
        else
        {
            $user['login'] = $_POST['login'];
            $user['passwd'] = hash('whirlpool', $_POST['passwd']);
            $users[] = $user;
            file_put_contents('../private/passwd', serialize($user));
            echo "OK\n";
        }
    }
    else
        echo "ERROR\n";
?>