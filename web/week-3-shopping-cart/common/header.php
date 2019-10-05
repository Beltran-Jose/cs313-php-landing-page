<header>
    <a class="btn btn-success" href="/week-3-shopping-cart/view/cart.php">CART</a>
    <?php 
        echo count($_SESSION['cart']);
    ?>
</header>