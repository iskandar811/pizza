<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
  <title>Payment Success</title>
  <style>
    body {
      text-align: center;
      padding-top: 100px;
      font-family: Arial, sans-serif;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .success-icon {
      color: #5cb85c;
      font-size: 80px;
      margin-bottom: 30px;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 20px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="success-icon">
    <i class="fa fa-check-circle"></i>
  </div>
  <h1>Payment Successful!</h1>
  <p>Thank you for your payment. Your transaction has been completed.</p>
  <a href="../viewOrder.php" class="button">Back to Home</a>
</body>
</html>
