<?php

  session_start();
  $login_user=$_SESSION['login_user'];

  if (isset($_SESSION['login_user'])) {
    // code...

    require_once "config.php";

    $name=$_POST['name'];
    $area=$_POST['area'];
    $section=$_POST['section'];
    $password=$_POST['password'];

    $sql= "UPDATE `student` SET `name`='$name',`sec`='$section',`areaofint`='$area',`password`='$password' WHERE `uniroll`='$login_user'";

    $result=mysqli_query($connection,$sql);
    mysqli_close($connection);
    $_SESSION=array();
    if(session_destroy()){
      echo "
      <script type=\"text/javascript\">
        alert('registration complete');
        var url= 'index.html';
        window.location = url;
        </script>
        ";
    }
  }else{
    header('Location: index.html');
  }
  mysqli_close($connection);
  exit(0);
 ?>
