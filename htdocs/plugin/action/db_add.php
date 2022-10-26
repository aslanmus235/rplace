<?php
error_reporting(0);
include 'connect.php';








if($_COOKIE['user']){

    $action_accses = 0;
    date_default_timezone_set('Europe/Istanbul');
    
    $simdi = strtotime(date('d.m.Y H:i:s'));
    
    $eski = strtotime($_COOKIE['time']);
    



if ($_POST) {

    $db_coordinate = $_POST['coordinate'];
    $db_color = $_POST['color'];
    $db_user = $_COOKIE['user'];

    $sorgu = $baglanti->query("SELECT * FROM rplace_db");

    while ($sonuc = $sorgu->fetch_assoc()) {
        $db_post_coordinate = $sonuc['rplace_coordinate'];



        if ($db_post_coordinate == $db_coordinate) {
            $action_accses = 1;
        }
    }



    if ($action_accses == 1) {

        if (!$_COOKIE['zaman'] || $simdi > $eski) {
            if ($baglanti->query("UPDATE rplace_db SET rplace_color = '$db_color',rplace_user = '$db_user' WHERE rplace_coordinate = '$db_coordinate'")) {



                setcookie("time", date('d.m.Y H:i:s', time() + 10), time() + 999999, "/");

                echo "true";
            } else {
                echo "false";
            }
        }
    } else if ($action_accses == 0) {
        if (!$_COOKIE['zaman'] || $simdi > $eski) {
            if ($baglanti->query("INSERT INTO rplace_db(rplace_coordinate,rplace_color,rplace_user) VALUES('$db_coordinate','$db_color','$db_user')")) {
                setcookie("time", date('d.m.Y H:i:s', time() + 10), time() + 999999, "/");

                echo "true";
            } else {
                echo "false";
            }
        }
    } else {
        echo "empty";
    }
}

}else{
    echo "nouser";
}
