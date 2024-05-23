<?php
$Logo = "images/logo2.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="x-icon" href="./images/icon.jpg">
    <title>Contact</title>

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
          <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

          <ul>
            <li><a href="main.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="logout" id="logoutLink"><a href="login.php">Log Out</a></li>  
          </ul>           
      </div>
    </section>

    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Are you sure you want to logout?</p>
            <a href="login.php"> <id="confirmLogout">Yes</button></a>
            <button class="no" id="cancelLogout">No</button>
        </div>
    </div>

    <!---- content-->

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5><?php echo "LOCATION"?></h5>
                        <p><?php echo "Bognuyan, Gasan, Manduque"?></p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5><?php echo "+639150181158"?></h5>
                        <p><?php echo "Everyday, 7AM - &PM"?></p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5><?php echo "gameworld001@gmail.com"?></h5>
                        <p><?php echo "Email us in your query"?></p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="">
                    <input type="Email" placeholder="Enter email address" required>
                    <textarea rows="8" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn black-btn" id="send">Send Message</button>
                </form>          
            </div>
        </div>
    </section>
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
