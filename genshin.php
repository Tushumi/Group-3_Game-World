<?php
$banner = "images/gi/banner.png";
$gi01 = "images/gi/gi1.png";
$gi02 = "images/gi/gi2.png";
$gi03 = "images/gi/gi3.png";
$gi04 = "images/gi/gi4.png";
$gi05 = "images/gi/g15.png";
$gi06 = "images/gi/g16.png";
$gi07 = "images/gi/gi7.png";
$gi08 = "images/gi/gi8.png";
$gi09 = "images/gi/gi9.png";
$gi10 = "images/gi/gi10.webp";
$gi11 = "images/gi/gi11.png";
$gi12 = "images/gi/gi12.png";
$gi13 = "images/gi/gi13.png";
$gi14 = "images/gi/gi14.png";
$gi15 = "images/gi/gi15.png";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="x-icon" href="./images/icon.jpg">
    <title>Genshin Impact</title>
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

      <h1 style="text-align: center; padding-top: 40px">Genshin Impact</h1>
    </section>

    <!----- Genshin Impact ----->
    <div class="gallery">
      <img src="<?php echo $gi01; ?>">
      <img src="<?php echo $gi02; ?>">
      <img src="<?php echo $gi03; ?>">
      <img src="<?php echo $gi04; ?>">
      <img src="<?php echo $gi05; ?>">
      <img src="<?php echo $gi06; ?>">
      <img src="<?php echo $gi07; ?>">
      <img src="<?php echo $gi08; ?>">
      <img src="<?php echo $gi09; ?>">
      <img src="<?php echo $gi10; ?>">
      <img src="<?php echo $gi11; ?>">
      <img src="<?php echo $gi12; ?>">
      <img src="<?php echo $gi13; ?>">
      <img src="<?php echo $gi14; ?>">
      <img src="<?php echo $gi15; ?>">
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