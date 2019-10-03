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

      $_SESSION['cart'][] = Array($productName, $productCost);

      include '../view/cart.php';
      break;

   default:
      include 'home.php';

}

?>