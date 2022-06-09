<?php  
include("./php/dbconnection.php");
$id = $_GET['id'];
$name = $_GET['name'];
if(isset($_POST['submit']))
{
    $c_name = $_POST["c_name"];
    $sql = "INSERT INTO compony(`compony_name`)VALUES('$c_name')";
    $query = mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main">
    <img src="./img/logo.jpg" alt="Logo" style="width:60px;height:60px"></li>
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
<br><br><br><br><br><br>
    <form method="post" action="./compony.php?id=<?php echo $id;?>&name=<?php echo $name;?>">
        <input type="text" name="c_name" placeholder="company_name" class="company">
        <input type="submit"id="submit" name="submit">
    </form>
</body>
<style>
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
#table1 {
	border-collapse: collapse;
	width: 100%;
	font-family: Arial, Helvetica, sans-serif;
	
	font-size: larger;
	font-weight: 300;
	align-items: center;
}

#table1 td,
#table1 th {
	border: 1px solid #ddd;
	padding: 8px;
}

#table1 tr:nth-child(even) {
	background-color: #C7C5F4;
}

#table1 tr:hover {
	background-color: #ddd;
}

#table1 th {
	padding-top: 12px;
	padding-bottom: 12px;
	text-align: center;
	background-color: #776BCC;
}
#purchase {
	background-color: #776bcc; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
}
#submit{
	background-color: #776bcc; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }
.company {
  border: none;
  border-bottom: 2px solid #D1D1D4;
  background: none;
  padding: 35px;
  padding-left: 20px;
  font-weight: 700;
  transition: .2s;
  align-items: center;

}
</style>


<?php

                $conn = mysqli_connect('localhost','root', '','erpsystem');  
                if (! $conn) {  
                        die("Connection failed" . mysqli_connect_error());  
                }  
                else {  
                        mysqli_select_db($conn, 'crms');
                }
                    
            
                $query = "SELECT * FROM compony";     
                $result = mysqli_query ($conn, $query);    
                ?>      
                <table border=1 id="table1">    
                    <tr>     
                        <th>company_id</th>   
                        <th>company_name</th>
                        <th>purchase </th>
                    </tr>   
                    
                
                <?php     
                    while ($row = mysqli_fetch_array($result)) {                
                ?>     
                    <tr>     
                        <td><?php echo $row["compony_id"];?></td>     
                        <td><?php echo $row["compony_name"];?></td>
                        <td><a href='./php/<?php echo $name?>.php?id=<?php echo $id; ?>'><button id="purchase"name='purchase'><?php echo $name?></button></a></td>
                    </tr>     
                    <?php     
                        };   
                    ?>       
                    
                </table>  
</html>