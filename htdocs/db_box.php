<?php
include 'plugin/action/connect.php';
?>
<style>
   

    .zoom-set {
        position: fixed;
        right: 10px;
        width: 8vh;
        height: 20vh;
        display: block;
    }


    .loader{
        display: none;
    }

    body {
        background: #f5f6fa;
    }

    .db-table{
        background: white;
        width: 100vh;
        margin-bottom: 5%;
        
    }
</style>



    <?php
    $i = 0;
    $b = 0;
    $olcut = 100;
    $action_fw = 0;

    while ($i < $olcut) {

    ?>
        <div class="db-flex">
            <?php
            while ($b < $olcut) {

                $sorgu = $baglanti->query("SELECT * FROM rplace_db");

                while ($sonuc = $sorgu->fetch_assoc()) {
                    $db_post_coordinate = $sonuc['rplace_coordinate'];
                    $db_post_color = $sonuc['rplace_color'];
                    $db_post_user = $sonuc['rplace_user'];



                    if ($db_post_coordinate == "db-a" . $i . "-" . $b . "") {

                        $action_fw = 1;
                        break;
                    }
                }

                if ($action_fw == 1) {
                    echo '<div class="db-box" style="background:' . $db_post_color . '; " id="db-a' . $i . '-' . $b . '" onclick="actionbox(\'db-a' . $i . '-' . $b . '\')"><span class="tooltiptext">db-a' . $i . '-' . $b . ' - ' . $db_post_user . '</span></div>';
                    $b++;

                    if ($b == $olcut) {
                        $b = 0;
                        $action_fw = 0;
                        break;
                    }

                    $action_fw = 0;
                }else {
                    echo '<div class="db-box"  id="db-a' . $i . '-' . $b . '" onclick="actionbox(\'db-a' . $i . '-' . $b . '\')"><span class="tooltiptext">db-a' . $i . '-' . $b . '</span></div>';
                    $b++;

                    if ($b == $olcut) {
                        $b = 0;
                        $action_fw = 0;
                        break;
                    }

                    $action_fw = 0;
                }

                $action_fw = 0;
                
            }
            ?>
        </div>
    <?php

        if ($i == $olcut) {
            $i = 0;
        }

        $i++;
    }


    ?>

