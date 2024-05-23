<?php

$sw01 = "images/sw/sw1.png";
$sw02 = "images/sw/sw2.webp";
$sw03 = "images/sw/sw3.webp";
$sw04 = "images/sw/sw4.webp";
$sw05 = "images/sw/sw5.webp";
$sw06 = "images/sw/sw6.webp";
$sw07 = "images/sw/sw7.webp";
$sw08 = "images/sw/sw8.webp";
$sw09 = "images/sw/sw9.webp";
$sw10 = "images/sw/sw10.webp";
$sw11 = "images/sw/sw11.png";
$sw12 = "images/sw/sw12.png";
$sw13 = "images/sw/sw13.png";
$sw14 = "images/sw/sw14.png";
$sw15 = "images/sw/sw15.webp";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="x-icon" href="./images/icon.jpg">
    <title>Subway Surfers</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="script/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>
    
    <!------ HEADER ------->

    <section class="header">
      <nav>
      <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <ul>
            <li><a href="main.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="logout" id="logoutLink"><a href="login.php">Log Out</a></li>  
          </ul>
        </div>
      </nav>
      </section>

      <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Are you sure you want to logout?</p>
            <a href="login.php"> <id="confirmLogout">Yes</button></a>
            <button class="no" id="cancelLogout">No</button>
        </div>
    </div>


      <h1 style="text-align: center; padding-top: 40px">Bleach Photo gallery</h1>
    </section>

    <!----- Subway Surfers ----->
    <div class="gallery">
      <img src="<?php echo $sw01; ?>">
      <img src="<?php echo $sw02; ?>">
      <img src="<?php echo $sw03; ?>">
      <img src="<?php echo $sw04; ?>">
      <img src="<?php echo $sw05; ?>">
      <img src="<?php echo $sw06; ?>">
      <img src="<?php echo $sw07; ?>">
      <img src="<?php echo $sw08; ?>">
      <img src="<?php echo $sw09; ?>">
      <img src="<?php echo $sw10; ?>">
      <img src="<?php echo $sw11; ?>">
      <img src="<?php echo $sw12; ?>">
      <img src="<?php echo $sw13; ?>">
      <img src="<?php echo $sw14; ?>">
      <img src="<?php echo $sw15; ?>">
    </div>
   
      <!---footer---->

      <footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul><li><a href="main.php">Home</a></li>              
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="main.php">our Team</a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p> Designed by: <span class="designer">Ronnie and Friends</span></p>
    </div>
    <script src="./script/style.js"></script> 
  </body>
</html>