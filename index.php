<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Appliances Billing</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
    width: 300px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="number"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background: #007BFF;
    border: none;
    color: #fff;
    cursor: pointer;
    border-radius: 4px;
}

button:hover {
    background: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Home Appliances Billing System</h1>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="applianceName">Appliance Name:</label>
                <input type="text" id="applianceName" name="applianceName" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="price">Price per Unit:</label>
                <input type="number" id="price" name="price" step="0.01" required>
            </div>
            <button type="submit">Generate Bill</button>
        </form>
    </div>
</body>
</html>
