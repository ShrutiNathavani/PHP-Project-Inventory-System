<?php    
    session_start();
    function login(){
        include("./dbconnection.php");
        // if(isset($_POST['btn_login'])){
            $email = $_POST['emailid'];
            $password = $_POST['password'];  

            $sql = "SELECT * FROM erp WHERE email = '".$email."' AND password = '".$password."'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if ($result->num_rows > 0) 
            {
                // echo "Id: " . $row["id"]. " || Name: " . $row["username"]. " || " . $row["email"]. " || " . $row["password"]. "<br>";
                $_SESSION['username'] = $row['username'];
                header("Location: ../product.php");
            } 
            else 
            {
                // echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location: ../index.php");
            } 
            $conn->close();
        // }
    }
    function addProduct(){
        include("./dbconnection.php");    
      
        $name = $_POST['product_name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $sql = "INSERT INTO product (product_name, quantity,price) VALUES ('".$name."', $quantity, $price)";
        // $result = $conn->query($sql);
        
        if ($conn->query($sql) === TRUE) 
        {
            header("Location: ../table.php");
        } 
        else 
        {
            echo "values added";
        }
        $conn->close();
    }
    function purchase(){
        include("./dbconnection.php");
        $id = $_GET['id'];
        $que = $_POST['quantity'];
        $sql = mysqli_query($conn, "SELECT * FROM product WHERE product_id = $id");
        $row = $sql->fetch_assoc();
        // $result1 = $conn->query($sql1);
        $total = $que + $row['quantity'];
        // echo $total;
        // exit(0);
        $sql1 = "UPDATE product SET quantity = $total WHERE product_id = $id";
        if($conn->query($sql1) === TRUE){
            header("Location: ../table.php");
        }else{
            // header("Location: ../table.php");
            echo "Not updated";
        }
    }
    function sell(){
        // session_start();
        include("./dbconnection.php");
        $id = $_GET['id'];
        $_SESSION['id'] = $_GET['id'];
        
        $que = $_POST['quantity'];
        $sql = mysqli_query($conn, "SELECT * FROM product WHERE product_id = $id");
        $row = $sql->fetch_assoc();
        // $result1 = $conn->query($sql1);
        echo $_SESSION['pname'] = $row['product_name'];
        
        if($row['quantity'] != 0){
            if($row['quantity'] >= $que){
                $total = $row['quantity'] - $que;

                $sql1 = "UPDATE product SET quantity = $total WHERE product_id = $id";
                if($conn->query($sql1) === TRUE){
                    header("Location: ../table.php");
                }else{
                    // header("Location: ../table.php");
                    echo "Not updated";
                }
                if($total<=1)
                {
                    include("./TestEmail.php");
                    header("Location: ../table.php");    
                }
            }else{
                echo "I am Available ".$row['quantity'];
            }
        }else{
            echo "Product Is Not Available";
        }
        
    }

    if(isset($_POST['btn_login'])){
        login();
    }
    if(isset($_POST['submit_product'])){
        addProduct();
    }

    if(isset($_POST['purchase_btn'])){
        purchase();
    }
    if(isset($_POST['sell_btn'])){
        sell();

    }
?>

