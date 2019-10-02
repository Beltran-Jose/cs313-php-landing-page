<?php
    session_start();

    $_SESSION['cart'][] = $_POST['product'];

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

</head>

<body>
    <header>

    </header>

    <main>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">card text.</p>
                <a href="#" class="btn btn-primary">BUY NOW</a>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>

    <!-- JAVSCRIPT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/scripts.php'; ?>
</body>

</html>