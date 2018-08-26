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
        <li><a class="right rightStyle" href="my_products.php">My Product</a></li>
        <li><a class="right rightStyle active" href="sell.php">Marketplace</a></li>
        <li><a class="right rightStyle" href="login.php">Login</a></li>
        <li><a class="right rightStyle" href="index.php">Home</a></li>
    </ul>
    <div class="mainDiv">
        <div class="formStyle">
        <h1 align="center">Sell Rice</h1>
            <form action="sell_rice.php" method="POST">
                <label>Variety: </label>
                <select name="prod_variety">
                    <option value="7-Tonner">7-Tonner</option>
                    <option value="Banay-Banay">Banay-Banay</option>
                    <option value="160 Rice">160 Rice</option>
                    <option value="NFA">NFA</option>
                </select>
                <br/> <br/>
                <label>Kilo(s): </label> <br />
                <input type="number" name="prod_kilo" placeholder="xx" required>
                <br>
                <input type="submit" name="submit" placeholder="Sell now!"> <br />
                <a class="clickHere" href="welcome.php">Cancel</a>
            </form>
        </div>
    </div>

    <div class="footer">
            
    </div>
</body>
</html>