<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <!-- Header -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/week-3-shopping-cart/common/header-cart.php'; ?>

    <main>
        <h1>Checkout</h1>

        <form action="/week-3-shopping-cart/cart/index.php" method="POST">
            <div class="form-group">
                <label for="address">Home address</label>

                <textarea class="form-control" id="address" name="home-address" aria-describedby="address-help"
                    placeholder="Enter home address"></textarea>

                <small id="address-help" class="form-text text-muted">We'll never share your information with anyone
                    else.</small>
            </div>
            <input type="hidden" name="action" value="completePurchase">
            <input type="submit" class="btn btn-primary" value="Complete Purchase">
        </form>

    </main>

    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>

    <!-- JAVSCRIPT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/scripts.php'; ?>
</body>

</html>