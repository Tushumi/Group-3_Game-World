<?php
$coc01 = "images/coc/coc1.png";
$coc02 = "images/coc/coc2.png";
$coc03 = "images/coc/coc3.webp";
$coc04 = "images/coc/coc4.webp";
$coc05 = "images/coc/coc5.webp";
$coc06 = "images/coc/coc6.png";
$coc07 = "images/coc/coc7.png";
$coc08 = "images/coc/coc8.png";
$coc09 = "images/coc/coc9.png";
$coc10 = "images/coc/coc10.webp";
$coc11 = "images/coc/coc11.png";
$coc12 = "images/coc/coc12.png";
$coc13 = "images/coc/coc13.png";
$coc14 = "images/coc/coc14.png";
$coc15 = "images/coc/coc15.png";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="x-icon" href="./images/icon.jpg">
    <title>Clash of Clans</title>

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

      <h1 style="text-align: center; padding-top: 40px">Clash of Clans Troops</h1>
    </section>

    <!----- Clash of Clans ----->
    <div class="gallery">
      <img src="<?php echo $coc01; ?>">
      <img src="<?php echo $coc02; ?>">
      <img src="<?php echo $coc03; ?>">
      <img src="<?php echo $coc04; ?>">
      <img src="<?php echo $coc05; ?>">
      <img src="<?php echo $coc06; ?>">
      <img src="<?php echo $coc07; ?>">
      <img src="<?php echo $coc08; ?>">
      <img src="<?php echo $coc09; ?>">
      <img src="<?php echo $coc10; ?>">
      <img src="<?php echo $coc11; ?>">
      <img src="<?php echo $coc12; ?>">
      <img src="<?php echo $coc13; ?>">
      <img src="<?php echo $coc14; ?>">
      <img src="<?php echo $coc15; ?>">
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