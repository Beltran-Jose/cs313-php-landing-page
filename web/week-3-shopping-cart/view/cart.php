<?php
    session_start();

    // $name = htmlspecialchars($_POST["product-name"]);
    // $price = htmlspecialchars($_POST["product-price"]);
    // $description = htmlspecialchars($_POST["product-description"]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <!-- Header -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/week-3-shopping-cart/common/header-cart.php'; ?>
    <main>
    <h2>test</h2>

    <?php 
    
        foreach($_SESSION['cart'] as $i){
                echo '<table class="table">
                        <tr>
                            <th>Product</th>
                            <th>Cost</th>
                        </tr>
                        <tr>
                            <td>'.$i[0].'</td>
                            <td>'.$i[1].'</td>
                        </tr>
                        </table>'; 
        }

        var_dump($_SESSION['cart']);
    ?>

    </main>
    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/footer.php'; ?>

    <!-- JAVSCRIPT -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/common/scripts.php'; ?>
</body>

</html>