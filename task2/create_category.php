<?php
$mysqli = new mysqli("localhost", "admin", "admin", "task-2-back-end");
$mysqli -> query ("SET NAMES 'utf8'");

$inquiry = $mysqli -> query("INSERT INTO `categories` (`name`) VALUES ('".$_POST["name_category"]."')");

if ($inquiry == 1){
    $category = $mysqli -> query ("SELECT `id`, `name` FROM `categories` WHERE `created_at` IN (SELECT max(`created_at`) FROM `categories`)");

    $id = 0;
    foreach ($category as $value){
        $arr_category[$id]['id'] = $value['id'];
        $arr_category[$id]['name'] = $value['name'];
        $id++;
    }
    echo json_encode($arr_category);
    
}else{
    echo 0;
}