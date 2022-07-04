<!DOCTYPE html>
<!DOCTYPE html>
<?php
include 'connect.php';

if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Song")
{
  $sname=$_POST['sname'];
  $aname=$_POST['aname'];
  $dir='uploads/';
  $dir1='images/';
  $photo_path=$dir1.basename($_FILES['imgFile']['name']);
  $audio_path=$dir.basename($_FILES['audioFile']['name']);

  if (move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path)) {

  }
  if (move_uploaded_file($_FILES['imgFile']['tmp_name'],$photo_path)) {

  }

  $sql="INSERT INTO `song` (sname,aname,imgFile,audioFile) VALUES ('$sname','$aname','$photo_path','$audio_path')";
     $run=mysqli_query($con, $sql);
     if ($run) {
         $success="Song uploaded successfully.";
     }
     else {
       $failed="Something went wrong?";
     }
}
else {
  $msz="Please select a song to upload!";
}

?>
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
  <body style="background-color:white;margin:0%">
    <div class="home-navbar">
      <h1 style="font-family:'Varela Round',sans-serif;color:white;font-size:220%;
      letter-spacing:0px;margin-left:30px;margin-top:20px"><i class="fas fa-music" style="padding-right:10px"></i>Rhythm</h1>
        <ul>
          <li class="list"><a href="premium.php">Premium</a> </li>
          <li class="list"><a href="about.php">About</a> </li>
          <li class="list"><a href="support.php">Support</a> </li>
          <li class="list"><a href="#" style="font-size: 110%;color: #F9B208" >
             <span id="username"></span></a> <i style="padding-left:5px" class="fas fa-user-circle"></i> </li>
          <li class="list"><a  href="index.php" style="font-size: 110%;color: #F9B208">Log out</a> <i style="padding-left:5px;" class="fas fa-sign-out-alt"></i> </li>
        </ul>
      </div>
      <div class="body-continer">
        <div class="home-left-col">
          <ul>
          <li><a href="home.php"><i class="fas fa-home"></i> | Home </a></li>

           <li><a href="#"><i class="fas fa-search"></i> | Search </a></li>

             <li><a href="#"><i class="fas fa-compact-disc"></i> | Playlist </a></li>

             <li><a href="#"><i class="far fa-play-circle"></i> | Library </a></li>

          </ul>
        </div>
        <div class="home-right-col" style="height:150vh">
          <form class="" name="login" action="library.php" method="POST" enctype="multipart/form-data"
          style="margin:3% 0 3% 3%;border-bottom:2px solid grey">
          <h1>Upload Your Song!</h1>

      <input type="text" name="sname" placeholder="Song name" value="" style="margin-right:10px">
      <input type="text" name="aname" placeholder="Artist name" value="" style="margin-right:10px">
      <input type="file" name="imgFile" placeholder="image" value="" style="margin-right:10px">
      <input type="file" name="audioFile" placeholder="song" value="" style="margin-right:10px">
      <input type="submit" name="save_audio" value="Upload Song"  style="font-size:20px;background-color:#F9B208;
      color:black;border:none;margin-top:1%;margin-bottom:6%;padding:12px 24px;border-radius:10px">


  </form>
  <div class="row">
        <?php
        include("connect.php");

        $q="SELECT * FROM song";
        $qury=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($qury)){
          $audio=$row['audioFile'];
          $photo=$row['imgFile'];
         ?>
        <div class="playlist-column col-lg-2 col-sm-3">
          <div class="cards">
            <div class="card-content">
            <img class="song-img" src="<?php echo'images/'.basename($photo); ?>" alt="avatar" >
            <h3><?php echo $row['sname']; ?></h3>
            <p><?php echo $row['aname']; ?></p>
            <audio id="song1" name="song" controls>
              <source src="<?php echo 'uploads/'.basename($audio); ?>" type="audio/mp3">
            </audio>

            </div>
          </div>
        </div>

      <?php }
 ?>



  </div>



        </div>
  </div>
  </body>
</html>

<script>
    var name1=sessionStorage.getItem('NAME');
    document.getElementById('username').innerHTML = name1;
</script>
