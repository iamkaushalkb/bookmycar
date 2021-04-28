<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>BookMyCar.com</title>
    <!--Bootstrap -->
    <link
      rel="stylesheet"
      href="assets/css/bootstrap.min.css"
      type="text/css"
    />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style2.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/custom.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" />
    <link
      rel="stylesheet"
      href="assets/css/owl.transitions.css"
      type="text/css"
    />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      id="switcher-css"
      type="text/css"
      href="assets/switcher/css/switcher.css"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/red.css"
      title="red"
      media="all"
      data-default-color="true"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/orange.css"
      title="orange"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/blue.css"
      title="blue"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/pink.css"
      title="pink"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/green.css"
      title="green"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/purple.css"
      title="purple"
      media="all"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="144x144"
      href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="114x114"
      href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="72x72"
      href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png"
    />
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700");

      :root {
        --color: #3c3163;
        --transition-time: 0.5s;
      }

      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        min-height: 100vh;
        font-family: "Open Sans";
        background: #fafafa;
      }

      a {
        color: inherit;
      }

      .cards-wrapper {
        display: grid;
        justify-content: center;
        align-items: center;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 4rem;
        padding: 4rem;
        margin: 0 auto;
        width: max-content;
      }

      .card {
        font-family: "Heebo";
        --bg-filter-opacity: 0.5;
        background-image: linear-gradient(
            rgba(0, 0, 0, var(--bg-filter-opacity)),
            rgba(0, 0, 0, var(--bg-filter-opacity))
          ),
          var(--bg-img);
        height: 20em;
        width: 15em;
        font-size: 1.5em;
        color: white;
        border-radius: 1em;
        padding: 1em;
        /*margin: 2em;*/
        display: flex;
        align-items: flex-end;
        background-size: cover;
        background-position: center;
        box-shadow: 0 0 5em -1em black;
        transition: all, var(--transition-time);
        position: relative;
        overflow: hidden;
        border: 10px solid #ccc;
        text-decoration: none;
      }

      .card:hover {
        transform: rotate(0);
      }

      .card h1 {
        margin: 0;
        font-size: 1.5em;
        line-height: 1.2em;
      }

      .card p {
        font-size: 0.75em;
        font-family: "Open Sans";
        margin-top: 0.5em;
        line-height: 2em;
      }

      .card .tags {
        display: flex;
      }

      .card .tags .tag {
        font-size: 0.75em;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 0.3rem;
        padding: 0 0.5em;
        margin-right: 0.5em;
        line-height: 1.5em;
        transition: all, var(--transition-time);
      }

      .card:hover .tags .tag {
        background: var(--color);
        color: white;
      }

      .card .date {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 0.75em;
        padding: 1em;
        line-height: 1em;
        opacity: 0.8;
      }

      .card:before,
      .card:after {
        content: "";
        transform: scale(0);
        transform-origin: top left;
        border-radius: 50%;
        position: absolute;
        left: -50%;
        top: -50%;
        z-index: -5;
        transition: all, var(--transition-time);
        transition-timing-function: ease-in-out;
      }

      .card:before {
        background: #ddd;
        width: 250%;
        height: 250%;
      }

      .card:after {
        background: white;
        width: 200%;
        height: 200%;
      }

      .card:hover {
        color: var(--color);
      }

      .card:hover:before,
      .card:hover:after {
        transform: scale(1);
      }

      .card-grid-space .num {
        font-size: 3em;
        margin-bottom: 1.2rem;
        margin-left: 1rem;
      }

      .info {
        font-size: 1.2em;
        display: flex;
        padding: 1em 3em;
        height: 3em;
      }

      .info img {
        height: 3em;
        margin-right: 0.5em;
      }

      .info h1 {
        font-size: 1em;
        font-weight: normal;
      }

      /* MEDIA QUERIES */
      @media screen and (max-width: 1285px) {
        .cards-wrapper {
          grid-template-columns: 1fr 1fr;
        }
      }

      @media screen and (max-width: 900px) {
        .cards-wrapper {
          grid-template-columns: 1fr;
        }
        .info {
          justify-content: center;
        }
        .card-grid-space .num {
          /margin-left: 0;
          /text-align: center;
        }
      }

      @media screen and (max-width: 500px) {
        .cards-wrapper {
          padding: 4rem 2rem;
        }
        .card {
          max-width: calc(100vw - 4rem);
        }
      }

      @media screen and (max-width: 450px) {
        .info {
          display: block;
          text-align: center;
        }
        .info h1 {
          margin: 0;
        }
      }
    </style>
  </head>
  <body>
    <!-- Start Switcher -->
    <?php include('includes/colorswitcher.php');?>
    <!-- /Switcher -->

    <!--Header-->
    <?php include('includes/header.php');?>
    <!-- /Header -->

    <!-- Banners -->
    <div class="hero_area">
      <section class="slider_section position-relative">
        <div class="slider_container">
          <div class="img-box">
            <img src="../bookmycar/assets/images/banner-car-1.jpg" alt="" />
          </div>
          <div class="detail_container">
            <div
              id="carouselExampleControls"
              class="carousel slide"
              data-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="detail-box">
                    <h1>
                      Rent a <br />
                      Vechiles <br />
                      from experts
                    </h1>
                    <a href="../bookmycar/vehical-listing.php"> Book </a>
                  </div>
                </div>
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselExampleControls"
                role="button"
                data-slide="prev"
              >
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next"
                href="#carouselExampleControls"
                role="button"
                data-slide="next"
              >
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end slider section -->
    </div>
    <!-- car section -->
    <!-- /Banners -->
    
    <section class="cards-wrapper">
      <div class="card-grid-space">
        <a
          class="card"
          href="#"
          style="
            --bg-img: url(../images/Vechiles/sumo.jpg);
          "
        >
          <div>
            <h1 style="color: white;">Tata SUMO</h1>
            <p>
              Choose Your right sumo here for better journey.
            </p>
            <div class="date">Only With Us</div>
            <div class="tags">
              <div class="tag">SUMO</div>
            </div>
          </div>
        </a>
      </div>
      <div class="card-grid-space">
        <a
          class="card"
          href="#"
          style="
            --bg-img: url(../images/Vechiles/micro.jpg);
          "
        >
          <div>
            <h1 style="color: white;">Toyota</h1>
            <p>Choose Your right micro here for better journey.</p>
            <div class="date">Only With Us</div>
            <div class="tags">
              <div class="tag">MICRO</div>
            </div>
          </div>
        </a>
      </div>
      <div class="card-grid-space">
        <a
          class="card"
          href="#"
          style="
            --bg-img: url(../images/Vechiles/bus.jpg);
          "
        >
          <div>
            <h1 style="color: white;">TATA BUS</h1>
            <p>Choose Your right bus here for better journey</p>
            <div class="date">Only with us.</div>
            <div class="tags">
              <div class="tag">BUS</div>
            </div>
          </div>
        </a>
      </div>
      <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
    </section>

    <!-- us section -->

    <section class="us_section">
      <div class="us_container layout_padding2">
        <div class="content_box">
          <div class="box">
            <div class="img-box">
              <img src="../bookmycar/assets/images/u-1.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Low Rent</h5>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="../bookmycar/assets/images/u-2.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Fast Car</h5>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="../bookmycar/assets/images/u-3.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Safe Car</h5>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="../bookmycar/assets/images/u-4.png" alt="" />
            </div>
            <div class="detail-box">
              <h5>Quick Support</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end us section -->

    <!--Footer -->
    <?php include('includes/footer.php');?>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top">
      <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
    </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php');?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php');?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php');?>
    <!--/Forgot-password-Form -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
  </body>

  <!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>
