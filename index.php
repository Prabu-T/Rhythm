<?php

include'connect.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $username=$_POST['username'];
    $password=$_POST['password'];


$sql="Select * from `users` where NAME='$username' and 	PASSWORD='$password'";
        $run=mysqli_query($con, $sql);
        if ($run) {
            $num=mysqli_num_rows($run);
            if ($num>0) {
                header('location:home.php');
            }
             else {
                ?>
                <script type="text/javascript">
                  alert("User doesn't exist!")
                </script>
                <?php


            }
        }
      }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rhythm</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/abc462c96f.js" crossorigin="anonymous"></script>

  </head>
  <body style="margin:0%">
    <div class="container">
        <div class="navbar">
          <h1 style="font-family:'Varela Round',sans-serif;color:black;font-size:280%;
          border-bottom:3px solid black"><i style="color:white;opacity:0.8;padding-right:10px" class="fas fa-music" ></i>Rhythm</h1>
          <ul>
            <li><a href="#">HOME</a> </li>
            <li><a href="#">ABOUT</a> </li>
            <li><a href="#">SUPPORT</a> </li>
            <li><a href="#">CONNECT</a> </li>
          </ul>
        </div>
        <div class="content">
          <div class="left-col">
            <h1>MUSIC <br>FEEDS <br>THE SOUL.</h1>
          </div>
          <div class="right-col">
            <h2 style="font-family:'Montserrat',sans-serif;color:black;font-size:250%">LOGIN</h2>
              <form class="form" name="login" method="post" style="font-family:'Montserrat',sans-serif;font-size:150%;color:white">
            <table style="padding-left:40px" >
              <tr>

                <td>  <input type="text" id="username" name="username" autocomplete="off" value="" placeholder="Username"  size="25" required >  </td>
              </tr>
              <tr>
                <td>  <input type="password" id="password" name="password" value="" placeholder="Password" size="25" maxlength="10" required ></td>
              </tr>
            </table> <br>
              <input type="submit" name="submit" onclick="return pass()" value="LOGIN"  style="font-size:20px;background-color:#F9B208;color:black;
              border-radius:10px;border:none;padding:12px 24px">
              <p style="font-size:75%"> or <a href="reg.php" style=" text-decoration:none;color: #F9B208;">Sign Up</a> </p>
            </form>
          </div>

        </div>

    </div>


  </body>
</html>
<script>
    function pass(){
    var name=document.forms["login"]["username"].value;
    if(name==""){
    alert("Please enter your username");
    return false;
    }
    else{
    sessionStorage.setItem("NAME",name);
    }
    var password1=document.forms["login"]["password"].value;
    }
</script>
