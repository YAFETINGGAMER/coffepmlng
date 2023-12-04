<?php
session_start();
require 'dbconnect.php';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <title>Home - Gunadarma Cafe</title>
    <link href="restaurant.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Satisfy&family=Noto+Sans:wght@100;200;300;400;500;600;700;800&family=Poppins:wght@200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <section class="header">
      <div class="container">
      <div class="navbar">
  <div class="logo">
    <a href="home.html"
      ><img src="Pictures/logo (white) (1).png" width="150px"
    /></a>
  </div>
  <nav>
    <ul id="MenuItems">
      <li><a href="home.html">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="account.html"><?php echo $_SESSION['username']; ?></a></li>
    </ul>
  </nav>
  <a href="cart.html"
    ><img src="Pictures/cart (2).png" width="25px" height="25px"
  /></a>
  <img
    src="Pictures/menu.png"
    class="menu-icon"
    onclick="menutoggle()"
  />
</div>

        <div class="row">
          <div class="col-2">
            <h1>Where Every Flavor<br />Tells A Story</h1>
            <p>
              “The road to success and the road to failure are<br />almost
              exactly the same.” <br />– Colin R. Davis, Conductor.
            </p>
            <a href="menu.html" class="btn">Explore Now &#8594;</a>
          </div>
          <div class="col-2">
            <img src="Pictures/cafe (3) (1).jpg" />
          </div>
        </div>
      </div>
    </section>

    <!--- featured  categories --->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="Pictures/matcha2 1080.jpg" />
          </div>
          <div class="col-3">
            <img src="Pictures/spaghetti bolognese.jpg" />
          </div>
          <div class="col-3">
            <img src="Pictures/parfait2.jpg" />
          </div>
        </div>
      </div>
    </div>

    <!--- best seller & what's new --->
    <div class="small-container">
      <h2 class="title">Best Seller</h2>
      <div class="row">
        <div class="col-4">
          <a href="menu/menu-carbonara.html">
            <img src="Pictures/carbonara.jpg" />
          </a>
          <h4>Carbonara</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 35.000</p>
        </div>
        <div class="col-4">
          <a href="menu/menu-eggsaladsandwich.html">
            <img src="Pictures/Egg salad sandwich.jpg" />
          </a>
          <h4>Egg Salad Sandwich</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>Rp. 28.000</p>
        </div>
        <div class="col-4">
          <a href="menu/menu-hotchocolate.html">
            <img src="Pictures/hot chocolate.jpg" />
          </a>
          <h4>Hot Chocolate</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 21.000</p>
        </div>
        <div class="col-4">
          <a href="menu/menu-cheesecake.html">
            <img src="Pictures/cheesecake.jpg" />
          </a>
          <h4>Cheesecake</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 25.000</p>
        </div>
      </div>

      <h2 class="title">What's New</h2>
      <div class="row">
        <div class="col-4">
          <a href="menu/menu-details.html"
            ><img src="Pictures/arabiatta2 1080.jpg"
          /></a>
          <h4>Fusilli all'Arrabbiata</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 35.000</p>
        </div>
        <div class="col-4">
          <img src="Pictures/chicken burger.jpg" />
          <h4>chicken Burger</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>Rp. 30.000</p>
        </div>
        <div class="col-4">
          <img src="Pictures/cupcake.jpg" />
          <h4>Red Velvet Cupcake</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 25.000</p>
        </div>
        <div class="col-4">
          <img src="Pictures/cookies.jpg" />
          <h4>Chocolate Cookies</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 25.000</p>
        </div>
        <div class="col-4">
          <img src="Pictures/fruit punch.jpg" />
          <h4>Fruit Punch</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 32.000</p>
        </div>
        <div class="col-4">
          <img src="Pictures/mojito.jpg" />
          <h4>Mojito</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>Rp. 28.000</p>
        </div>
        <div class="col-4">
          <img src="Pictures/summer splash.jpg" />
          <h4>Summer Splash</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 28.000</p>
        </div>
        <div class="col-4">
          <img src="Pictures/strawberry sunset.jpg" />
          <h4>Strawberry Sunset</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rp. 28.000</p>
        </div>
      </div>
    </div>

    <!--- limited  offer --->
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img src="Pictures/crunch turkey wraps.jpg" class="offer-img" />
          </div>
          <div class="col-2">
            <p>Exclusively Available on Gunadarma Cafe</p>
            <h1>Crunch Turkey Wrap</h1>
            <small
              >The Crunch Turkey Wrap is packed with protein-rich turkey and
              fresh, crunchy veggies; this wrap have sensational flavor and
              they're good for you, too!</small
            >
            <br /><a href="" class="btn">Order Now</a>
          </div>
        </div>
      </div>
    </div>

    <!--- Testimonials --->
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="Pictures/user-1.png" />
            <h3>Paris Hilton</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="Pictures/user-2.png" />
            <h3>Peter Parker</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
            <img src="Pictures/user-3.png" />
            <h3>Mabel Joe</h3>
          </div>
        </div>
      </div>
    </div>

    <!--- brands --->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="Pictures/logo-coca-cola.png" />
          </div>
          <div class="col-5">
            <img src="Pictures/logo-gofood.png" />
          </div>
          <div class="col-5">
            <img src="Pictures/logo-paypal.png" />
          </div>
          <div class="col-5">
            <img src="Pictures/logo-oppo.png" />
          </div>
        </div>
      </div>
    </div>

    <!--- footer --->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios Mobile Phone.</p>
            <div class="app-logo">
              <img src="Pictures/play-store.png" />
              <img src="Pictures/app-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="Pictures/logo (white) (1).png" />
            <p>
              Our Purpose Is To Sustainably Make Our Food & Drinks Reach Meet
              the Pleasure of Our Customers.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2023 - Kelompok 5</p>
      </div>
    </div>

    <!--- js for toggle menu --->
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
