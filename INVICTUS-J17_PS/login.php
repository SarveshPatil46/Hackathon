<?php
   
    include('db_connect.php');
 

    if(isset($_POST['submit'])){
    $email = $_POST['usermail'];
    $pswd = md5($_POST['userpass']);
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@ves.ac.in$/'; 
    if (preg_match($regex, $email)) {
    $sql = "SELECT * FROM user WHERE email='$email' AND pswd ='$pswd' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if($row['email'] == $email && $row['pswd'] == $pswd){
        session_start();
        $_SESSION['UserName'] = $row['username'];
        header('location: addproject.php');
      
      
    }else{
        header('location:register.php');
    }
}else{
    echo $email . " is an invalid email. Please try again.";
}
   
    
}  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <style>
        header {
            background-color: #123c69;
            color:white;
            font-family:sans-serif;
        }

        .buttons {
            /* background-color: #ffffff; */
            color: black;
        }

        body {
            background-color:  #c7d3f2;
        }

        #login-box {
            background-color: white;
        }
    </style>
</head>

<body>
    <header name="header">
        <!-- <img src="logo.png" width="75" height="75" class="d-inline-block">
        <p class="d-inline font-weight-bold h2">Welcome to Vivekanand Education Society's Institute of
            Technology
        </p> -->
    
    <div>
    <!-- <form action="index.php" class="d-inline">
                <button class="buttons btn btn-primary mx-2" type="submit">
                    Home
                </button>
    </form>

    <form action="projects_page.php" class="d-inline">
                <button class="buttons btn btn-primary mx-2" type="submit">
                    Projects
                </button>
    </form> -->

    <div class ="row g-2 col md-4">
   <div class="col-10">
   <img src="logo.png" width="75" height="75" class="d-inline-block">
        <p class="d-inline font-weight-bold h2">Welcome to Vivekanand Education Society's Institute of
            Technology
        </p>
   </div>

    <div class="col-1 mt-3">
    <form action="projects_page.php" class="d-inline">
                <button class="buttons btn btn-primary mx-2" type="submit">
                    Projects
                </button>
            </form>
    </div>

    <div class="col-1 mt-3">
    <form action="register.php" class="d-inline">
                <button class="buttons btn btn-primary mx-2" type="submit">
                    Register
                </button>
            </form>
    </div>
    </header>
        <h1 class="text-center mt-3">LOGIN</h1>
        <section class="container">
            <div class="row g-2 justify-content-center mt-3 pt-5">
                <div class="col-md-4">
                    <div class="container col-md card card-body shadow" id="login-box">
                        <form class="form" method="post" action="login.php">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="usermail" name="usermail"
                                    placeholder="name@example.com" required>
                                <label for="usermail">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="userpass" name="userpass"
                                    placeholder="Password" required>
                                <label for="userpass">Password</label>
                            </div>
                            <div class="mb-3 text-center">
                                <input class="btn btn-outline-primary-success ps-3 pe-3 buttons" type="submit"
                                    value="submit" id="btn-login" name="submit">
                            </div>
                            <div class="form-text mb-2 text-center">
                                <div class="row">
                                    <div class="">
                                        <a class="link text-decoration-none" href="register.php"><h6>CREATE ACCOUNT</h6></a>
                                    </div>
                                   
                                   
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/validateLogin.js"></script>
</body>

</html>