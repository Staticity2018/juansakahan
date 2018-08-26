<?php 
session_start();
require_once('dbconnection.php');

if (isset($_POST['submit'])) {
    $prod_variety = mysqli_real_escape_string($conn, $_POST['prod_variety']);
    $prod_kilo = mysqli_real_escape_string($conn, $_POST['prod_kilo']);
    
    // Query to calculate total price (prod_kilo * rice_price)
    $query = "SELECT $prod_kilo * rice_price AS totalprice FROM variety WHERE rice_variety = '{$prod_variety}'";
    $result = $conn->query($query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $prod_price = $row['totalprice'];
        $farmer_name = $_SESSION['name'];

        $query = "INSERT INTO rice_product VALUES (DEFAULT, '{$prod_variety}', {$prod_kilo}, {$prod_price}, '{$farmer_name}', 'Unvalidated')";
        $result = $conn->query($query);

        if ($result) {
            header('location: welcome.php');
        }
    }
}
?>