<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $applianceName = $_POST['applianceName'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total = $quantity * $price;

    $stmt = $conn->prepare("INSERT INTO bills (appliance_name, quantity, price, total) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siid", $applianceName, $quantity, $price, $total);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Generated</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .container {
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
    width: 300px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Bill for <?php echo htmlspecialchars($applianceName); ?></h1>
        <p>Quantity: <?php echo htmlspecialchars($quantity); ?></p>
        <p>Price per Unit: $<?php echo htmlspecialchars($price); ?></p>
        <h2>Total: $<?php echo htmlspecialchars($total); ?></h2>
    </div>
</body>
</html>
