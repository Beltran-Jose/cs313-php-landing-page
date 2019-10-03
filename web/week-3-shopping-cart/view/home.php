<?php
    session_start();
    $cart_array = array();
    $_SESSION['cart'] = $cart_array;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Catalog</title>



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

<body>
    <header>

    </header>

    <main>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <form action="cart/index.php" method="POST">

                    <!-- Product Name -->
                    <p class="card-text">Product A</p>
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
                <h5 class="card-title">Card title</h5>
                <form action="cart/index.php" method="POST">

                    <!-- Product Name -->
                    <p class="card-text">Product B</p>
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


    </main>

    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>

    <!-- JAVSCRIPT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/scripts.php'; ?>
</body>

</html>