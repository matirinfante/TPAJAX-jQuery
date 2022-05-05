<?php
include "config.php";

if(isset($_POST['username'])){
   $username = mysqli_real_escape_string($con,$_POST['username']);
   $response = false;

   $query = "select count(*) as cntUser from usuarios where Usuario='".$username."'";

   $result = mysqli_query($con,$query);
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];

      if($count > 0){
      $response = true;
      }
   }
   json_serialize($response);
   die;
}
