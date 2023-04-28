<?php
$URL ='../data/menu.json';
$JSON= file_get_contents($URL);
$menu_JSON = json_decode($JSON);


$productID = $_POST["productID"];

$selectedProduct = array();

foreach ($menu_JSON as $menuItem) {
  if ($menuItem->id == $productID) {
    $selectedProduct = $menuItem;
  }
}



echo json_encode($selectedProduct);