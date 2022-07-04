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
  <body style="background-color:white;margin:0%">
    <div class="home-navbar">
      <h1 style="font-family:'Varela Round',sans-serif;color:white;font-size:220%;
      letter-spacing:0px;margin-left:30px;margin-top:20px"><i class="fas fa-music"></i> Rhythm</h1>
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

             <li><a href="library.php"><i class="far fa-play-circle"></i> | Library </a></li>

          </ul>
        </div>
        <div class="home-right-col">

<br> <br> <br>

          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="photo/sg.png" style="width :850px;height:475px;margin-left:17%;position:absolute;border-radius:30px" alt="...">
          <img src="photo/bg.jpg"  style="width :850px;height:475px;margin-left:17%;opacity: .3;position:absolute;border-radius:30px" alt="">
          <h1 style="font-family:'Josefin Sans',sans-serif;font-size:350%;width :850px;height:475px;
          padding-top: 22%;padding-left: 8%;margin-left:17%;position:relative;color:white">"Lets Jazz all <br>Night "</h1>

        </div>

        <div class="carousel-item" >
          <img src="photo/arr.jpg" style="width :850px;height:475px;margin-left:17%;position:absolute;border-radius:30px" alt="...">
          <img src="photo/bg.jpg"  style="width :850px;height:475px;margin-left:17%;opacity: .3;position:absolute;border-radius:30px" alt="">
          <h1 style="font-family:'Josefin Sans',sans-serif;font-size:350%;width :850px ;height:475px;
          padding-top: 22%;padding-left: 8%;margin-left:17%;position:relative;color:white">"Let your heart <br> Sing !"</h1>
        </div>

        <div class="carousel-item">
          <img src="photo/jb.jpg" style="width :850px;height:475px;margin-left:17%;position:absolute;border-radius:30px" alt="...">
          <img src="photo/bg.jpg"  style="width :850px;height:475px;margin-left:17%;opacity: .3;position:absolute;border-radius:30px" alt="">
          <h1 style="font-family:'Josefin Sans',sans-serif;font-size:350%;width :850px;height:475px;padding-top: 22%;padding-left: 8%;margin-left:17%;
          position:relative;color:white">"Keep Calm and <br> Rock on"</h1>

        </div>
        <div class="carousel-item">
          <img src="photo/hs.jpg" style="width :850px;height:475px;margin-left:17%;position:absolute;border-radius:30px" alt="...">
          <img src="photo/bg.jpg"  style="width :850px;height:475px;margin-left:17%;opacity: .3;position:absolute;border-radius:30px" alt="">
          <h1 style="font-family:'Josefin Sans',sans-serif;font-size:350%;width :850px;height:475px;
          padding-top: 22%;padding-left: 8%;margin-left:17%;position:relative;color:white">"Let the Music take <br> You away"</h1>

        </div>


      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

    </div>

      <div class="row">
            <h1>Independent Artists</h1>

            <div class="playlist-column col-lg-2 col-sm-3">
              <div class="cards">
                <div class="card-content">
                <img class="song-img" src="photo/alanwalker.png" alt="avatar" >
                <h3>Alone.Pt II</h3>
                <p> Alan Walker</p>
                <audio id="song1" name="song" controls>
                  <source src="audio/Alone-pt2.mp3" type="audio/mp3">
                </audio>

                </div>
              </div>
            </div>

            <div class="playlist-column col-lg-2 col-sm-3">
              <div class="cards">
                <div class="card-content">
                <img class="song-img" src="photo/1D.jpg" alt="avatar" >
                <h3>Night Changes</h3>
                <p> One direction</p>
                <audio id="song1" name="song" controls >
                  <source src="audio/Night-changes.mp3" type="audio/mp3">
                </audio>
                </div>
              </div>
            </div>

            <div class="playlist-column col-lg-2 col-sm-3">
              <div class="cards">
                <div class="card-content">
                <img class="song-img" src="photo/dusk-till-dawn.jpg" alt="avatar" >
                <h3>Dusk Till Dawn</h3>
                <p> Zayn Malik</p>
                <audio id="song1" name="song" controls>
                  <source src="audio/Dusk-till-dawn.mp3" type="audio/mp3">
                </audio>

                </div>
              </div>
            </div>

            <div class="playlist-column col-lg-2 col-sm-3">
              <div class="cards">
                <div class="card-content">
                <img class="song-img" src="photo/lovely.png" alt="avatar" >
                <h3>Lovely</h3>
                <p> Billie Eilish,Khalid</p>
                <audio id="song1" name="song" controls>
                  <source src="audio/Lovely.mp3" type="audio/mp3">
                </audio>

                </div>
              </div>
            </div>

            <div class="playlist-column col-lg-2 col-sm-3">
              <div class="cards">
                <div class="card-content">
                <img class="song-img" src="photo/stay.png" alt="avatar" >
                <h3>Stay</h3>
                <p>KID Laroi</p>
                <audio id="song1" name="song" controls>
                  <source src="audio/Stay.mp3" type="audio/mp3">
                </audio>

                </div>
              </div>
            </div>

            <div class="playlist-column col-lg-2 col-sm-3">
              <div class="cards">
                <div class="card-content">
                <img class="song-img" src="photo/see-you-again.jpg" alt="avatar" >
                <h3>See You Again</h3>
                <p>Charlie Puth,Kalifa</p>
                <audio id="song1" name="song" controls>
                  <source src="audio/See-you-again.mp3" type="audio/mp3">
                </audio>

                </div>
              </div>
            </div>

      </div>




      <div class="row">

         <h1>Kollywood</h1>
         <div class="playlist-column col-lg-2 col-sm-3">
           <div class="cards">
             <div class="card-content">
             <img class="song-img" src="photo/anbil-avan.jpg" alt="avatar" >
             <h3>Anbil Avan</h3>
             <p> AR Rahman </p>
             <audio id="song1" name="song" controls>
               <source src="audio/Anbil Avan - Masstamilan.In-.mp3" type="audio/mp3">
             </audio>

             </div>
           </div>
         </div>

         <div class="playlist-column col-lg-2 col-sm-3">
           <div class="cards">
             <div class="card-content">
             <img class="song-img" src="photo/mayavi.jpg" alt="avatar" >
             <h3>Ennadi Mayavi</h3>
             <p>Santhosh Narayanan</p>
             <audio id="song1" name="song" controls>
               <source src="audio/Vadachennai-mayavi.mp3" type="audio/mp3">
             </audio>

             </div>
           </div>
         </div>

         <div class="playlist-column col-lg-2 col-sm-3">
           <div class="cards">
             <div class="card-content">
             <img class="song-img" src="photo/ethir-neechal.jpg" alt="avatar" >
             <h3>Ethir Neechal</h3>
             <p>Anirudh</p>
             <audio id="song1" name="song" controls>
               <source src="audio/Ethir Neechal - Masstamilan.In-.mp3" type="audio/mp3">
             </audio>

             </div>
           </div>
         </div>

         <div class="playlist-column col-lg-2 col-sm-3">
           <div class="cards">
             <div class="card-content">
             <img class="song-img" src="photo/per-vachalum.jpg" alt="avatar" >
             <h3>Per Vachalum</h3>
             <p>Yuvan</p>
             <audio id="song1" name="song" controls>
               <source src="audio/Per-vachaalum.mp3" type="audio/mp3">
             </audio>

             </div>
           </div>
         </div>

         <div class="playlist-column col-lg-2 col-sm-3">
           <div class="cards">
             <div class="card-content">
             <img class="song-img" src="photo/kodu-potta.jpg" alt="avatar" >
             <h3>Kodu Potta</h3>
             <p>AR Rahman</p>
             <audio id="song1" name="song" controls>
               <source src="audio/Kodu Poatta - Masstamilan.In-.mp3" type="audio/mp3">
             </audio>

             </div>
           </div>
         </div>

         <div class="playlist-column col-lg-2 col-sm-3">
           <div class="cards">
             <div class="card-content">
             <img class="song-img" src="photo/rakita-rakita.jpg" alt="avatar" >
             <h3>Rakita Rakita</h3>
             <p>Santhosh Narayanan</p>
             <audio id="song1" name="song" controls>
               <source src="audio/Rakita-rakita.mp3" type="audio/mp3">
             </audio>

             </div>
           </div>
         </div>

      </div>

      <div class="row">

      <h1>Bollywood</h1>
      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/shayad.jpg" alt="avatar" >
          <h3>Shayad</h3>
          <p>Love aaj kal</p>
          <audio id="song1" name="song" controls>
            <source src="audio/Shayad - Love Aaj Kal.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/paramsundari.jpg" alt="avatar" >
          <h3>Param Sundari</h3>
          <p>Mimi</p>
          <audio id="song1" name="song" controls>
            <source src="audio/Param Sundari - Mimi.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/rabdikta.jpg" alt="avatar" >
          <h3>Tujh Mein Rab</h3>
          <p>Rab ne bana di jodi</p>
          <audio id="song1" name="song" controls>
            <source src="audio/01. Tujh Mein Rab Dikhta Hai.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/pal.jpg" alt="avatar" >
          <h3>Pal</h3>
          <p>Jalebi</p>
          <audio id="song1" name="song" controls>
            <source src="audio/02 Pal - Jalebi - Arijit Singh.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/tumsaatho.jpg" alt="avatar" >
          <h3>Tum Saath Ho</h3>
          <p>Tamasha</p>
          <audio id="song1" name="song" controls>
            <source src="audio/03 Tum Saath Ho - Tamasha (Arijit Singh) 320Kbps.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/channa.jpg" alt="avatar" >
          <h3>Channa Meraya</h3>
          <p>Ae dil hai mushkil</p>
          <audio id="song1" name="song" controls>
            <source src="audio/07 Channa Mereya - Arijit Singh 320Kbps.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>



    </div>


      <div class="row">

      <h1>AR Rahman </h1>
      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/anbil-avan.jpg" alt="avatar" >
          <h3>Aaromale</h3>
          <p> VTV </p>
          <audio id="song1" name="song" controls>
            <source src="audio/Aaoromale - Masstamilan.In-.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/neethane.jpg" alt="avatar" >
          <h3>Neethane</h3>
          <p>Mersal</p>
          <audio id="song1" name="song" controls>
            <source src="audio/Neethanae [Masstamilan.In]-.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/aaruiyre.jpg" alt="avatar" >
          <h3>Aaruyire</h3>
          <p>Guru</p>
          <audio id="song1" name="song" controls>
            <source src="audio/Aaruyire.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/mental.jpg" alt="avatar" >
          <h3>Mentalmanadhil</h3>
          <p>OK Kanmani</p>
          <audio id="song1" name="song" controls>
            <source src="audio/Mental Manadhil [Masstamilan.In]-.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/aalporan.jpg" alt="avatar" >
          <h3>Aalaporan</h3>
          <p>Mersal</p>
          <audio id="song1" name="song" controls>
            <source src="audio/Aalaporaan Tamizhan [Masstamilan.In]-.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      <div class="playlist-column col-lg-2 col-sm-3">
        <div class="cards">
          <div class="card-content">
          <img class="song-img" src="photo/kurukku.jpg" alt="avatar" >
          <h3>Kurukku</h3>
          <p>Muthalvan</p>
          <audio id="song1" name="song" controls>
            <source src="audio/Kurukku Siruthavale-[Masstamilan.In]-.mp3" type="audio/mp3">
          </audio>

          </div>
        </div>
      </div>

      </div>

      <div class="row">

   <h1>Anirudh </h1>
   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/vaathi.jpg" alt="avatar" >
       <h3>Vaathi coming</h3>
       <p>Master</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Vaathi-coming.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/3.jpg" alt="avatar" >
       <h3>Love Theme</h3>
       <p>3</p>
       <audio id="song1" name="song" controls>
         <source src="audio/3-theme.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/ani.jpg" alt="avatar" >
       <h3>Kanave kanve</h3>
       <p>David</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Kanave.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/ethir-neechal.jpg" alt="avatar" >
       <h3>Boomi Enna</h3>
       <p>Ethir neechal</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Boomi Enna Suthudhe - Masstamilan.In-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/aathi.jpg" alt="avatar" >
       <h3>Aathi ena nee</h3>
       <p>Kaththi</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Aathi - Masstamilan.In-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/chumma.jpg" alt="avatar" >
       <h3>Chumma kizhi</h3>
       <p>Darbar</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Chumma Kizhi-Masstamilan.in.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

      </div>


      <div class="row">

   <h1>GV Prakash</h1>
   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/para.jpg" alt="avatar" >
       <h3>Para Para</h3>
       <p>Neer paravi</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Para-Para.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/pookal.jpg" alt="avatar" >
       <h3>Pookal Pookum</h3>
       <p>Mathurasapatinam</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Pookal-Pookum.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/gvp.jpg" alt="avatar" >
       <h3>Celebration</h3>
       <p>AO</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Ao-theme.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/yaar.jpg" alt="avatar" >
       <h3>Yaar Intha</h3>
       <p>Thalaiva</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Yaar Indha Saalai Oram - Masstamilan.In-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/yennachu.jpg" alt="avatar" >
       <h3>Yennachu</h3>
       <p>TIN</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Yennachu Yedhachu [Masstamilan.In]-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/sarvam.jpg" alt="avatar" >
       <h3>Peter Beatu</h3>
       <p>STM</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Peter Beatu Yethu (Masstamilan.in).mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

      </div>

      <div class="row">

   <h1>Yuvan Shankar Raja</h1>
   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/nanga.jpg" alt="avatar" >
       <h3>Nanga veramari</h3>
       <p>Valimai</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Naanga Vera Maari-Masstamilan.In.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/dope.jpg" alt="avatar" >
       <h3>Dope track</h3>
       <p>Pyar prema kadhal</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Dope Track - Masstamilan.In-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/yuvan.jpg" alt="avatar" >
       <h3>Loosu Penne</h3>
       <p>Vallavan</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Loosu-penne.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/pachai.jpg" alt="avatar" >
       <h3>Pachai Vanna</h3>
       <p>Vai raja vai</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Pachai Vanna - Masstamilan.In-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/pogathe.jpg" alt="avatar" >
       <h3>Poogathe</h3>
       <p>Deepavali</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Pogathey Pogathe - Masstamilan.In-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

   <div class="playlist-column col-lg-2 col-sm-3">
     <div class="cards">
       <div class="card-content">
       <img class="song-img" src="photo/kathal-asai.jpg" alt="avatar" >
       <h3>Kadhal Aasai</h3>
       <p>Anjaan</p>
       <audio id="song1" name="song" controls>
         <source src="audio/Kadhal Aasai - Masstamilan.In-.mp3" type="audio/mp3">
       </audio>

       </div>
     </div>
   </div>

      </div>

    

        </div>
  </div>
   <div class="footer">
     <table>
       <tr>
         <td>

           <ul>
             <h6>COMPANY</h6>
             <li><a href="#">Home</a></li>
             <li><a href="#">About</a></li>
             <li><a href="#">Support</a></li>
           </ul>
         </td>
         <td>

           <ul>
             <h6>COMMUNTIES</h6>
             <li><a href="#">Artists</a></li>
             <li><a href="#">Developers</a></li>
             <li><a href="#">Investors</a></li>
           </ul>
         </td>
         <td>

           <ul>
             <h6>USEFUL LINKS</h6>
             <li><a href="#">Twitter</a></li>
             <li><a href="#">Instagram</a></li>
             <li><a href="#">Facebook</a></li>
           </ul>
         </td>
         <td><button type="button" name="button"  style="font-size:20px;background-color:#F9B208;color:black;
         border-radius:10px;border:none;padding:12px 24px" > <a style="text-decoration:none;color:black;" href="index.php">Log out</a></button> </td>
       </tr>
     </table>
   </div>

  </body>
</html>

<script>
    var name1=sessionStorage.getItem('NAME');
    document.getElementById('username').innerHTML = name1;
</script>
