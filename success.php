<?php

require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['product_id'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_products SET status='Confirmed' WHERE user_id=" . $user_id . " AND product_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success</title>
        
    </head>
    <body>
        <?php include 'header2.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include("footer.php");
        ?>
    </body>
</html>