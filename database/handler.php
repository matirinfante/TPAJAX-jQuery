<?php
include "config.php";
$response = 0;


//Alta
if(isset($_POST['submit'])){

// removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password    = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $nombre = stripslashes($_REQUEST['nombre']);
        $nombre = mysqli_real_escape_string($con, $nombre);
        $apellido = stripslashes($_REQUEST['apellido']);
        $apellido = mysqli_real_escape_string($con, $apellido);
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);



} else if(isset($_POST['username'])){
   $username = mysqli_real_escape_string($con,$_POST['username']);
   $query = "select count(*) as cantidad from usuarios where usuario='".$username."'";

   $result = mysqli_query($con,$query);
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cantidad'];

      if($count > 0){
      $response = 1;
      }
   }
    json_encode($response);
   die;
}
