<?php

require_once('../../configuration.php');

$categoryId = $_POST['categoryid'];

header('Content-Type: application/json');
$items = array();
foreach(collection("Item")->find() as $item){
    $test = 0;
    if($item['Category']==$categoryId){
        $test++;
        $imagePath = substr($item['Image'], 5);
        array_push($items, array('id'=>$item['_id'], 'name'=>$item['Name'], 'image'=>$imagePath));
    }
}

echo json_encode($items);
