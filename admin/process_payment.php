<!DOCTYPE html>
<html>
    <style>
        .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
    text-align: center;
}

h1 {
    color: #333;
}

label {
    display: block;
    margin-bottom: 10px;
    text-align: left;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 15px;
}

input[type="submit"] {
    background-color: #387178;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

    </style>
<head>
    <title>Payment Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Payment Form</h1>
        <form action="process_payment.php" method="post">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>
            
            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" required>
            
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
            
            <input type="submit" value="Pay">
							
        </form>
    </div>
</body>
</html>
<?php
