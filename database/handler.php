<?php
include "config.php";
$response = 0;
if(isset($_POST['username'])){
   $username = mysqli_real_escape_string($con,$_POST['username']);


   $query = "select count(*) as cntUser from usuarios where usuario='".$username."'";

   $result = mysqli_query($con,$query);
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];

      if($count > 0){
      $response = 1;
      }
   }
    echo $response;
   die;
}
