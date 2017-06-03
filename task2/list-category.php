<?php
$mysqli = new mysqli("localhost", "admin", "admin", "task-2-back-end");
$mysqli -> query ("SET NAMES 'utf8'");

$list_category = $mysqli -> query ("SELECT `id`, `name` FROM `categories`");

$id = 0;
foreach ($list_category as $value){
    $arr_list_category[$id]['id'] = $value['id'];
    $arr_list_category[$id]['name'] = $value['name'];
    $id++;
}
echo json_encode($arr_list_category);