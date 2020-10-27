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
    <title>Evergreeen |  Garden Decor</title>
    <link rel="stylesheet" href="styles/payment.css">
    <script src = "Payment.js" type = "text/javascript"></script>
</head>
<body>
    <div class="payment-page">
        <h1>Payment By Credit Card</h1>
        <div class="form">
          <form class="login-form" action="orderconfirm.php">
            <input type="text" placeholder="Total Amount"/>
            <input type="number" placeholder="Card Number"/>
            <button class="button">Submit</button>
            <br><br>
              <button class = "button" onclick = "Display();" name = "ok">Cash on Delivery</button> 
        </div>
      </div>

</body>
</html>
