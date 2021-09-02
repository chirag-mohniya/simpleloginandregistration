<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "chirag5048";
    $db_name = "test";

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "connection failed: ".mysqli_connect_error();
        exit;
    }
    $sql = "select * from users";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,$sql);
    if (!$result){
        echo "Error:" .mysqli_error($conn);
        exit;
    }

    while($row = mysqli_fetch_assoc($result)){
        if($row['password'] == $password){
            $correct = '<h2><a href ="new.html"> Welcome Click Here...</a><h2>';
            echo $correct;
            exit;
        }
        else{
            $correct = false;
        }
    }
    if($correct == false){
        echo "<h1> Invalid Email/password </h1>";
    }
        
    
    mysqli_close($conn);   
    
?>






