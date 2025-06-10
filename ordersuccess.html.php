<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success-Royal Cafe</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!--- #HEADER-->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+94778766809" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">For Further Inquires :</p>

            <p class="helpline-number">+94 (77) 876 6809</p>
          </div>

        </a>

        <a href="index.html.php" class="logo">
          <img src="./assets/images/food/Logo 2.jpg" alt="Royalcafesrilanka logo 1">
        </a>

        <div class="header-btn-group">

          
          <a class="search-btn" href="login.html.php">
          <button class="search-btn" aria-label="Search">
            <ion-icon name="search"></ion-icon>
          </button>
          </a>

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/Royalcafesrilanka" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.facebook.com/Royalcafesrilanka" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.facebook.com/Royalcafesrilanka" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="index.html.php" class="logo">
              <img src="./assets/images//food/Logo 1.jpg" alt="Royalcafesrilanka logo 2">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="index.html.php" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="menu.index.php" class="navbar-link" data-nav-link>Menu</a>
            </li>

            <li>
              <a href="about.index.php" class="navbar-link" data-nav-link>About</a>
            </li>

            <li>
              <a href="reservation.html.php" class="navbar-link" data-nav-link>Reservation</a>
            </li>

            <li>
              <a href="callus.index.php" class="navbar-link" data-nav-link>Call Us</a>
            </li>

            <li>
              <a href="gallery.index.php" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="whoweare.index.html.php" class="navbar-link" data-nav-link>Who We Are</a>
            </li>

          </ul>

        </nav>

        <a href="order.html.php"><button class="btn btn-primary">Order Now</button></a>

      </div>
    </div>

  </header>



  <main>
    <article>

      <!--HERO SECTION royalcafe  -->

      <section class="hero " id="home">
        <div class="container">

          <h4 class="h4 hero-title">Wanna Taste Foods </h4>
          <h1 class="h1 hero-title">Order Success!</h1>

          <p class="hero-text">
            We will contact You soon...
          </p>

          <div class="btn-group">
            <button class="btn btn-primary" onclick="window.location.href='index.html.php'">Return Home</button>

            <button class="btn btn-secondary" onclick="window.location.href='order.html.php'">Order More</button>
          </div>

        </div>
      </section>

  
    </article>
  </main>





  <!-- FOOTER  -->

  
  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="index.html.php" class="logo">
            <img src="./assets/images/food/Logo 1.jpg" alt="Royalcafesrilanka logo">
          </a>

          <p class="footer-text">
            Delighting taste buds with exquisite flavours, 
            our mission is to create unforgettable dining 
            experiences that leave patrons craving more
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+94 (77) 876 6809" class="contact-link">+94 (77) 876 6809</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:amithkanchana@gmail.com" class="contact-link"> amithkanchana@gmail.com </a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>Kokiskade Junction, Kandy Road, Kadawata, Sri Lanka</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Stay with us !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter your Email and Subscribe to our newsletter" required>

            <button type="submit" class="btn btn-secondary" onclick="window.location.href='login.html.php'">Subscribe</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2023 <a href="">Royalcafesrilanka.com</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="about.index.php" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="about.index.php" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="about.index.php" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>



  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>