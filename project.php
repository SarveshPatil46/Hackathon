<?php
  error_reporting(0);
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $db = 'VRCTC';
  
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
  
  $bookingFrom = $_POST['bookingFrom'];
  $bookingTo = $_POST['bookingTo'];
  $bookingDate = $_POST['bookingDate'];
  $bookingClass = $_POST['bookingClass'];
  $bookingQuota = $_POST['bookingQuota'];

  $sql = "SELECT * FROM trains WHERE bookingFrom LIKE '%$bookingFrom%' OR bookingTo LIKE '%$bookingTo%'";
  
  $result=mysqli_query($conn,$sql);
  if(!$_POST['bookingSearchBtn']){
    echo "";
  }else{
      echo "</br></br><table class='table table-responsive table-bordered container'style=background-color:white>";
      echo "<thead><tr>";
      echo "<th>Booking From</th> <th>Booking To</th> <th>Booking Class</th> <th>Price</th> <th>Action</th>";
      echo "</tr></thead>";
    while($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$row['bookingFrom']."</td><td>".$row['bookingTo']."</td><td>".$row['bookingClass']."</td><td>&nbsp;₹ ".$row['bookingPrice']."</td><td><button type='submit' name='Book' class='btn btn-sm btn-success' data-bs-toggle='modal' data-bs-target='#bookingConfirm'>Book</button></td>";
      echo "</tr>";
    }
    echo "</table></br></br>";
 }
?>