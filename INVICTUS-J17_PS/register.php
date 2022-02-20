<?php
   
    include('db_connect.php');

   if(isset($_POST['submit'])){
    //create sql
    $email = mysqli_real_escape_string($conn,$_POST['usermail']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $dept = mysqli_real_escape_string($conn,$_POST['dept']);
    $year = mysqli_real_escape_string($conn,$_POST['year']);
    $userpswd =md5($_POST['userpass']);
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@ves.ac.in$/'; 
    if (preg_match($regex, $email)) {
        $sql = "INSERT INTO user (email,username,dept,year,pswd) VALUES ('$email','$username','$dept','$year','$userpswd');";
    //save to db and check
        if(mysqli_query($conn,$sql)){
            //success
            session_start(); 
            $_SESSION['UserName'] = $username;
        
            header('location: addproject.php');
        }
        else{
            //error
            echo 'query error' . mysqli_error($conn);
        }
       
        mysqli_close($conn);
       } else { 
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
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <style>
        header {
            background-color: #123C69;
            color: white;
            font-family:sans-serif;
        }

        .buttons {
            background-color: #AC3B61;
            color: white;
        }

        body {

            background-color: #c7d3f2;
        }

        #login-box {
            background-color: #fadccc;
        }
    </style>
</head>

<body style="background-image:url('img/13.jpg'); background-repeat: no-repeat; background-size: 100%;">
    <header name="header">
        <img src="logo.png" width="75" height="75" class="d-inline-block">
        <p class="d-inline font-weight-bold h2">Welcome to Vivekanand Education Society's Institute of
            Technology
        </p>
    </header>

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

    <h1 class="text-center mt-3">REGISTER</h1>

    <section class="container">
        <div class="row g-2 justify-content-center mt-3 pt-5">

            <div class="col-md-4">
                <div class="container col-md card card-body shadow">
                    <form class="form" method="post" action="register.php">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Full name">
                            <label for="username">Full name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="usermail" name="usermail"
                                placeholder="name@example.com">
                            <label for="email">Email address</label>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="">
                                <select class="selectdep form-select" id="dept" name="dept" aria-label="Department"
                                    required>
                                    <option selected value="">-- Select Department --</option>
                                    <option value="AIDS">AIDS</option>
                                    <option value="CMPN">CMPN</option>
                                    <option value="IT">IT</option>
                                    <option value="EXTC">EXTC</option>
                                    <option value="ETRX">ETRX</option>
                                    <option value="INST">INST</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3 align-items-center">
                            <div class="">
                                <select class="selectdep form-select" id="year" name="year" aria-label="YearOfStudy"
                                    required>
                                    <option selected value="">-- Select Year --</option>
                                    <option value="FE">FE</option>
                                    <option value="SE">SE</option>
                                    <option value="TE">TE</option>
                                    <option value="BE">BE</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="userpass" name="userpass"
                                placeholder="Password">
                            <label for="pswd">Password</label>
                        </div>
                        <div class="mb-3 text-center">
                            <input class="btn btn-sm btn-outline-primary ps-3 pe-3" type="submit" value="SUBMIT"
                                id="btn-register" name="submit">
                        </div>
                        <div class="form-text mb-2 text-center">
                            <div class="row">
                                <div class="col">
                                    <a class="link text-decoration-none" href="login.php">Already have account?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-md-8">

                </div> -->
            </div>
    </section>
    <footer>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/validateRegister.js"></script>
</body>

</html>