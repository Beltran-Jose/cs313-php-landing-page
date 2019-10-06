<?php

// Create or access a Session
session_start();

//variables

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
   $action = filter_input(INPUT_GET, 'action');
}


switch ($action) {
   case 'addToCart':

      $productName = filter_input(INPUT_POST, 'product-name', FILTER_SANITIZE_STRING);
      $productCost = filter_input(INPUT_POST, 'product-cost', FILTER_SANITIZE_STRING);
      
      $item = Array($productName, $productCost);

      if(!isset($_SESSION['cart'])){
         $_SESSION['cart'] = Array();
         array_push($_SESSION['cart'], $item);
      } else {
         array_push($_SESSION['cart'], $item);
      }
                
      header('Location: /week-3-shopping-cart/view/home.php');
      break;

   case 'completePurchase':

      $homeAddress = filter_input(INPUT_POST, 'home-address', FILTER_SANITIZE_STRING);
      $_SESSION['address'] = $homeAddress;

      header('location: /week-3-shopping-cart/view/confirmation.php');
      break;
   
   default:
      include 'home.php';

}

?>