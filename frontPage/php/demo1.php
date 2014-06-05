<?php
    $checkbox = array();
    $checkbox = $_POST["checkbox"];
    echo "您选定的文章键值为: ";
    foreach ($checkbox as $k=>$v){
        echo $v." ";
    }
?>