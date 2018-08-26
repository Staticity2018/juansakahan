<?php 
require_once('register_farmer.php');

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
    <div>
        <div id="regHeader" class="mainDiv ">
            <div>
            <h1 id="registrationHeader regHeader" align="center">Farmer's <span>Registration</span></h1>
                <form action="register_farmer.php" method="POST">
                    <label>Username: </label>
                    <input type="text" name="username" placeholder="Username">
                    <br/>
                    <label>Password: </label>
                    <input type="password" name="password" placeholder="Password">
                    <br/>
                    <label>Name: </label><br />
                    <input type="text" name="name" placeholder="Name">
                    <br>
                    <label>Email: </label> <br />
                    <input type="email" name="email" placeholder="Email">
                    <br>
                    <label>Contact no.: </label><br />
                    <input type="number" name="contact" placeholder="09123456780">
                    <br>
                    <input type="submit" name="submit" value="Register"> <br />
                    <a class="clickHere toLogin" href="login.php">Click here to Login!</a>
                </form>
            </div>
            
        </div>
    </div>

    <div class="footer">
            
    </div>
    
</body>
</html>