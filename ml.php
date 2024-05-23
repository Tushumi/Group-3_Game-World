<?php
$ml01 = "images/ml/martis.png";
$ml02 = "images/ml/nana.png";
$ml03 = "images/ml/harith.png";
$ml04 = "images/ml/xavier.png";
$ml05 = "images/ml/gusion.png";
$ml06 = "images/ml/karina.png";
$ml07 = "images/ml/layla.png";
$ml08 = "images/ml/harith.png";
$ml09 = "images/ml/julian.png";
$ml10 = "images/ml/cyclopes.png";
$ml11 = "images/ml/gord.png";
$ml12 = "images/ml/hanabi.png";
$ml13 = "images/ml/fanny.png";
$ml14 = "images/ml/xb.png";
$ml15 = "images/ml/yuzhong.png";
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mobile Legends</title>
    <link rel="shortcut icon" type="x-icon" href="./images/icon.jpg">
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


      <h1 style="text-align: center; padding-top: 40px">Mobile Legends Characters</h1>
    </section>

    <!----- Mobile Legends ----->
    <div class="gallery">
      <img src="<?php echo $ml01; ?>">
      <img src="<?php echo $ml02; ?>">
      <img src="<?php echo $ml03; ?>">
      <img src="<?php echo $ml04; ?>">
      <img src="<?php echo $ml05; ?>">
      <img src="<?php echo $ml06; ?>">
      <img src="<?php echo $ml07; ?>">
      <img src="<?php echo $ml08; ?>">
      <img src="<?php echo $ml09; ?>">
      <img src="<?php echo $ml10; ?>">
      <img src="<?php echo $ml11; ?>">
      <img src="<?php echo $ml12; ?>">
      <img src="<?php echo $ml13; ?>">
      <img src="<?php echo $ml14; ?>">
      <img src="<?php echo $ml15; ?>">
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