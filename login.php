<?php
   
    include('db_connect.php');
    
    

    $email = $_POST['usermail'];
    $pswd = mysqli_real_escape_string($conn, $_POST['userpass']);
    $pswd = md5($_POST['userpass']);
    $sql = "SELECT * FROM users WHERE email='$email' AND pswd='$pswd'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if($usermail == "" && $userpass == ""){
        header('location: ../index.html');
    }
    if($row['email'] == $email && $row['pswd'] == $pswd){
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header('location: home.php');
    }else{
        header('location: ../index.html');
    }
    if(!isset($_SESSION['username'])){
        header('location: ../index.html');
    }
?>