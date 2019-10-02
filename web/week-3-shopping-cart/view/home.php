<?php
    session_start();
    $cart_array = array();
    $_SESSION['cart'] = $cart_array;

    $_SESSION['cart'][] = "first entry";
    $_SESSION['cart'][] = "second entry";

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
                <form action="view/cart.php" method="POST">
                    <textarea class="card-text" name="product-name" value="Product 1"
                        readonly=readonly>Product 1</textarea>
                    <p class="card-text" name="product-price" value="55.00">price</p>

                    <input type="submit" class="btn btn-primary" name="submit" value="BUY NOW" style="visibility :hidden;" id="primaryButton">
                    <input type="hidden" name="action" value="addToCart">
                </form>
            </div>
        </div>


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>


        <!-- Modal -->
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="document.getElementById('primaryButton').click()">View Cart</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue Shopping</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>

    <!-- JAVSCRIPT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/scripts.php'; ?>
</body>

</html>