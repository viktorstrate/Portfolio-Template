<?php

require_once('../../configuration.php');
header('Content-Type: application/json');

$id = $_POST['itemid'];

foreach(collection("Item")->find() as $item){
    if($id==$item['_id']){
        if(!isset($item['Description'])) $item['Description'] = '';
        $imagePath = substr($item['Image'], 5);
        $info = array('name'=>$item['Name'], 'imagePath'=>$imagePath,
        'categoryid'=>$item['Category'], 'description'=>$item['Description']);
        echo json_encode($info);
        return;
    }
}
echo json_encode('nothing found');