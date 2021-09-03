<?php
    $db_hostname = "";//Enter the hostname of your database
    $db_username = ""; //Enter the name user name of your workbench
    $db_password = ""; //Enter the password of your workbench
    $db_name = ""; //Enter the name of your database that you created

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "connection failed: ".mysqli_connect_error();
        exit;
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

    $result = mysqli_query($conn,$sql);
    if (!$result){
        echo "Error:" .mysqli_error($conn);
        exit;
    }

    echo "Resgistration successful <div style = 'text-decoration:none;'><a href = 'login.html'>LOGIN NOW....</a></div>";
    mysqli_close($conn);    
    
?>
