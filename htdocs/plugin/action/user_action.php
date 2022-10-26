<?php

include 'connect.php';
$rom = 0;
$rom2 = 0;

$action_is = $_POST['action'];

if ($action_is) {
    if ($action_is == "login") {
        $usermail_k = $_POST['usermail'];
        $userpassword_k = $_POST['userpassword'];

        $sorgu = $baglanti->query("SELECT * FROM user_db");

        while ($sonuc = $sorgu->fetch_assoc()) {
            $usermail_db = $sonuc['user_mail'];
            $userpassword_db = $sonuc['user_password'];
            $username_db = $sonuc['username'];

            if ($usermail_db == $usermail_k && $userpassword_db == $userpassword_k) {
                setcookie("user", $username_db, time() + 999999, "/");
                echo "userloginsuccess";
                $rom = 1;
                break;
            }
        }

        if (!$rom == 1) {
            echo "userloginfail";
        }
    } else if ($action_is == "sign") {

        $username_k = $_POST['username'];
        $usermail_k = $_POST['usermail'];
        $userpassword_k = $_POST['userpassword'];

        $userpassword_control =  strlen($userpassword_k);

        $sorgu = $baglanti->query("SELECT * FROM user_db");

        while ($sonuc = $sorgu->fetch_assoc()) {
            $usermail_db_c = $sonuc['user_mail'];
            $username_db_c = $sonuc['username'];

            if ($usermail_db_c == $usermail_k) {
                $rom2 = 1;
                echo "usermailztn";
                break;
            } else if ($username_k == $username_db_c) {
                $rom2 = 1;
                echo "usernameztn";
                break;
            }
        }

        if ($rom2 == 0) {
            if (filter_var($usermail_k, FILTER_VALIDATE_EMAIL)) {

                if ($userpassword_control >= 8) {
                    if ($baglanti->query("INSERT INTO user_db(username,user_password,user_mail) VALUES('$username_k','$userpassword_k','$usermail_k')")) {
                        setcookie("user", $username_k, time() + 999999, "/");
                        echo "usersignsuccess";
                    } else {
                        echo "usersignfail";
                    }
                } else {
                    echo "usersignfailpassword";
                }
            } else {
                echo "usersignfailmail";
            }
        }
    }
}
