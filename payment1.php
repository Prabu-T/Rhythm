<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/abc462c96f.js" crossorigin="anonymous"></script>

  </head>
  <body style="margin:0%">
    <div class="home-navbar" style="position:static">
      <h1 style="font-family:'Varela Round',sans-serif;color:white;font-size:220%;
      letter-spacing:0px;margin-left:30px;margin-top:20px"><i class="fas fa-music" style="padding-right:10px"></i>Rhythm</h1>
        <ul>
          <li class="list"><a href="#" style="font-size: 110%;color: #F9B208" >
             <span id="username"></span></a> <i style="padding-left:5px" class="fas fa-user-circle"></i> </li>
          <li class="list"><a  href="index.php" style="font-size: 110%;color: #F9B208">Log out</a> <i style="padding-left:5px;" class="fas fa-sign-out-alt"></i> </li>


        </ul>
      </div>
      <div class="pre-container" style="width: 100%;height: 90.7vh;background-color: #151515;">
        <form class="regform"  method="post" style="font-family:sans-serif">
          <table style="padding-left:40px" >
            <tr>
              <td><label for="">Plan:</label> </td>
              <td> <input type="text" id="name" name="name" value="24$" autocomplete="off" size="25" required></td>

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

  </body>
</html>

<script>
    var name1=sessionStorage.getItem('NAME');
    document.getElementById('username').innerHTML = name1;
</script>
