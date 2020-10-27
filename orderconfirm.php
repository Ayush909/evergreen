<?php
    session_start();
    if (!isset($_SESSION['u_id'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evergreen | Garden Decor</title>
    <link rel="stylesheet" href="styles/orderConfirm.css">
</head>
<body>
    <div class="container">
        <h1>Your Order is Confirmed</h1>
        <h3>Thank You!</h3>

    <div class="buttons_container">
        <div><a href="index.php"><button class="button">Return to Homepage</button></a></div>
    </div>
    </div>
</body>
</html>
