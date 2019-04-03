<?php
  session_start();
  if (isset($_SESSION['login_user']) && isset($_GET['req_user'])) {
    // code...
    $sender=$_GET['req_user'];
    $receiver=$_SESSION['login_user'];

    require_once "config.php";

    $sql1="SELECT `gid` FROM `student` WHERE `uniroll`='$sender'";
    $sql2="SELECT `gid` FROM `student` WHERE `uniroll`='$receiver'";

    $result1=mysqli_query($connection,$sql1);
    $row1=mysqli_fetch_row($result1);
    $result2=mysqli_query($connection,$sql2);
    $row2=mysqli_fetch_row($result2);

    if ($row1[0]==null && $row2[0]==null) {
      // code...
      $sql3="INSERT INTO groupset(user_1, user_2,count) VALUES ('$sender','$receiver',2)";
      mysqli_query($connection,$sql3);

      $sql4="SELECT `gid` FROM `groupset` WHERE `user_1`='$sender' and `user_2`='$receiver'";
      $result4=mysqli_query($connection,$sql4);

      $row4=mysqli_fetch_row($result4);
      $gid=$row4[0];

      $sql5="UPDATE `student` SET `gid`='$gid' WHERE `uniroll`='$sender'";
      mysqli_query($connection,$sql5);
      $sql6="UPDATE `student` SET `gid`='$gid' WHERE `uniroll`='$receiver'";
      mysqli_query($connection,$sql6);

      header("Location: cencelRequest.php?req_user='$sender'&flag=1");
    }
    elseif($row1[0]==null){
      $s=$row2[0];
      $sql7="UPDATE `student` SET `gid`='$s' WHERE `uniroll`='$sender'";
      mysqli_query($connection,$sql7);
      //
      $sql8="SELECT `count` FROM `groupset` WHERE `gid`='$s'";
      $result8=mysqli_query($connection,$sql8);
      $row8=mysqli_fetch_row($result8);
      $count=intval($row8[0]);
      $count=$count+1;

      echo $count;

      if ($count==3) {
        $sql9="UPDATE `groupset` SET `user_3`='$sender', `count`='$count' WHERE `gid`=$s";
      }elseif ($count==4) {
        $sql9="UPDATE `groupset` SET `user_4`='$sender', `count`='$count' WHERE `gid`=$s";
      }
      mysqli_query($connection,$sql9);

      echo 'hello';
    }elseif ($row2[0]==null) {
      // code...
      $s=$row1[0];
      $sql10="UPDATE `student` SET `gid`='$s' WHERE `uniroll`='$receiver'";
      mysqli_query($connection,$sql10);

      $sql11="SELECT `count` FROM `groupset` WHERE `gid`='$s'";
      $result11=mysqli_query($connection,$sql11);
      $row11=mysqli_fetch_row($result11);
      $count=intval($row11[0]);
      $count=$count+1;

      echo $count;

      if ($count==3) {
        // code...
        echo "string1 ".$receiver." ".$s;
        $sql12="UPDATE `groupset` SET `user_3`='$receiver', `count`='$count' WHERE `gid`='$s'";
      }else {
        $sql12="UPDATE `groupset` SET `user_4`='$receiver', `count`='$count' WHERE `gid`='$s'";
      }
      if(mysqli_query($connection,$sql12)){
        echo " every thing is fine";
      }else{
        echo " error";
        // UPDATE `student` SET `gid`=null WHERE `uniroll`=161500171
      }
    }
    $sql13="DELETE FROM `request` WHERE `sender`='$sender' and `receiver`='$receiver'";
    mysqli_query($connection,$sql13);
    header("Location: profilepage.php");
    mysqli_close($connection);
  }else {
    // code...
    header('Location: index.html');
  }



  // echo " hello ";
  // header("cencelRequest.php?req_user='$sender'&flag=1");

?>
