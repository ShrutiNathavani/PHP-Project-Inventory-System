<?php
    include("./php/dbconnection.php");
    
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <link rel="stylesheet" href="./css/table.css">
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
<div>
        <center>
            <br><br><br><br><br><br>
            <!-- <form action="./php/senddbinfo.php" method="post"> -->
            <table border="1" id="table1">
                <tr>
                    <td>
                        Product Name
                    </td>
                    <td>
                        Qauntity
                    </td>
                    <td>
                        Price
                    </td>
                    <td>
                        Purchase
                    </td>
                    <td>
                        Sell
                    </td>
                </tr>
                <?php
                    $count1 = mysqli_query($conn,"SELECT COUNT(*) as total FROM product");
                    $row = $count1->fetch_assoc();
                    $size=6;
                    $start=0;
                    $totalpage = ceil($row['total']/$size);
                    if(isset($_POST['paging'])){
                        $start = (($_POST['paging'])-1)*$size;
                    }
                    $sql = "SELECT * FROM product limit $start,$size";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $id = $row['product_id'];
                        $pname =  $row['product_name'];
                        $quntity = $row['quantity'];
                        $price = $row['price'];
                        echo "<tr>
                            <td>$pname</td>
                            <td>$quntity</td>
                            <td>$price</td>
                            
                            <td><a href='./compony.php?id=$id&name=Purchase'><button id='purchase' name='purchase'>Click Me</button></a></td>
                            <td><a href='./compony.php?id=$id&name=Sell'><button id='sell' name='sell'>Click Me</button></a></td>
                        </tr>";
                    }
            ?>
            </table>
            <?php
            echo "<table>";
            echo "<tr>";
            for ($i=1; $i <= $totalpage ; $i=$i+1) { 
                echo "<td>
                <form method='post' action='./table.php'>
                    <input type='hidden' name='paging' value='$i'></input>
                    <button type='submit' name='submit' value='$i'>$i</button>
                </form>
                </td>";
            }
            echo "</tr>";
            echo "</table>";
        ?>
        </center>
    </div>
</body>
</html>
<!-- <td><a href='./php/sell.php?id=$id'><button id='sell' name='sell'>Sell</button></a></td> -->
