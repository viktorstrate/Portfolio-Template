<?php

require_once('../../configuration.php');

header('Content-Type: application/json');
$categories = array();
foreach(collection("Category")->find() as $category){
    $foundImage = false;
    $imagePath = '';
    $item = array();
    foreach(collection("Item")->find() as $itm){
        if($itm['Category']==$category['_id']){
            $foundImage = true;
            $item = $itm;
        }
    }
    if($foundImage==false){
        $imagePath = 'assets/img/noitemsfound.jpg';
    } else $imagePath = substr($item['Image'], 5);
    array_push($categories, array('categoryid'=>$category['_id'], 'name'=>$category['Name'], 'image'=>$imagePath));
}

echo json_encode($categories);

?>