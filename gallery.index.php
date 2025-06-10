<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery-Royal Cafe</title>

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
          <h1 class="h1 hero-title">Our Gallery!</h1>


          <p class="hero-text">
            Where Every Visit Is A Journey Of Flavour And Warmth
          </p>

          <div class="btn-group">
            <button class="btn btn-primary" onclick="window.location.href='about.index.php'">Learn more</button>

            <button class="btn btn-secondary" onclick="window.location.href='order.html.php'">Order now</button>
          </div>

        </div>
      </section>

      


    <!---#POPULAR RECIPES-->

      <section class="popular" id="Recipes">
        <div class="container">

          <p class="section-subtitle">WONDER ALL OVER</p>

          <h2 class="h2 section-title">Popular Recipes</h2>

          <p class="section-text"> "Unlock a world of culinary delights with our curated recipes. 
            Explore a diverse range of dishes crafted to tantalize your taste buds."

          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/food/traditinal.png" alt="food/traditinal" loading="lazy">
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
                    <a href="#"><b>Cuisine</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Traditional cuisine</a>
                  </h3>

                  <p class="card-text">
                    "Journey through time with our traditional cuisine. 
                    Taste the heritage and flavors of generations past in every dish."                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/food/western.png" alt="food/western" loading="lazy">
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
                    <a href="#"><b>Cuisine</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Western Cuisine</a>
                  </h3>

                  <p class="card-text">
                    "Embark on a gastronomic journey to the West. 
                    Experience the rich flavors and culinary diversity of 
                    Western cuisine with our handcrafted recipes."                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/food/classic.png" alt="food/classic" loading="lazy">
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
                    <a href="#"><b>Cuisine</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Classic Cuisine</a>
                  </h3>

                  <p class="card-text">
                    "Experience timeless flavors with our classic cuisine recipes. 
                    Journey through culinary traditions that have stood the test of time."                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/food/bbq.png" alt="food/bbq" loading="lazy">
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
                    <a href="#"><b>Special</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">BBQ Specials</a>
                  </h3>

                  <p class="card-text">
                    "Fire up the grill for mouthwatering BBQ delights.
                     Dive into a world of smoky, savory flavors with our 
                     curated recipes."                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/food/beverages.png" alt="food/beverages" loading="lazy">
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
                    <a href="#"><b>Special</b></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Beverages</a>
                  </h3>

                  <p class="card-text">
                    "Quench your thirst with our refreshing beverages.
                     Explore a world of delightful sips and flavors."                 </p><br>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/food/seemore.png" alt="food/seemore" loading="lazy">
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
                    <a href="#"></a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#"></a>
                  </h3>

                  <p class="card-text">
                  </p>

                </div>

              </div>
            </li>

          </ul>
          <button class="btn btn-primary" onclick="window.location.href='menu.index.php'">More Recipes</button>

        </div>
      </section>






      <!--- #RESERVATION SEARCH-->

      <section class="tour-search">
        <div class="container">

          <p style="color: aliceblue;" class="section-subtitle">FOR RESERVATION</p>

          <h2 class="h2 section-title">Secure Your Cafe Dining Spot.</h2>

          <p class="section-text"> "Plan your visit with ease.
             Reserve your table for a delightful dining experience at our cafe"

          </p>

          <form action="" class="tour-search-form">

            <div class="input-wrapper">
              <label for="destination" class="input-label">Search For Combos*</label>

              <select type="text" name="destination" id="destination" required placeholder="Select Combos"
                class="input-field">
                <option class="input-field"> Select a Combo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                <option>Breakfast Combos</option>
                <option>Lunch Combos</option>
                <option>Dinner Combos</option>
                <option>Pasta Combos</option>
                <option>BBQ Combos</option>
                <option>Dessert Combos</option>

                </select>

            </div>

            <div class="input-wrapper">
              <label for="people" class="input-label">Number Of Packs*</label>

              <input type="number" name="people" id="people" required placeholder="No.of Packs" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkin" class="input-label">Reservation Date**</label>

              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkout" class="input-label">Reservation Time*</label>

              <input type="time" name="checkout" id="checkout" required class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary" onclick="window.location.href='reservation.html.php'">Pre-Order Now</button>

          </form>

        </div>
      </section>





      <!--- #PACKAGE-->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Popular Dishes</p>

          <h2 class="h2 section-title">Checkout Our New Dishes</h2>

          <p class="section-text">
            "Delve into our latest culinary creation!
             Discover the delectable flavors of our brand-new recipe."
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/food/desert.jpg" alt="desert" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Where Dreams Meet Dessert Reality</h3>

                  <p class="card-text">
                    Indulge your sweet tooth in dessert paradise.
                     Explore a tempting array of confections and satisfy your cravings
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Royalcafesrilanka</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rs.550
                    <span>/ per plate</span>
                  </p>

                  <button class="btn btn-secondary" onclick="window.location.href='order.html.php'">Order Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/food/pastta.jpg" alt="Timeless Italian Pasta Recipes Await" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Timeless Italian Pasta Recipes Await</h3>

                  <p class="card-text">
                    Indulge in the timeless comfort of pasta, where simplicity meets savory satisfaction
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Royalcafesrilanka</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(35 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rs.650
                    <span>/ per plate</span>
                  </p>

                  <button class="btn btn-secondary" onclick="window.location.href='order.html.php'">Order Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/food/soups.jpg" alt="Comforting soups to warm youh" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Comforting soups to warm you</h3>

                  <p class="card-text">
                    Savour the goodness of soul-warming soups. 
                    Explore a variety of comforting flavours that nourish the body and soothe the spirit
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Royalcafesrilanka</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rs.500
                    <span>/ per plate</span>
                  </p>

                  <button class="btn btn-secondary" onclick="window.location.href='order.html.php'">Order Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/food/Sandwiches.jpg" alt="Sandwiches that redefine your cravings" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Sandwiches that redefine your cravings</h3>

                  <p class="card-text">
                    Discover the art of sandwich making.
                     Elevate your taste buds with our creative and mouthwatering sandwich recipes
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Royalcafesrilanka</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rs.520
                    <span>/ per plate</span>
                  </p>

                  <button class="btn btn-secondary" onclick="window.location.href='order.html.php'">Order Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/food/chai.jpg" alt="Sip into cozy chai moments" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Sip into cozy chai moments</h3>

                  <p class="card-text">
                    Experience the soothing embrace of chai.
                     Discover the perfect blend of aromatic spices and comforting warmth in every cup
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Royalcafesrilanka</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rs.660
                    <span>/ per plate</span>
                  </p>

                  <button class="btn btn-secondary" onclick="window.location.href='order.html.php'">Order Now</button>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary">View All Packages</button>

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

          <button class="btn btn-secondary" onclick="window.location.href='callus.index.php'">Contact Us !</button>

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