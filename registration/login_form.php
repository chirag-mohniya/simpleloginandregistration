<?php
    $db_hostname = ""; //Enter the hostname of your database
    $db_username = ""; //Enter the name user name of your workbench
    $db_password = ""; //Enter the password of your workbench
    $db_name = "";//Enter the name of your database that you created

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






