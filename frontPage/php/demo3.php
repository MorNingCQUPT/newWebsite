<?php
    $checkbox = array();
    $checkbox = $_POST["chk"];
    echo "您选定的用户键值为: ";
    foreach ($checkbox as $k=>$v){
        echo $v." ";
    }
?>