<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zip = htmlspecialchars($_POST['zip']);
    
    $cardname = htmlspecialchars($_POST['cardname']);
    $cardnumber = htmlspecialchars($_POST['cardnumber']);
    $expmonth = htmlspecialchars($_POST['expmonth']);
    $expyear = htmlspecialchars($_POST['expyear']);
    $cvv = htmlspecialchars($_POST['cvv']);
} else {
    header("Location: card.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        .details {
            margin-bottom: 15px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment Details</h2>
    <div class="details"><strong>First Name:</strong> <?php echo $firstname; ?></div>
    <div class="details"><strong>Email:</strong> <?php echo $email; ?></div>
    <div class="details"><strong>Address:</strong> <?php echo $address; ?></div>
    <div class="details"><strong>City:</strong> <?php echo $city; ?></div>
    <div class="details"><strong>State:</strong> <?php echo $state; ?></div>
    <div class="details"><strong>Zip:</strong> <?php echo $zip; ?></div>
    <hr>
    <h2>Card Details</h2>
    <div class="details"><strong>Name on Card:</strong> <?php echo $cardname; ?></div>
    <div class="details"><strong>Card Number:</strong> **** **** **** <?php echo substr($cardnumber, -4); ?></div>
    <div class="details"><strong>Expiry Date:</strong> <?php echo $expmonth . " " . $expyear; ?></div>
    <form action="confirm.php" method="post">
        <button type="submit" class="btn">Payment</button>
    </form>
</div>

</body>
</html>
