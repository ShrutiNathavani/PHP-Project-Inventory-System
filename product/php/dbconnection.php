<?php    
    $host = "localhost";  
    $user = "erp_system";  
    $password = '';  
    $db_name = "erpsystem";
    $conn = mysqli_connect($host, $user, $password, $db_name);  

    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    // echo "connect";
?>