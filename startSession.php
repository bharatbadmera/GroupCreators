<?php

  $error='';

  if (isset($_POST['submit'])) {
    // code...
    $username=$_POST['username'];
    $password=$_POST['password'];

    require_once "config.php";

    $username=stripslashes($username);
    $password=stripslashes($password);

    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);

    $sql="SELECT `password`,`name` FROM `student` WHERE `uniroll`='$username'";
    $result=mysqli_query($connection,$sql);
    $row=mysqli_num_rows($result);

    // echo "<h1>".$row."</h1>";
    $ro=mysqli_fetch_row($result);
    $pass=$ro[0];
    $name=$ro[1];
    echo $pass;
    echo $name;


    if ($row==1) {
      session_start();
      // code...
      if ($password==$username && $pass==$username && $name==null) {
        // code...
        $_SESSION['login_user']=$username;
        $_SESSION['first']=1;
        header('Location: firstLogin.php');
      }elseif ($pass==$password) {
        // code...
        $_SESSION['login_user']=$username;
        header('Location: profilepage.php');
      }else{
        echo "
        <script type=\"text/javascript\">
          alert('Username  password is invalid');
          var url= 'index.html';
          window.location = url;
          </script>
          ";
      }
    }else{
      echo "
      <script type=\"text/javascript\">
        alert('Username or password is invalid');
        var url= 'index.html';
        window.location = url;
        </script>
        ";
    }
    mysqli_close($connection);
  }else {
    // code...
    header('Location: index.html');
  }
 ?>
