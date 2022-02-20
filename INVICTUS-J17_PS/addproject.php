
<?php
 include('db_connect.php');

 error_reporting(0);
 //create sql
 session_start();


 if( $_SESSION["UserName"]){
   
 }
 else{
     header('location: login.php');
 }
 
    if(isset($_POST['submit'])){
     
     $tech = mysqli_real_escape_string($conn,$_POST['tech']);
     $domain = mysqli_real_escape_string($conn,$_POST['domain']);
     $projecttitle = mysqli_real_escape_string($conn,$_POST['projecttitle']);
     $name = mysqli_real_escape_string($conn,$_POST['name']);
     $year = mysqli_real_escape_string($conn,$_POST['year']);
     $dept = mysqli_real_escape_string($conn,$_POST['dept']);
     $desc = mysqli_real_escape_string($conn,$_POST['projectdescription']);
     $image = mysqli_real_escape_string($conn,$_POST['img']);
    
    
     
     $sql = "INSERT INTO projects (tech,domain,title,members,dept,year,description,image) VALUES ('$tech','$domain','$projecttitle','$name','$dept','$year','$desc','$image');";
     //save to db and check
         if(mysqli_query($conn,$sql)){
             //success
              
           
         
             header('location:projects_page.php');
         }
         else{
             //error
             echo 'query error' . mysqli_error($conn);
         }
        
        
 }

 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        header {
            background-color: #123c69;
            /* background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%); */
            color: white;
            padding:0.9rem;
            font-family:sans-serif;
        }

        body {
            background-color: #c7d3f2;
        }
        #logout{
           position:absolute;
           right:10px;
           top:20px;
           color:white;
        }
        #logout a{
            text-decoration:none;
        }
    </style>
</head>

<body>
    <header name="header">
        <img src="logo.png" width="75" height="75" class="d-inline-block">
        <p class="d-inline font-weight-bold h2">Welcome to Vivekanand Education Society's Institute of
            Technology 
            
        </p>
        <a id="logout" href="logout.php"><h5>Logout</h5></a>
    </header>
    <h1 class="text-center">Add Project</h1>
    <div class="row g-2  justify-content-center align-items-center w-100">
        <div class="col-md-6">
            <div class="container col-md card card-body shadow">
                <form action="addproject.php" method="POST">
                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                            <label for="dept">Department </label>
                        </div>
                        <div class="col-8">
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
                        <div class="col-4">
                            <label for="name" class="col-form-label">Team Members</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>

                    <br>


                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                            <label for="tech" class="col-form-label">Technology Used</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="tech" name="tech" class="form-control" required>
                        </div>
                    </div>

                    <br>


                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                            <label for="year">Year of Study</label>
                        </div>
                        <div class="col-8">
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

                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                            <label for="projecttitle" class="col-form-label">Project Title</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="projecttitle" name="projecttitle" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="row g-8 align-items-center">
                        <div class="col-4">
                            <label for="projectdescription" class="col-form-label">Project Description</label>
                        </div>
                        <div class="col-8">
                            <!-- <input type="text" id="projectdescription" name="projectdescription" cols="50" rows="10"
                                class="form-control"> -->
                            <textarea class="form-control" id="projectdescription" name="projectdescription" rows="4"
                                cols="50"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                            <label for="domain">Domain</label>
                        </div>
                        <div class="col-8">
                            <select class="selectdep form-select" id="domain" name="domain" aria-label="YearOfStudy"
                                required>
                                
                                <option selected value="android">Android</option>
                                <option value="web">Web</option>
                                <option value="desktop">Desktop</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3 align-items-center">
                        <div class="col-4">
                            <label for="img" class="col-form-label">Enter Image URL</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="img" name="img" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="justify-content-center row g-3">
                        <button class="btn btn-outline-primary" type="submit" name ='submit' value='submit' id="inputGroupFileAddon04">ADD
                            PROJECT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>