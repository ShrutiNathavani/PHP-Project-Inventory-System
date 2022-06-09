<?php session_start();
include("./dbconnection.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE product_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $pname = $row['product_name'];
    $pprice = $row['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sell</title>
</head>
<body>
<div class="main">
    <img src="../img/logo.jpg" alt="Logo" style="width:60px;height:60px"></li>
            <ul>
            
              <ul class="list">
                  <li class="logo"><a href="#"></a>
                    
                  </div>
              </ul>
              <ul class="list2">
                <li class="active-menu"><a href="<img src="./erpsystem.jpg">Home</a></li>
                <li><a id="long" href="product.php">Product</a></li>
                <li><a href="table.php">Table</a></li>
                <li><a href="index.php">Sign In</a></li>
               
              </ul>
            </ul>
        </div>
    <div class="container_1">
        <h1><CENTER>SELL</CENTER></h1>
        <form action='./senddbinfo.php?id=<?php echo $id?>' method="post">
            <input type="text" class="p_name" name="product_name" value=<?php echo $pname;?> placeholder="product_name" disabled><br><br>
            <input type="text" class="qunt" name="quantity" placeholder="quantity"><br><br>
            <input type="text" class="ps" name="price" value=<?php echo $pprice;?> placeholder="price" disabled><br><br>
            <button type="submit" class="submit" name="sell_btn">Submit</button>
        </form>
    </div>
</body>
<Style>
 .main{
  overflow: hidden;
  position: fixed;
  background-color: rgba(135,206,250,0.4);
  top: 0;
  width: 100vw;
  height: 8vh;
  max-width: 1550px;
}

ul{
  list-style-type: none;
  margin-top: 40px;
  margin-right: 50px;
}

ul li{
  display: inline;
}

.list{
  position: fixed;
  display: block;
  top: 9px;
  float: left;
}

.list li.logo img{
  position: relative;
  float: left;
  top: -20px;
  margin-left: 10%;
  margin-right: 35px;
  -webkit-animation:spin 4s linear infinite;
  -moz-animation:spin 4s linear infinite;
  animation:spin 4s linear infinite;

}

.list input[type=image]{
  position: relative;
  float: right;
  top:-88px;
  left: 10%;
  margin-left: 20%; 
  padding: 4px;
  border-radius: 10px;
  border: 1px solid #00f;
  transition: 0.6s ease;
  background-color: #fff;
}

.list input[type=image]:hover{
  background-color: #739ac5;
}

.list2{
  position: relative;
  top: -20px;
  float: right;
}

.list2 li a{
  text-decoration: none;
  color: #fff;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.9s ease;
}

.list2 li a:hover{
  background-color: #fff;
  color: #000;

}

.list2 li.active-menu a{
  background-color: #fff;
  color: #000;
}

.search{
  display: inline;
  color: black;
  text-align: center;
  text-decoration: none;
}

.search input[type=text]{
  position: relative;
  float: left;
  top:-55px;
  left: 22%;
  padding: 6px;
  font-size: 15px;
  border-radius: 15px;
  border: 1px solid #0000ff;
  transition: 0.6s ease;
}

.search input[type=text]:hover{
  background-color: #dcdcdc;
}
body{
    background: linear-gradient(90deg, #C7C5F4, #776BCC);
}
.container_1{
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 550px;
  background: white;
  border-radius: 15px;
  opacity: 0.9;
  height:500px;
}
.p_name{
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 20px;
	padding-left: 115px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
	align-items: center;
    text-align:center;
  
}
.qunt{
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 20px;
	padding-left: 115px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
	align-items: center;
    text-align: center;
  
}
.ps{
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 20px;
	padding-left: 115px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
	align-items: center;
    text-align:center;
  
}
.submit{
	background: #fff;
	font-size: 15px;
	margin-top: 20px;
	padding: 15px 250px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
  }
</style>
</html>
|
