<?php 
session_start();

if (isset($_SESSION['name'])) {
    header("Location: welcome.php");
}
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
        <li><a class="right rightStyle" href="my_products.php">My Products</a></li>
        <li><a class="right rightStyle" href="sell.php">Marketplace</a></li>
        <li><a class="right rightStyle active" href="login.php">Login</a></li>
        <li><a class="right rightStyle" href="index.php">Home</a></li>
    </ul>
    <div class="mainDiv">
        <div class="formStyle">
            <h1 align="center">User Login</h1> <br />
            <form align="center" action="login_farmer.php" method="POST">
                <label>Username: </label>
                <br/>
                <input type="text" name="username" placeholder="Username" required>
                <br/>
                <label>Password: </label>
                <br/>
                <input type="password" name="password" placeholder="Password" required> 
                <br/>
                <input type="submit" name="submit" value="Login">
                <br/>
                <a class="clickHere" href="registration.php">Don't have an account? Click here!</a>
            </form>
        </div>
    </div>

    <div class="footer">
            
    </div>
</body>
</html>