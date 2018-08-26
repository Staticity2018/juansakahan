<?php 
session_start();
require_once('dbconnection.php');

if (empty($_SESSION['name'])) {
    header('location: index.php');
}

function prodCount() {
    global $conn;

    $query = "SELECT * FROM rice_product WHERE farmer_name = '{$_SESSION['name']}'";
    $result = $conn->query($query);
    $count = mysqli_num_rows($result);
    echo $count;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to JuanSakahan</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['name'].'.'; ?></h1>
    <a href="sell.php">Sell rice</a> &nbsp; <a href="my_products.php">My Products (<?php prodCount(); ?>)</a>
    <br><br>
    <a href="logout.php">Click here to logout!</a>
</body>
</html>