<?php
session_start();
?>
<html>
    <title>Loop - About Us</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Dark theme css -->
       <link rel="stylesheet" href="style/lighttheme_css/light_style.css?t=<?php echo time();?>">     
       <link rel="stylesheet" href="style/lighttheme_css/light_about.css?t=<?php echo time();?>" id="theme">     
    
    <!-- favicon -->
    <link rel="shortcut icon" href="logo/logo4.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-ZvHjXoebDRUrTnKh9WKpWV/A0Amd+fjub5TkBXrPxe5F7WfDZL0slJ6a0mvg7VSN3qdpgqq2y1blz06Q8W2Y8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/17a4e5185f.js" crossorigin="anonymous"></script>
    </head>

<body>
    <nav>
      <div class="menu-btn">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
      </div>

      <ul>
        <img src="img/dark_img/MoonIcon.svg" alt="Theme Icon" height="19" width="19" id="theme-icon" id="theme-toggle" class="theme-button" onclick="changeTheme()">
      </ul>
      <label class="logo"><a href="/"><img class="logo" src="logo/logo1.png"></a></label>
      <ul class="menu-items">
        <li class="menu-items-li"><a class="navv-item" href="feed.php">Feed</a></li>
        <li class="menu-items-li">
            <?php
                if(isset($_SESSION['username'])){
                    echo '<a class="navv-item" href="account.php?username='.$_SESSION['username'].'" ">Account</a>';
                }else{
                    echo '<a class="navv-item" href="account.php">Account</a>';
                }
            ?>
        </li>
        <li class="menu-items-li">
            <?php
                    if(!isset($_SESSION['username'])){
                        echo '<a class="navv-item" href="index.php">Login</a>';
                    }
                    else{
                        echo '<a class="navv-item" href="back/logout.php">Logout</a>';
                    }
            ?>
        </li>
        <li class="menu-items-li"><a class="navv-item active" href="about-us.php">About Us</a></li>
        
      </ul>
    </nav>
                <!--About Us begins here-->
<div class="seperate_header"></div>
<div class="about-us">
    <center><img class="about-us-logo" src="logo/logo2.png" alt="logo"></center>
    <h2>About Us</h2>
    <p>logo is a platform designed for book lovers to connect, share their reading experiences, and engage in meaningful discussions. It offers users the opportunity to explore a wide range of books, connect with fellow readers, and discover new literary treasures.</p>
    <p>We believe in the power of literature to inspire, educate, and unite people from diverse backgrounds. Loop serves as a digital hub where readers can come together to celebrate their love for books and foster a vibrant community centered around literature.</p>
    <p>Our team is dedicated to creating a welcoming and inclusive space where readers of all interests and backgrounds can feel valued and supported. We prioritize user privacy and security, implementing robust measures to safeguard user data and ensure a safe online environment for everyone.</p>
    <p>Thank you for being part of our Loop community. We are excited to embark on this literary journey together and look forward to sharing countless stories, insights, and discussions with you.</p>
</div>

<div class="footer" style="height:16rem">
        <p style="  font-size: x-large;margin-top:0;">Loop</p>
    <ul class="footer-icons">
        <li class="foot-item">
            <a href="#" class="foot-link"><i class="fab fa-facebook"></i></a>
        </li>
        <li class="foot-item">
            <a href="#" class="foot-link"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="foot-item">
            <a href="#" class="foot-link"><i class="fab fa-instagram"></i></a>
        </li>
        <li class="foot-item">
            <a href="#" class="foot-link"><i class="fab fa-youtube"></i></a>
        </li>
    </ul>
    <ul class="footer-links">
        <li class="foot-item" style="margin-right:3rem;">
            <a href="" class="foot-link">Home</a>
        </li>
        <li class="foot-item" style="margin-right:3rem;">
            <a href="feed.php" class="foot-link">Feed</a>
        </li>
        <li class="foot-item" style="margin-right:3rem;">
            <a href="account.php" class="foot-link">Account</a>
        </li>
        <li class="foot-item" style="margin-right:3rem;">
            <a href="about-us.php" class="foot-link">About us</a>
        </li>

    </ul>

</div>
    
<script src="js/script.js"></script>
</body>
</html>
