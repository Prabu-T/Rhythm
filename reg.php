<?php
include 'connect.php';

if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phnumber=$_POST['phnumber'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];
   if($password===$conpassword)
   {
     $sql="INSERT INTO `users` (NAME,EMAILID,MOBILE,GENDER,PASSWORD) VALUES ('$name','$email','$phnumber','$gender','$password')";
     $run=mysqli_query($con, $sql);
     if ($run) {
         header('location:index.php');
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
          border-bottom:3px solid black"><i style="color:white;opacity:0.8;padding-right:10px" class="fas fa-music"></i>Rhythm</h1>
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
          <div class="regright-col">
            <h2 style="font-family:'Montserrat',sans-serif;color:black;font-size:250%">SIGN UP</h2>
            <form class="regform"  method="post" style="font-family:sans-serif">
              <table style="padding-left:40px" >
                <tr>

                  <td> <input type="text" id="name"placeholder="Name" name="name" value="" autocomplete="off" size="25" required></td>

                </tr>
                <tr>

                  <td> <input type="email" id="email"placeholder="Email ID" name="email" autocomplete="off" value="" size="25" required></td>
                </tr>
                <tr>


                  <td><input type="text" id="phnumber"placeholder="Mobile number" name="phnumber" autocomplete="off" value="" size="25" maxlength="10" required> </td>
                </tr>
                <tr>
                  <td> <select class="Gender" id="gender" name="gender"  required >
                    <option class="opt" value="">Gender</option>
                    <option class="opt" value="Male">Male</option>
                    <option class="opt" value="Female">Female</option>
                    <option class="opt" value="Others">Others</option>

                  </select> </td>
                </tr>
                <tr>

                  <td><input type="password" id="password"placeholder="Password" name="password" size="25" maxlength="10" value="" required> </td>
                </tr>
                <tr>
                  <td><input type="password" placeholder="Confirm Password" id="conpassword" name="conpassword" size="25" maxlength="10" value="" required> </td>
                </tr>

              </table>
           <br> <br>

              <input type="submit" name="submit" value="SIGN UP" onclick="validatePassword()" style="font-size:20px;background-color:#F9B208;
              color:black;border:none;margin-top:0%;margin-bottom:6%;padding:12px 24px;border-radius:10px">
            </form>
          </div>

        </div>

    </div>

  </body>
</html>
<script>
   function validatePassword(){
    var p= document.getElementById("password").value;
    var c= document.getElementById("conpassword").value;
    if(p!=c) {
        alert("Passwords doesn't match");

        }
    }
</script>
