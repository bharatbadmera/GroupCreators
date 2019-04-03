<?php
  session_start();
  if (isset($_SESSION['login_user']) && isset($_GET['req_user']) && $_GET['flag']==0) {
    // code...
    $sender=$_SESSION['login_user'];
    $receiver=$_GET['req_user'];

    require_once "config.php";

    $sql = "DELETE FROM `request` WHERE `sender`='$sender' and `receiver`='$receiver'";

    if (mysqli_query($connection,$sql)) {
      // code...
      header("Location: profilepage.php",true,301);
    }else {
      // code...
      header("Location: error.html");
    }
  }elseif (isset($_SESSION['login_user']) && isset($_GET['req_user']) && $_GET['flag']==1) {
    // code...
    $sender=$_GET['req_user'];
    $receiver=$_SESSION['login_user'];

    require_once "config.php";

    $sql = "DELETE FROM `request` WHERE `sender`='$sender' and `receiver`='$receiver'";

    if (mysqli_query($connection,$sql)) {
      // code...
      header("Location: profilepage.php",true,301);
    }else {
      // code...
      header("Location: error.html");
    }
  }else{
    // code...
    header('Location: index.html');
  }
  mysqli_close($connection);
?>
