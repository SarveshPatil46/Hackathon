<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="card shadow-sm p-1 mb-5 bg-body rounded" style="width: 18rem;">
        <img src="AI.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Project Title : </p>
            <p class="card-text">Domain : </p>
            <p class="card-text">Department : </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                View More
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                Project Title :
                            </div>
                            <div>
                                Project Description :
                            </div>
                            <div>
                                Year of Study :
                            </div>
                            <div>
                                Team Members :
                            </div>
                            <div>
                                Project Images :
                            </div>
                            <div>
                                Technology Used :
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>

<!-- <?php
error_reporting(0);
include('db_connect.php');

  $title = $_POST['title'];
  $dept = $_POST['dept'];
  $members = $_POST['members'];
  $description = $_POST['description'];
  $year = $_POST['year'];
  $image = $_POST['image']; 
  $tech = $_POST['tech'];
  $domain = $_POST['domain'];

  $sql = "SELECT * FROM projects WHERE title LIKE '%$title%' ";
  
  $result=mysqli_query($conn,$sql);
  if(!$_POST['title']){
    echo "";
  }else{
      echo "<p>";
      echo "<p>";
      echo "<p>";
      echo "<p>";
    while($row=mysqli_fetch_array($result)){
      echo "<img src="" width="175" height="200"></img>";
      echo "<p>";
      echo "<p>";
    }
    echo "</p></br></br>";
     mysql_close($link);
 }
?> -->

<!-- <?php
// if (isset($_SESSION['username'])) {
//     $userLoggedIn = $_SESSION['username'];
//     $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'" );
//     $user = mysqli_fetch_array($user_details_query);


//     $user_id = $user['id'];
//     $data_detail_query = mysqli_query($con, "SELECT * FROM projects WHERE title ='$title'");
//     $data = mysqli_fetch_array($data_detail_query);

//     $num_rows = mysqli_num_rows($data_detail_query);
    
    include('db_connect.php');

    $title = $_POST['title'];
    $dept = $_POST['dept'];
    $members = $_POST['members'];
    $description = $_POST['description'];
    $year = $_POST['year'];
    $image = $_POST['image']; 
    $tech = $_POST['tech'];
    $domain = $_POST['domain'];
  
    $sql = "SELECT * FROM projects WHERE title LIKE '%$title%' ";
    
    $result=mysqli_query($conn,$sql);
    if(!$_POST['title']){
      echo "";
    }else{
          <div class="card" style="width: 18rem;float:left;margin-top:20px;margin-left:20px;border-color:white;border-width:5px;">

      <div class="card-block">
          <img style="height:250px;width:100%;" src="<?php echo $data['AI.png']; ?>"  alt="Card image cap">
            <div>
            <h1 class="card-title" ><?php echo $data['title']?><span style="color:#5aff28;float:right" ><?php echo $data['title']; ?></span></h1>
            <h5 class="card-subtitle mb-2 text-muted"><?php echo $data['domain']; ?></h5>
            <p class="card-text"><?php echo $data['description']; ?></p>
            <p class="card-text"><?php echo $data['members']; ?></p>
            <p class="card-text"><?php echo $data['year']; ?></p>
            <p class="card-text"><?php echo $data['tech']; ?></p>
    }
 ?>             -->

       

       