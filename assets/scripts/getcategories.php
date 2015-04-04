<?php

require_once('../../configuration.php');

header('Content-Type: application/json');
$categories = array();
foreach(collection("Category")->find() as $category){
    $foundImage = false;
    $imagePath = '';
    foreach(collection("Item")->find() as $item){
        if($item['Category']==$category['_id']){
            $foundImage = true;
            $imagePath = substr($item['Image'], 5);
            break;
        }
    }
    if($foundImage==false){
        $imagePath = 'assets/img/noitemsfound.jpg';
    }
    array_push($categories, array('categoryid'=>$category['_id'], 'name'=>$category['Name'], 'image'=>$imagePath));
}

echo json_encode($categories);

?>