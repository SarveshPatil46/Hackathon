<?php
   
    include('db_connect.php');
    //create sql
    $email = mysqli_real_escape_string($conn,$_POST['usermail']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $dept = mysqli_real_escape_string($conn,$_POST['dept']);
    $year = mysqli_real_escape_string($conn,$_POST['year']);
    $userpswd =md5($_POST['userpass']);
    
    $sql = "INSERT INTO user (email,username,dept,year,pswd) VALUES ('$email','$username','$dept','$year','$userpswd');";
    //save to db and check
        if(mysqli_query($conn,$sql)){
            //success
             
            echo $email;
        
            header('location:index.php');
        }
        else{
            //error
            echo 'query error' . mysqli_error($conn);
        }
       
        mysqli_close($conn);

?>