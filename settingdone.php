<?php
  session_start();
  if (isset($_SESSION['login_user'])) {
    // code...
    require_once "config.php";
    $p=$_POST['current_password'];
    $cp=$_POST['password'];

    $user=$_SESSION['login_user'];

    $sql="SELECT * FROM `student` WHERE `uniroll`='$user' and `password`='$p'";
    $result=mysqli_query($connection,$sql);
    if (mysqli_num_rows($result)==1) {
      // code...
      $sql1="UPDATE `student` SET `password`='$cp' WHERE `uniroll`='$user' and `password`='$p'";
      mysqli_query($connection,$sql1);
      echo "
      <script type=\"text/javascript\">
        alert('Password update complete');
        var url= 'profilepage.php';
        window.location = url;
        </script>
        ";
    }else {
      // code...
      echo "
      <script type=\"text/javascript\">
        alert('Try Again!, Invalid Password');
        var url= 'setting.php';
        window.location = url;
        </script>
        ";
    }
  }else{
    header("Location: index.php");
  }
?>
