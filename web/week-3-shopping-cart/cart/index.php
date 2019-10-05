<?php

// Create or access a Session
session_start();

$cart_array = array();
$_SESSION['cart'] = $cart_array;


//variables

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
   $action = filter_input(INPUT_GET, 'action');
}


switch ($action) {
   case 'addToCart':

      $productName = filter_input(INPUT_POST, 'product-name', FILTER_SANITIZE_STRING);
      $productCost = filter_input(INPUT_POST, 'product-cost', FILTER_SANITIZE_STRING);
      
               // array_push($cart_array, [$productName,$productCost]);
               // for($i = 0; $i < count($_SESSION['cart']); $i++){
               //    $_SESSION['cart'][$i] = Array($productName, $productCost);
               // }

               if (!empty($_SESSION['cart'])) {
                  $_SESSION['cart'] = array();
                  foreach ($cart AS $item) {
                    array_push($_SESSION['cart'], $item);
                  }
                }
            
      header('Location: /week-3-shopping-cart/view/home.php');
      break;

   default:
      include 'home.php';

}

?>