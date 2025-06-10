<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order-Royal Cafe</title>

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

      <section class="hero-login " id="home" >
        <div class="container outbox btn-secondary">

          <h4 class="h4 hero-title">Wanna Taste With Us</h4>
          <h1 class="h1 hero-title">Order Now!</h1>


          <p class="hero-text">
            Order Now for Taste Our Foods
          </p>

          <form action="order.php" method="post" class="login-form ">

            <table class="btn btn-primary2">
              
            <tr>
              <div class="input-wrapper">
                <td> <label for="email" class="input-label">Email Address**&nbsp;&nbsp;&nbsp;</label> </td>
  
                <td> <input type="email" name="email" id="people" required placeholder="Email Address" class="input-field"> </td>
              </div>  
            </tr>

            <tr>
              <div class="input-wrapper">
                <td> <label for="password" class="input-label">Password*&nbsp;&nbsp;&nbsp;</label> </td>
  
                <td> <input type="password" name="password" id="people" required placeholder="Enter Your Password" class="input-field"> </td>
              </div>
            </tr>

              <tr>
               <div class="input-wrapper">
              <td> <label for="contact" class="input-label">Contact Number*&nbsp;&nbsp;&nbsp;</label> </td>

              <td> <input type="tel" name="number" id="people" required placeholder="Contact Number" class="input-field"> </td>
            </div>
              </tr>

             

            <tr>
              <div class="input-wrapper">
                <td> <label for="item" class="input-label">Select your food items*&nbsp;&nbsp;&nbsp;</label> </td>
             
            <td>
            <select name="item" id="item" class="input-field">
                <option value="0" disabled selected>Food Item</option>
                <option value="burger">Burger</option>
                <option value="pizza">Pizza</option>
                <option value="pasta">Pasta</option>
                <option value="sushi">Sushi</option>
            </select>

            </td>
              </div>
            </tr>

            <tr>
              <div class="input-wrapper">
             <td> <label for="packs" class="input-label">Number of Packs*&nbsp;&nbsp;&nbsp;</label> </td>

             <td> <input type="number" name="packs" id="packs" required placeholder="Number of packs" class="input-field"> </td>
           </div>
             </tr>

            <tr>
              <div class="input-wrapper">
                <td> <label for="address" class="input-label">Address*&nbsp;&nbsp;&nbsp;</label> </td>
  
                <td> <input type="address" name="address" id="address" required placeholder="Enter Your address" class="input-field"> </td>
              </div>
            </tr>

           

            <tr>
              <td> &nbsp; </td>
              <td> &nbsp;</td>
            </tr>

            <tr>
              <td>
                <table><center>
                <td><p class="hero-text">
                I certify that the above <br>information is true</p>
                </td>
                <td>
                     <input style="float: right;" class="hero-text" type="checkbox" required>
                </td></center>
                </table>
              </td>
              <td>
                <table></center>
                  <td><p class="hero-text">
                  I confirm that the order<br> is correct </p>
                  </td>
                  <td>
                      <input style="float: right;" class="hero-text" type="checkbox" required>
                  </td></center>
              </table>
             </td>
            </tr>

 
          </table>

           

           

           <br>

            <div class="btn-group">
               <a href="index.html.php"><button type="button" class="btn btn-primary">Go Back</button></a>
  
              <a href="ordersuccess.html.php"><button type="submit" class="btn btn-secondary">Order now</button></a>
            </div>
          
       
        </form>

        </div>
      </section>


    </section>

    <section class="tour-search">
     <div class="container">
       

       <p style="color: aliceblue;" class="section-subtitle">FOR ACCOUNT</p>

       <h2 class="h2 section-title">Do You Haven't an Account</h2>

       <p style="color: aliceblue;" class="section-text"> "Create now for free.
          it may help to let know newest offers and chance to win vauchers"
       </p>

         <a href="login.html.php">
         <button type="submit" class="btn btn-secondary">Create Now</button>
         </a>

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


  
