<?php
  // session_start();
  require_once "config.php";
  if (isset($_SESSION['login_user'])) {
    // code...
    $login_user=$_SESSION['login_user'];

    $sql="SELECT `gid` FROM `student` WHERE `uniroll`='$login_user'";
    $result=mysqli_query($connection,$sql);
    if (mysqli_num_rows($result)>0) {
      // code...
      $row=mysqli_fetch_row($result);
      $gid=$row[0];

      $sql2="SELECT `count` FROM `groupset` WHERE `gid`='$gid'";
      $result2=mysqli_query($connection,$sql2);

      $row2=mysqli_fetch_row($result2);

      $count=$row2[0];

      if ($count==4) {
        // code...
        $sql3="DELETE FROM `request` WHERE `sender`='$login_user' or `receiver`='$login_user'";
        mysqli_query($connection,$sql3);
      }
    }
  }else {
    // code...
    header('Location: index.html');
  }
  // mysqli_close($connection);
?>
