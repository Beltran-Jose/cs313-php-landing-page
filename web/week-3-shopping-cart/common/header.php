<header>
    <a class="btn btn-success" href="/week-3-shopping-cart/view/cart.php">
        CART 
        <?php 
            echo " " + count($_SESSION['cart']);
        ?>
    </a>

</header>