<?php
include("./dbconnection.php");

if(isset($_POST['submit']))
{
    $c_name = $_POST["c_name"];
    $sql = "INSERT INTO compony(`compony_name`)
    VALUES('$c_name')";
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
    <form method="post" action="./compony.php">
        compony_name
        <input type="text" name="c_name">
        <input type="submit" name="submit">
    </form>
    <div class="list">
        <center>
            <!-- <form action="./php/senddbinfo.php" method="post"> -->
            <table border="1">
                <tr>
                    <td>
                        compony_id
                    </td>
                    <td>
                        compony_name
                    </td>
                </tr>
</body>
</html>