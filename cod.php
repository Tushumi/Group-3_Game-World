<?php
$cod01 = "images/cod/cod01.png";
$cod02 = "images/cod/cod2.png";
$cod03 = "images/cod/cod3.png";
$cod04 = "images/cod/cod4.png";
$cod05 = "images/cod/cod5.png";
$cod06 = "images/cod/cod6.png";
$cod07 = "images/cod/cod7.png";
$cod08 = "images/cod/cod8.webp";
$cod09 = "images/cod/cod9.png";
$cod10 = "images/cod/cod10.png";
$cod11 = "images/cod/cod11.png";
$cod12 = "images/cod/cod12.png";
$cod13 = "images/cod/cod13.webp";
$cod14 = "images/cod/cod14.png";
$cod15 = "images/cod/cod15.png";
$Logo = "images/logo2.png";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="x-icon" href="./images/icon.jpg">
    <title>Call of Duty</title>

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
      <h1 style="text-align: center; padding-top: 40px">Call of Duty Characters</h1>
    </section>
      

    <!----- Call of Duty ----->
    <div class="gallery">
      <img src="<?php echo $cod01; ?>">
      <img src="<?php echo $cod02; ?>">
      <img src="<?php echo $cod03; ?>">
      <img src="<?php echo $cod04; ?>">
      <img src="<?php echo $cod05; ?>">
      <img src="<?php echo $cod06; ?>">
      <img src="<?php echo $cod07; ?>">
      <img src="<?php echo $cod08; ?>">
      <img src="<?php echo $cod09; ?>">
      <img src="<?php echo $cod10; ?>">
      <img src="<?php echo $cod11; ?>">
      <img src="<?php echo $cod12; ?>">
      <img src="<?php echo $cod13; ?>">
      <img src="<?php echo $cod14; ?>">
      <img src="<?php echo $cod15; ?>">
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