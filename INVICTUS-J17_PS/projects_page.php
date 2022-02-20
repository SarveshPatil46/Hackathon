<?php 
include('db_connect.php');
error_reporting(0);
$dept = "IT";
$year = "SE";
if(isset($_POST['submit'])){
$dept = $_POST['dept'];
$year = $_POST['year'];
}

$sql = 'SELECT * FROM projects';


$result = mysqli_query($conn,$sql);


$users_data = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

            background-color:  #c7d3f2;

        }

        #login-box {
            background-color: #fadccc;
        }
    </style>
</head>

<body>
    <header name="header" >
        <img src="logo.png" width="75" height="75" class="d-inline-block">
        <h5 class="d-inline font-weight-bold h2">Welcome to Vivekanand Education Society's Institute of
            Technology
    </h5>
    </header>
     <!-- <a id="logout" href="logout.php"><h5>Logout</h5></a> -->
    
    <h1 class="text-center my-3">View Projects</h1>
   <form method="POST" action="projects_page.php">
   <div class="row g-3 justify-content-center d-block">
        <div class="col-4">
            <div class="">
                <select class="selectdep form-select" id="dept" name="dept" aria-label="Department" required>
                    
                    <option selected value="AIDS">AIDS</option>
                    <option value="CMPN">CMPN</option>
                    <option value="IT">IT</option>
                    <option value="EXTC">EXTC</option>
                    <option value="ETRX">ETRX</option>
                    <option value="INST">INST</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="">
                <select class="selectyear form-select" id="year" name="year" aria-label="Year" required>
                    <option selected value="FE">FE</option>
                    <option value="SE">SE</option>
                    <option value="TE">TE</option>
                    <option value="BE">BE</option>

                </select>
            </div>
        </div>
        <div class="col-1">
            <button type="submit" name="submit" class="btn btn-primary" value="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
    
        

    <?php 
    
    
    
    foreach($users_data as $user_data){ 
     
   
     if($user_data['dept']==$dept && $user_data['year']==$year){
     ?>
     
    
     
     <div class="card shadow-sm p-1 mb-5 bg-body rounded d-inline-block mx-2 " style="width: 18rem;">
    
         <img src= "<?php echo $user_data['image']; ?>" class="card-img-top" alt="..." width="400px" height="200px">
         
         <div class="card-body">
             <p class="card-text">Project Title :<span> <?php echo htmlspecialchars($user_data['title']); ?></span></p>
             <p class="card-text">Domain : <span> <?php echo htmlspecialchars($user_data['domain']); ?></span> </p>
             <p class="card-text">Department :  <span> <?php echo htmlspecialchars($user_data['dept']); ?></span> </p>
 
             <!-- Button trigger modal -->
             <button id="view-more-btn" type="button" class="btn btn-primary" data-bs-toggle="modal"
                 data-bs-target="#exampleModal">
                 View More
             </button>
 
             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Project Info</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <div>
                                 Project Title :<span> <?php echo htmlspecialchars($user_data['title']); ?></span>
                             </div>
                             <div>
                                 Project Description :<span> <?php echo htmlspecialchars($user_data['description']); ?></span>
                             </div>
                             <div>
                                 Year of Study :<span> <?php echo htmlspecialchars($user_data['year']); ?></span>
                             </div>
                             <div>
                                 Team Members : <span> <?php echo htmlspecialchars($user_data['members']); ?></span>
                             </div>
                             
                             <div>
                                 Technology Used : <span> <?php echo htmlspecialchars($user_data['tech']); ?></span>
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
            
             <?php }} ?>
                   
                
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>