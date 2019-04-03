<?php
  session_start();
  if (isset($_SESSION['login_user']) && isset($_GET['req_user'])) {
    // code...
    $sender=$_SESSION['login_user'];
    $receiver=$_GET['req_user'];

    require_once "config.php";

    $sql="INSERT INTO request(sender, receiver) VALUES ('$sender','$receiver')";

    if (mysqli_query($connection,$sql)) {
    // code...
        header('Location: profilepage.php', true, 301);
    }else{
        header('Location: error.html');
    }
  }else{
    header('Location: index.html');
  }
  mysqli_close($connection);
?>
