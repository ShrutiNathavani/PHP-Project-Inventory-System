<?php
    session_start();  
    include("./dbconnection.php");    
      
    $name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    
    $sql = "INSERT INTO product (product_name, quantity,price) VALUES ('".$name."', $quantity, $price)";
    // $result = $conn->query($sql);
    
    if ($conn->query($sql) === TRUE) 
    {
        echo "New Record Added";
    } 
    else 
    {
        echo "values added";
    }
    $conn->close();
?>