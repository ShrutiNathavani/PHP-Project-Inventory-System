<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>
    <link rel="stylesheet" href="./css/product.css">
</head>

<body>
<div class="main">
    <img src="./img/logo.jpg" alt="Logo" style="width:60px;height:60px">
            <ul>
            
              <ul class="list">
                  <li class="logo"><a href="#"></a>
                    
                  </div>
              </ul>
              <ul class="list2">
                <li class="active-menu"><a <img src="./img/logo.jpg" alt="Logo" style="width:60px;height:60px">Home</a></li>
                <li><a id="long" href="product.php">Product</a></li>
                <li><a href="table.php">Table</a></li>
                <li><a href="index.php">Sign In</a></li>
               
              </ul>
            </ul>
        </div>

    <div class="container">
        <h1><center>ERP SYSTEM</center></h1>
        <center>
        <form action="./php/senddbinfo.php" method="post">
            <input type="text" class="p_name" name="product_name" placeholder="product_name"><br><br>
            <input type="text" class="qunt" name="quantity" placeholder="quantity"><br><br>
            <input type="text" class="ps" name="price" placeholder="price"><br><br>
            <button type="submit" class="submit" name="submit_product">Submit</button>
        </form>

        <br>
        <a href="./table.php" class="view">View Product Data</a>
        </center>
    </div>

</body>

</html>
