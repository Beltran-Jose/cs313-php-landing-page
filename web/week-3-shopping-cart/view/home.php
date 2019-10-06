<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Catalog</title>

    <!-- <link rel="stylesheet" href="styles/styles.css"> -->
    <link rel="stylesheet" href="/week-3-shopping-cart/styles/styles.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        textarea {
            background: 0;
            border: 0;
            width: 100%;
            overflow: visible;
            outline: 0;
            height: auto;
            resize: none;
        }
    </style>

</head>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/week-3-shopping-cart/common/header.php'; ?>

<body>

    <main>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product A</h5>
                <form action="/week-3-shopping-cart/cart/index.php" method="POST">

                    <!-- Product Name -->
                    <input type="hidden" name="product-name" value="Product A">

                    <!-- Product Cost -->
                    <p class="card-text">$55.00</p>
                    <input type="hidden" name="product-cost" value="55.00">

                    <!-- submission -->
                    <input type="submit" class="btn btn-primary" name="submit" value="BUY NOW" id="primaryButton">
                    <input type="hidden" name="action" value="addToCart">

                </form>
            </div>
        </div>

        <br>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product B</h5>
                <form action="/week-3-shopping-cart/cart/index.php" method="POST">

                    <!-- Product Name -->
                    <input type="hidden" name="product-name" value="Product B">

                    <!-- Product Cost -->
                    <p class="card-text">$100.00</p>
                    <input type="hidden" name="product-cost" value="100.00">

                    <!-- submission -->
                    <input type="submit" class="btn btn-primary" name="submit" value="BUY NOW" id="primaryButton">
                    <input type="hidden" name="action" value="addToCart">

                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product B</h5>
                <form action="/week-3-shopping-cart/cart/index.php" method="POST">

                    <!-- Product Name -->
                    <input type="hidden" name="product-name" value="Product B">

                    <!-- Product Cost -->
                    <p class="card-text">$100.00</p>
                    <input type="hidden" name="product-cost" value="100.00">

                    <!-- submission -->
                    <input type="submit" class="btn btn-primary" name="submit" value="BUY NOW" id="primaryButton">
                    <input type="hidden" name="action" value="addToCart">

                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product C</h5>
                <form action="/week-3-shopping-cart/cart/index.php" method="POST">

                    <!-- Product Name -->
                    <input type="hidden" name="product-name" value="Product C">

                    <!-- Product Cost -->
                    <p class="card-text">$200.00</p>
                    <input type="hidden" name="product-cost" value="200.00">

                    <!-- submission -->
                    <input type="submit" class="btn btn-primary" name="submit" value="BUY NOW" id="primaryButton">
                    <input type="hidden" name="action" value="addToCart">

                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product D</h5>
                <form action="/week-3-shopping-cart/cart/index.php" method="POST">

                    <!-- Product Name -->
                    <input type="hidden" name="product-name" value="Product D">

                    <!-- Product Cost -->
                    <p class="card-text">$25.00</p>
                    <input type="hidden" name="product-cost" value="25.00">

                    <!-- submission -->
                    <input type="submit" class="btn btn-primary" name="submit" value="BUY NOW" id="primaryButton">
                    <input type="hidden" name="action" value="addToCart">

                </form>
            </div>
        </div>

        <!-- <?php 
    
                 foreach($_SESSION['cart'] as $i){
                   foreach($i as $key => $value){
                     echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
                     }       
                 }
                 var_dump($_SESSION['cart']);
                 ?> -->

    </main>

    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>

    <!-- JAVSCRIPT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/scripts.php'; ?>
</body>

</html>