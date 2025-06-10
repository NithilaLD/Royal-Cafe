<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Who We Are-Royal Cafe</title>

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

      <section class="hero-whoweare" id="home">
        <div class="container">

          <h4 class="h4 hero-title">Wanna Know Who Create</h4>
          <h1 class="h1 hero-title">Who We Are!</h1>


          <p class="hero-text">
            Where Every Visit Is A Journey Of Flavour And Warmth
          </p>

          <div class="btn-group">
            <button class="btn btn-primary" onclick="window.location.href='index.html.php'">Return Home</button>

            <button class="btn btn-secondary" onclick="window.location.href='https://www.nsbm.ac/lk'">Learn More</button>
          </div>

        </div>
      </section>


      
      <!--- #CTA   NSBM -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">A Foundation for Future Strengthening</p>

            <h2 class="h2 section-title">NSBM Green University</h2>

            <p class="section-text">
              "Empowering futures through education at NSBM Green University.
               Unleash your potential in a vibrant learning environment dedicated
                to excellence in business, computing, and engineering. 
                #NSBMGreenUniversity #EmpoweringFutures"
            </p>
          </div>

          <div class="card-price">
            <figure class="card-banner">
              <img src="./assets/images/other/nsbmUni.jpg" alt="nsbm university" loading="lazy">
            </figure>

          <br>

          </div>

          

        </div>
        <center><button class="btn btn-secondary" onclick="window.location.href='https://www.nsbm.ac.lk'" >NSBM Green University !</button></center>
      </section>

    </article>
  </main>

      


    <!---#POPULAR RECIPES-->

      <section class="popular" id="Recipes">
        <div class="container">

          <p class="section-subtitle">Wanna Know Who Create</p>

          <h2 class="h2 section-title">Who We Are</h2>

          <p class="section-text"> "Meet our dynamic developer team, the creative minds behind the code. 
            Passionate about innovation, they craft digital solutions that bring ideas to life, ensuring excellence in every line of code."

          </p>

          <ul class="popular-list">

            <li id="pabashi">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/pabashi.jpg" alt="fdev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div> -->

                  <p class="card-subtitle">
                    <a href="#"><b>dev team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">W M Pabashi Hasarangi Fernando</a>
                  </h3>

                  <p class="card-text">
                    BSc(Honours) In Data Science
                  </p>
                </div>

              </div>
            </li>

            <li id="izna">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/izna.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>-->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">F Izna Idris</a>
                  </h3>

                  <p class="card-text">
                    BSc(Honours) In Data Science
                  </p>
                </div>

              </div>
            </li>
         
            <li id="kavindu">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/kavindu.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div> -->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Kavindu Gayashan</a>
                  </h3>

                  <p class="card-text">
                    Bachelor Of Information Technology (Major In Cyber Security)
                  </p>
                </div>

              </div>
            </li>

            <li id="dulan">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/dulan.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                 <!-- <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div> -->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Dulan Nithila Liyanarachchi</a>
                  </h3>

                  <p class="card-text">
                    Bachelor Of Information Technology (Major In Cyber Security)
                  </p>
                </div>

              </div>
            </li>

            <li id="isara">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/isara.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>-->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Isara Sathruwan Jayarathna </a>
                  </h3>

                  <p class="card-text">
                    BSc in Managment Information Systems (Special)
                  </p>
                </div>

              </div>
            </li>

            <li id="jayalath">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/jayalath.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>-->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">B M M B Jayalath</a>
                  </h3>

                  <p class="card-text">
                    Bsc (Hons) Technology Management
                                   </p>

                </div>

              </div>
            </li> 
            
            <li id="niveesha">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/niveesha.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div> -->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">B Y Niveesha Vihangana Sathyangani Nandasiri </a>
                  </h3>

                  <p class="card-text">
                    BSc in Managment Information Systems(Special)
                  </p>
                </div>

              </div>
            </li>

            <li id="vihanga">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/vihanga.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div> -->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Vihanga Nethsara Weerakoon</a>
                  </h3>

                  <p class="card-text">
                    BSc in Managment Information Systems (Special)
                  </p>
                </div>

              </div>
            </li>

            <li id="venuja">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/venuja.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div> -->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Venuja Geenod Senarathna</a>
                  </h3>

                  <p class="card-text">
                    BSc in Managment Information Systems (Special)
                  </p>
                </div>

              </div>
            </li> 

            <li id="sathsarani">
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/dev team/sathsarani.jpg" alt="dev team" loading="lazy">
                </figure>

                <div class="card-content">

                  <!--<div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div> -->

                  <p class="card-subtitle">
                    <a href="#"><b>DEV Team</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">H M D Sathsarani</a>
                  </h3>

                  <p class="card-text">
                    BSc (Hons) Technology Management
                  </p>
                </div>

              </div>
            </li>

        



          </ul>
          <button class="btn btn-primary" onclick="window.location.href='https://www.nsbm.ac.lk'">More About Us</button>

        </div>
      </section>






      <!--- #Empty Speace-->

      <section class="tour-search">
        <div class="container">

        </div>
      </section>





      <!--- #PACKAGE-->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Wanna Know Who Support</p>

          <h2 class="h2 section-title">Who Support Us</h2>

          <p class="section-text">
            "Grateful for the unwavering support of our dedicated lecturer. Their expertise and guidance fuel our academic journey, shaping the path to                success. Thank you for being a cornerstone of our education."
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/other/naji.jpg" alt="naji" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Mr. Naji Saravanabavan <br><sub>Senior Lecturer</sub></h3>

                  <p class="card-text">
                    Mr. Naji Saravanabavan Nasiketha is a Senior Lecturer of School of Computing at NSBM and 
                    he has joined NSBM after 7 years of service at NIBM.<br> He started his career at NIBM as a 
                    Consultant / Lecturer and worked in several Regional centers like Jaffna, Kurunegala and Kandy. 
                    <br>During his service he was actively involved in marketing project Supervisions and some special 
                    event coordinating in addition to his main responsibility – lecturing.
                     Prior to that he had been employed at University of Jaffna (Vavuniya campus) as
                      instructor/Demonstrator.
                    <br>

                </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">NSBM</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">Lecturer</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Jaffna
                        </p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">Department of Information and Systems Sciences</p>

                    

                  </div>

                  <p class="price">
                    naji@nsbm.ac.lk 
                  </p>
                    <p class="reviews">+94 11 544 5000 (ext 1228)</p>   <br>               

                  <button class="btn btn-secondary" onclick="window.location.href='https://www.nsbm.ac.lk'">Contact Now</button>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary" onclick="window.location.href='htpps://www.nsbm.ac.lk'">Learn More</button>

        </div>
      </section>

          <!--- #RESERVATION SEARCH-->

          <section class="tour-search">
            <div class="container">
    
              <p style="color: aliceblue;" class="section-subtitle">FOR Knowlage</p>
    
              <h2 class="h2 section-title">NSBM Green University</h2>
    
              <p style="color: white;" class="section-text" > "NSBM Green University is established under 
                the purview of the Ministry of Education and it is renowned for
                 its world-class academic offerings"
              </p>
            </div>
          </section>





      <!--- #GALLERY -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photos From Customer</h2>

          <p class="section-text">
            Explore our vibrant customer gallery! <br>
            "Discover a showcase of captivating images 
            shared by our valued customers."
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/food/FBcustomer1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/food/FBimg3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/food/FBimg4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/food/FBcustomer2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/food/FBimg5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

          <br><br>

         <center> <button class="btn btn-primary" onclick="window.location.href='gallery.index.php'">View All Packages</button></center>

        </div>
      </section>





      <!--- #CTA-->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call to Your Taste Buds</p>

            <h2 class="h2 section-title">Prepared for unforgettable flavours. Recall our essence!</h2>

            <p class="section-text">
              Striving to become the region's premier culinary destination, 
              our vision is to continually innovate, elevate, 
              and inspire through exceptional food and hospitality
            </p>
          </div>

          <button class="btn btn-secondary" onclick="window.location.href='https://www.nsbm.ac.lk'">Contact Us !</button>

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