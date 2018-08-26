<?php 
session_start();
require_once('dbconnection.php');

$query = "SELECT * FROM rice_product WHERE farmer_name = '{$_SESSION['name']}'";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to JuanSakahan</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <ul class="navbar">
        <li class="left leftStyle"><a class="active" href="index.php"><b>JUANSAKAHAN</b></a></li>
        <li class="left"><span class="headDescrip">An e-commerce for farmers</span></li>
        <li><a class="right rightStyle active" href="my_products.php">My Products</a></li>
        <li><a class="right rightStyle" href="sell.php">Marketplace</a></li>
        <li><a class="right rightStyle" href="login.php">Login</a></li>
        <li><a class="right rightStyle" href="index.php">Home</a></li>
    </ul>
    
    <div id="regHeader" class="mainDiv ">
            <div class="formStyle">
                <h1 align="center">My Products</h1>
                <table>
                <tr>
                    <th>Variety</th>
                    <th>Kilograms</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
                <?php 
                while ($row = $result->fetch_assoc()) {
                    echo '<tr><td>'.$row['prod_variety'].'</td><td>'.$row['prod_kilo'].'kg</td><td>₱ '.$row['prod_price'].'</td><td>'.$row['prod_status'].'</td></tr>';
                }          
                ?>
            </table>
            <a class="clickHere" href="welcome.php">Go back</a>
        </div>
            
     </div>
        
    <div class="footer">
            
    </div>
</body>
</html>