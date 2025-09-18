<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from wwsthemes.com/themes/medwise/v2.0/index-infertility.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 07:03:31 GMT -->

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home - Pearl Fertility and IVF</title>

    <!-- Favicon -->
    <link rel="icon" href="_images/favicon.png" type="image/x-icon" />

     <!--  adding tags.php by kadir -->
     <?php include "includes/tags.php" ?>
     
    <!-- boostrap -->
    <link href="home/css/bootstrap.css" rel="stylesheet" />

    <!-- Bootstrap Framework Version 4.5.3 -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />

    <!-- Ion Icons Version 5.1.0 -->
    <link href="css/ionicons.css" type="text/css" rel="stylesheet" />

    <!-- Medical Icons -->
    <link href="css/medwise-icons.css" type="text/css" rel="stylesheet" />

    <!-- Stylesheets -->
    <link href="css/vendors.min.css" type="text/css" rel="stylesheet" />
    <link
      href="css/style.min.css"
      type="text/css"
      rel="stylesheet"
      id="style"
    />
    <link
      href="css/components.min.css"
      type="text/css"
      rel="stylesheet"
      id="components"
    />

    <!-- Animation css -->
    <link href="css/animate.css" type="text/css" rel="stylesheet" />

    <!-- responsive css -->
    <link href="css/responsive.css" type="text/css" rel="stylesheet" />

    <!-- slick css -->
    <link href="css/slick.css" type="text/css" rel="stylesheet" />

    <!-- image-gallery -->
    <link rel="stylesheet" href="css/image-gallery.css" />

    <!-- owl carousal image gallery -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <!-- link for dots/arrow owl carousal -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"
    />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&amp;family=Manrope:wght@300;400;600;800&amp;family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
      rel="stylesheet"
    />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-79657248-2"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-79657248-2");
    </script>
    <style>
      .home-slider-area .bg-1{
        background: url('_images/slide1.png') no-repeat center right;
        background-size:cover;
      }
      .home-slider-area .bg-2{
        background: url('_images/slide2.png') no-repeat center right;
        background-size:cover;
      }
      .home-slider-area .bg-3{
        background: url('_images/slide3.png') no-repeat center right;
        background-size:cover;
      }
      .home-slider-area .bg-4{
        background: url('_images/slide4.png') no-repeat center right;
        background-size:cover;
      }

      
      @media only screen and (max-width: 769px) {
        .home-slider-area .slider-items{
          max-height:500px !important;
          min-height:unset;
        }
        .slider-title h1{
          color:white !important;
          text-shadow: 3px 3px 5px black;
          line-height:50px !important;
        }
        .slider-paragraph p{
          color:white !important;
          text-shadow: 3px 3px 5px black;
        }

      }
      @media only screen and (max-width: 426px) {
        .slider-paragraph{
          padding-top: 0 !important;
          padding-bottom: 0 !important;
        }
        .slider-paragraph p{
          margin-bottom: 0px !important;
        }
        .home-slider-area .slider-items{
          max-height:350px !important;
          min-height:unset;
        }
        .slider-title h1{
          line-height:50px !important;
        }

      }
      .review-card{
        position: relative;
      }
      .review-card .google-svg{
        position: absolute;
        top:20px;
        right:20px;
      }

      #google-review .item .review-card{
        min-height: 400px !important;
      }
      @media only screen and (max-width: 1200px) {
        #google-review .item .review-card{
        min-height: 450px !important;
      }
      }
      @media only screen and (max-width: 1024px) {
        #google-review .item .review-card{
        min-height: 350px !important;
      }
    }
      @media only screen and (max-width: 988px) {
        #google-review .item .review-card{
        min-height: 450px !important;
      }
      }
      @media only screen and (max-width: 786px) {
        #google-review .item .review-card{
        min-height: 350px !important;
      }
      }
      .owl-carousel .item {
        margin: 0 auto;
      }

      .owl-carousel .item img {
        display: block;
        width: 100%;
        height: auto;
      }
      @media only screen and (max-width: 991px) {
        .home-slider-area.style-02 .slider-items::after {
          background-color: transparent;
        }
        .home-slider-area.style-02 .slider-items .slider-items-wrap::after {
          background-color: transparent;
        }
      }
    </style>
  </head>

  <body>
    
    <?php include './includes/header.php'; ?>
    

    <div class="loader-backdrop">
      <!-- Loader -->
      <div class="loader">
        <!-- <i class="ion-heart-outline"></i> -->
        <img src="_images/favicon.png" width="100px " />
      </div>
    </div>

    <!-- -------------- carousel-part--------  -->
    <div class="home-slider-area style-02">
      <div class="container-fluid">
        <div class="row">
          <div class="home-slider-one">
            <!--Slider Items Start-->
            <div class="slider-items bg-1">
              <div class="container">
                <div class="slider-items-wrap">
                  <div class="slider-inner">
                    <div class="slider-content">
                      <div class="slider-content-inner">
                        <!--Section Title-->
                        <!-- <div class="section-title pb-10">
                        <h6 class="title uppercase black title-head">
                          Introducing The
                        </h6>
                      </div> -->
                        <!--// Section Title End-->

                        <div class="slider-title">
                          <h1 class="heading-01 h1-head">
                            <!-- Empowering Journeys: -->
                            Transforming Dreams into Reality, With Love
                            <!-- <span class="bold"> Fertility And IVF</span> -->
                          </h1>
                        </div>
                        <!--// Slider Title End-->
                        <div class="slider-paragraph pb-25 pt-20">
                          <p class="p-head">
                          Where Happy Mothers Begin Their Journey
                            <!-- Experience the empowering medical odyssey of
                            Fertility and IVF Journeys, embracing transformative
                            paths toward parenthood. -->
                          </p>
                        </div>
                        <!--// Slider Paragraph End-->
                        <!-- <div class="main-btn-wrap">
                          <a href="" class="main-btn btn"  style="color:white"
                            >Make An Appointment</a
                          >
                        </div> -->
                        <!--// Main Btn Wrap End-->
                      </div>
                    </div>
                    <!--// Slider Content End-->
                    <div class="slider-img">
                      <!-- <img src="_images/fertility2.png" alt="img" />
                   -->
                    </div>
                    <!--// Slider Img-->
                  </div>
                  <!--// Slider Inner-->

                  <!-- <div class="slider-content-bottom">
                  <div class="car-model">
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-speedometer"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">4.4s</h5>
                        <p>From 0-100kmph</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-engine"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">563hp</h5>
                        <p>Engine Power</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-fuel-station"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">100.0</h5>
                        <p>Fuel Tank Capacity</p>
                      </div>
                    </div>
                  </div>
                </div> -->
                </div>
                <!--// Slider Item Wrap-->
              </div>
              <!--//Container-->
            </div>
            <!--// Slider Items End-->

            <!--Slider Items Start-->
            <div class="slider-items bg-2" >
              <div class="container">
                <div class="slider-items-wrap">
                  <div class="slider-inner">
                    <div class="slider-content">
                      <div class="slider-content-inner">
                        <!--Section Title-->
                        <!-- <div class="section-title pb-10">
                        <h6 class="title uppercase black title-head">
                          Introducing The
                        </h6>
                      </div> -->
                        <!--// Section Title End-->

                        <div class="slider-title">
                          <h1 class="heading-01 h1-head">
                          Where Miracles are Conceived with Care
                            <!-- Blossom Blend: -->
                            <!-- <span class="bold"
                              >Fertility's Blossoming Tapestry</span
                            > -->
                          </h1>
                        </div>
                        <!--// Slider Title End-->

                        <div class="slider-paragraph pb-25 pt-20">
                          <p class="p-head">
                          Trust the best for your Life's Biggest Dream.
                            <!-- Fertility's Blossoming Tapestry weaves the
                            intertwined beauty of fertility, painting a vibrant
                            journey to parenthood filled with hope and joy. -->
                          </p>
                        </div>
                        <!--// Slider Paragraph End-->
                        <!-- <div class="main-btn-wrap">
                          <a href="#" class="main-btn btn"  style="color:white"
                            >Make An Appointment</a
                          >
                        </div> -->
                        <!--// Main Btn Wrap End-->
                      </div>
                    </div>
                    <!--// Slider Content End-->
                    <div class="slider-img">
                      <!-- <img src="_images/h2-slider-02.png" alt="img" /> -->
                    </div>
                    <!--// Slider Img-->
                  </div>
                  <!--// Slider Inner-->

                  <!-- <div class="slider-content-bottom">
                  <div class="car-model">
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-speedometer"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">4.4s</h5>
                        <p>From 0-100kmph</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-engine"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">560hp</h5>
                        <p>Engine Power</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-fuel-station"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">1005.0</h5>
                        <p>Fuel Tank Capacity</p>
                      </div>
                    </div>
                  </div>
                </div> -->
                </div>
                <!--// Slider Item Wrap-->
              </div>
              <!--//Container-->
            </div>
            <!--// Slider Items End-->

            <!--Slider Items Start-->
            <div class="slider-items bg-3">
              <div class="container">
                <div class="slider-items-wrap">
                  <div class="slider-inner">
                    <div class="slider-content">
                      <div class="slider-content-inner">
                        <!--Section Title-->
                        <!-- <div class="section-title pb-10">
                        <h6 class="title uppercase black title-head">
                          Introducing The
                        </h6>
                      </div> -->
                        <!--// Section Title End-->

                        <div class="slider-title">
                          <h1 class="heading-01 h1-head">
                          Bringing Dreams to Life, Experience Miracles
                            <!-- Conceiving Dreams: -->
                            <!-- <span class="bold"
                              >Fertility's Pathway To Pregnancy</span
                            > -->
                          </h1>
                        </div>
                        <!--// Slider Title End-->

                        <div class="slider-paragraph pb-25 pt-20">
                          <p class="p-head">
                          From Hope to Happiness: Your IVF Journey
                            <!-- Signifies the intricate journey of conception,
                            illustrating the navigation through challenges and
                            triumphs on the way to the joyous destination of
                            parenthood. -->
                          </p>
                        </div>
                        <!--// Slider Paragraph End-->
                        <!-- <div class="main-btn-wrap">
                          <a href="#" class="main-btn btn"  style="color:white"
                            >Make An Appointment</a
                          >
                        </div> -->
                        <!--// Main Btn Wrap End-->
                      </div>
                    </div>
                    <!--// Slider Content End-->
                    <div class="slider-img">
                      <!-- <img src="_images/h2-slider-03.png" alt="img" /> -->
                    </div>
                    <!--// Slider Img-->
                  </div>
                  <!--// Slider Inner-->

                  <!-- <div class="slider-content-bottom">
                  <div class="car-model">
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-speedometer"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">4.4s</h5>
                        <p>From 0-100kmph</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-engine"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">566hp</h5>
                        <p>Engine Power</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-fuel-station"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">100.0</h5>
                        <p>Fuel Tank Capacity</p>
                      </div>
                    </div>
                  </div>
                </div> -->
                </div>
                <!--// Slider Item Wrap-->
              </div>
              <!--//Container-->
            </div>
            <!--// Slider Items End-->

            <!--Slider Items Start-->
            <div class="slider-items bg-4">
              <div class="container">
                <div class="slider-items-wrap">
                  <div class="slider-inner">
                    <div class="slider-content">
                      <div class="slider-content-inner">
                        <!--Section Title-->
                        <!-- <div class="section-title pb-10">
                        <h6 class="title uppercase black title-head">
                          Introducing The
                        </h6>
                      </div> -->
                        <!--// Section Title End-->

                        <div class="slider-title">
                          <h1 class="heading-01 h1-head">
                          Building Families, Creating Futures
                            <!-- Fertility's Medical Odyssey To -->
                            <!-- <span class="bold">Pregnancy Wellness</span> -->
                          </h1>
                        </div>
                        <!--// Slider Title End-->

                        <div class="slider-paragraph pb-25 pt-20">
                          <p class="p-head">
                          Guiding You on Your Path to Parenthood.
                            <!-- Fertility's medical journey to pregnancy wellness
                            encompasses targeted interventions for optimal
                            conception and overall well-being. -->
                          </p>
                        </div>
                        <!--// Slider Paragraph End-->
                        <!-- <div class="main-btn-wrap">
                          <a href="#" class="main-btn btn" style="color:white"
                            >Make An Appointment</a
                          >
                        </div> -->
                        <!--// Main Btn Wrap End-->
                      </div>
                    </div>
                    <!--// Slider Content End-->
                    <div class="slider-img">
                      <!-- <img src="_images/h2-slider-02.png" alt="img" /> -->
                    </div>
                    <!--// Slider Img-->
                  </div>
                  <!--// Slider Inner-->

                  <!-- <div class="slider-content-bottom">
                  <div class="car-model">
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-speedometer"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">5.4s</h5>
                        <p>From 0-100kmph</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-engine"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">560hp</h5>
                        <p>Engine Power</p>
                      </div>
                    </div>
                    <div class="items">
                      <div class="items__icon">
                        <i class="flaticon-fuel-station"></i>
                      </div>
                      <div class="items__content">
                        <h5 class="heading-05">105.0</h5>
                        <p>Fuel Tank Capacity</p>
                      </div>
                    </div>
                  </div>
                </div> -->
                </div>
                <!--// Slider Item Wrap-->
              </div>
              <!--//Container-->
            </div>
            <!--// Slider Items End-->
          </div>
          <!--// Home 02 Slider Active-->
          <!-- <div
              class="home-slider-area__bottom-area"
              style="background-image: url('assets/img/bg/bg-03.png')"
            >
              <div class="container px-lg-0">
                <div class="slider-bottom-inner"></div>
              </div>
            </div>
          </div> -->
          <!--// Slider Row End-->
        </div>

        <!--Carouse Dots Area-->
        <div class="carousel-dots-area">
          <div class="container">
            <div class="carousel-dots"></div>
          </div>
        </div>
        <!--// Carouse Dots Area End-->
      </div>
      <!--//Slider Area End-->
    </div>
    <!-- 
  <section class="pt-40" style="
        background-image: url(images/1920-800-4.jpg);
        background-size: cover;
        background-position: center center;
      ">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 wow fadeInLeft    p-20 p-lg-80 order-lg-2" data-wow-delay="1s">
          <h6 class="heading font-7 mb-10 font-bold text-secondary">
            Welcome to Pearl IVF
          </h6>
          <h4 class="heading font-bold font-16 text-primary mb-20">
            We’ll Ensure
            You Always Get The Best <br>
            Result.
          </h4>

          comment out
          <p class="h5 font-semi-bold text-lh-7 mb-10">
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt mollit anim id est laborum.
            </p>
            comment out
          <div class="row">
            <div class="col-md-4">
              <div class="counter-box-1 mt-10">
                <div class="fact-number text-lh-1">
                  <span class="fact-count font-14 text-secondary" data-from="0" data-to="800" data-speed="3000"></span>
                </div>
                <h6 class="heading font-semi-bold mb-0">Successful IVF</h6>
              </div>
            </div>
            <div class="col-md-4">
              <div class="counter-box-1 mt-10">
                <div class="fact-number text-lh-1">
                  <span class="fact-count font-14 text-secondary" data-from="0" data-to="1500" data-speed="3000"></span>
                </div>
                <h6 class="heading font-semi-bold mb-0">Clients</h6>
              </div>
            </div>
            <div class="col-md-4">
              <div class="counter-box-1 mt-10">
                <div class="fact-number text-lh-1">
                  <span class="fact-count font-14 text-secondary" data-from="0" data-to="105" data-speed="3000"></span>
                </div>
                <h6 class="heading font-semi-bold mb-0">Clinics</h6>
              </div>
            </div>
          </div>
          <a href="book-appointment.php" class="btn btn-primary mt-40">Consult us today</a>
        </div>
        <div class="col-lg-5 col-md-6 order-lg-1 mt-40 mt-lg-0">
          <img src="images/700-886-1.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section> -->
    <!-- Finding click near you ----A.A -->
    <!-- <div class="pt-30 pb-30 bg-grey-1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 mt-10 mb-10">
            <h5 class="heading font-bold font-5 mb-10">
              Find a clinic near you
            </h5>
            <p class="mb-0">Excepteur sint occa ecat culpa.</p>
          </div>
          <div class="col-lg-3 mt-10 mb-10">
            <div class="input-group">
              <select name="stateName" class="form-control">
                <option disabled="" selected="">Select State</option>
                <option>California</option>
                <option>Georgia</option>
                <option>Texas</option>
                <option>Florida</option>
                <option>Michigan</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3 mt-10 mb-10">
            <div class="input-group">
              <select name="cityName" class="form-control">
                <option disabled="" selected="">Select City</option>
                <option>California</option>
                <option>Georgia</option>
                <option>Texas</option>
                <option>Florida</option>
                <option>Michigan</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3 mt-10 mb-10">
            <button class="btn btn-primary btn-block">Find clinic</button>
          </div>
        </div>
      </div>
    </div> -->

    <!-- ----------------Accordation--------A.A -->
    <!-- <div class="container mt-60">
      <div class="row">
        <div class="col-lg-6 col-12 mt-20 ">
          
          <h3 class="heading font-bold">Trusted Infertility Solutions</h3>
          <p class="lead">
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.
          </p>
          <p>
            Lorem enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur.
          </p>
          <a href="why-us-2.html" class="btn btn-primary mt-20">Read More</a>
          
          <img src="_images/microscope.png" class="img-accordation" style="width: 450px; height: 350px;">
        </div>
        <div class="col-lg-6 pl-lg-30 mt-20">
            <div id="a2" class="accordion-2" role="tablist">
                <div class="accordion-item">
                    <div class="accordion-heading" role="tab" id="a2heading1">
                        <h6 class="accordion-title font-bold">
                            <a role="button" data-toggle="collapse" href="#a2body1" aria-expanded="true" aria-controls="a2body1">
                                <i class="mw-kidneys accordion-icon"></i> Infertility & Evaluation
                            </a>
                        </h6>
                    </div>
                    <div id="a2body1" data-parent="#a2" class="collapse show" role="tabpanel" aria-labelledby="a2heading1">
                        <div class="accordion-body">
                            <div class="accordion-data">
                                We give uncommon consideration to the underlying workup for a infertile couple as it permits them to choose the correct sort of fertility treatment dependent on the underlying reports.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-heading" role="tab" id="a2heading2">
                        <h6 class="accordion-title font-bold">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#a2body2" aria-expanded="false" aria-controls="a2body2">
                                <i class="
                                mw-uterus accordion-icon"></i> Fertility Advice
                            </a>
                        </h6>
                    </div>
                    <div id="a2body2" data-parent="#a2" class="collapse" role="tabpanel" aria-labelledby="a2heading2">
                        <div class="accordion-body">
                            <div class="accordion-data">
                                Discover the factors influencing fertility, learn about testing procedures, explore treatment choices like IVF and IUI, and find lifestyle tips for optimizing your reproductive health.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-heading" role="tab" id="a2heading3">
                        <h6 class="accordion-title font-bold">
                            <a class="collapsed" role="button" data-toggle="collapse" href="#a2body3" aria-expanded="false" aria-controls="a2body3">
                                <i class="mw-blood-drop accordion-icon"></i>Fertility Awareness<br> method
                            </a>
                        </h6>
                    </div>
                    <div id="a2body3" data-parent="#a2" class="collapse" role="tabpanel" aria-labelledby="a2heading3">
                        <div class="accordion-body">
                            <div class="accordion-data">
                                Explore the principles of tracking your menstrual cycle, basal body temperature, and cervical mucus to determine your fertile days. This method can be used for both achieving pregnancy. Learn to make informed choices about your reproductive health.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div> -->

    <!-- -----------------Services icon showcase--------- A.A -->
    <div class="container mt-80">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInLeft" data-wow-delay="1s">
          <div class="heading-block">
            <h2 class="heading font-bold text-lh-4" style="color: #ff0b87">
              Welcome To Pearl Fertility And IVF
            </h2>
            <p class="sub-heading" style="color: black; margin-bottom: 0px">
              <!-- Pearl fertility and IVF is a team of experienced infertility specialist. We, as the best fertility centre, have completed more than seven years. Pearl fertility and IVF solutions were established in 2017; our services are getting satisfactory customer responses since then. -->
              Established in 2017, Pearl Fertility and IVF has been at the
              forefront of providing comprehensive fertility solutions, offering
              hope and realizing dreams for couples struggling with infertility.
              With our state-of-the-art facilities, cutting-edge technology, and
              a team of highly experienced fertility specialists, we are
              committed to guiding our patients through every step of their
              journey towards parenthood.
            </p>
            <div class="main-btn-wrap">
              <a
                href="about-us.php"
                class="main-btn btn"
                style="margin-top: -10px; margin-bottom: 20px; color:white;"
                >Read More</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div
            class="flexible-slider wow fadeInUp"
            data-items="4"
            data-items-992="2"
            data-items-768="1"
            data-arrows="true"
            data-dots="true"
          >
            <div class="slider-items">
              <div class="item">
                <div class="department-box-1 bg-blue">
                  <div class="dep-icon">
                    <!-- <img src="_images/abort-service-1.png" style="width: 80%;"> -->
                    <i class="mw-stretcher"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">IVF Services</h4>
                  <!-- <p class="heading h6 font-semi-bold text-primary">
                    Operations &amp; surgeries
                  </p> -->
                  <!-- <p class="mb-20 text-lh-7 text-muted">
                    Behind the word mountains, far from the countries Vokalia.
                  </p> -->
                  <!-- <a
                    href="department-detail-2.html"
                    class="link-secondary font-2"
                    >Get details..</a> -->
                </div>
              </div>
              <div class="item">
                <div class="department-box-1 bg-pink">
                  <div class="dep-icon">
                    <i class="mw-tablets"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">IUI Service</h4>
                  <!-- <p class="heading h6 font-semi-bold text-primary">
                    Neuro Disorders
                  </p> -->
                  <!-- <p class="mb-20 text-lh-7 text-muted">
                    Behind the word mountains, far from the countries Vokalia.
                  </p>
                  <a
                    href="department-detail-2.html"
                    class="link-secondary font-2"
                    >Get details..</a
                  > -->
                </div>
              </div>
              <div class="item">
                <div class="department-box-1 bg-blue">
                  <div class="dep-icon">
                    <i class="mw-pulse"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">ICSI service</h4>
                  <!-- <p class="heading h6 font-semi-bold text-primary">
                    Skin Problems
                  </p>
                  <p class="mb-20 text-lh-7 text-muted">
                    Behind the word mountains, far from the countries Vokalia.
                  </p>
                  <a
                    href="department-detail-2.html"
                    class="link-secondary font-2"
                    >Get details..</a
                  > -->
                </div>
              </div>
              <div class="item">
                <div class="department-box-1 bg-pink">
                  <div class="dep-icon">
                    <i class="mw-tube-baby"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">Donor service</h4>
                  <!-- <p class="heading h6 font-semi-bold text-primary">
                    Medicine &amp; Pharmacy
                  </p>
                  <p class="mb-20 text-lh-7 text-muted">
                    Behind the word mountains, far from the countries Vokalia.
                  </p>
                  <a
                    href="department-detail-2.html"
                    class="link-secondary font-2"
                    >Get details..</a
                  > -->
                </div>
              </div>
              <div class="item">
                <div class="department-box-1 bg-blue">
                  <div class="dep-icon">
                    <i class="mw-uterus"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">
                    Infertility Work UP
                  </h4>
                  <!-- <p class="heading h6 font-semi-bold text-primary">
                    Research &amp; Lab
                  </p>
                  <p class="mb-20 text-lh-7 text-muted">
                    Behind the word mountains, far from the countries Vokalia.
                  </p>
                  <a
                    href="department-detail-2.html"
                    class="link-secondary font-2"
                    >Get details..</a
                  > -->
                </div>
              </div>
              <div class="item">
                <div class="department-box-1 bg-pink">
                  <div class="dep-icon">
                    <i class="mw-care"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">
                    Freezing Service
                  </h4>
                </div>
              </div>
              <!-- <div class="item">
              <div class="department-box-1 bg-blue ">
                <div class="dep-icon">
                  <i class="mw-supplement"></i>
                </div>
                <h4 class="heading font-bold mt-10 mb-10">Blastocyst Transfer</h4>

              </div>
            </div> -->
              <div class="item">
                <div class="department-box-1 bg-blue">
                  <div class="dep-icon">
                    <i class="mw-microscope"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">Hysteroscopy</h4>
                </div>
              </div>
              <div class="item">
                <div class="department-box-1 bg-pink">
                  <div class="dep-icon">
                    <i class="mw-report"></i>
                  </div>
                  <h4 class="heading font-bold mt-10 mb-10">Laparoscopy</h4>
                </div>
              </div>
            </div>
            <div class="slider-nav-outer">
              <div class="slider-nav">
                <div class="slider-arrows"></div>
                <div class="slider-dots"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------------------- Banner-part------A.A  -->
    <div
      class="pt-50 pb-50 mt-80"
      style="
        background-image: url(_images/banner-background-img.jpeg);
        background-size: cover;
        background-position: center center;
      "
    >
      <div class="container justify-content-end">
        <div class="row banner-row align-items-center">
          <div class="col-lg-4">
            <!-- <a href="book-appointment-form.html" class="btn btn-primary btn-lg">Fix Appointment</a> -->
          </div>
          <div class="col-lg-8 pr-40 wow fadeInLeft" style="color: white">
            <h3
              class="heading font-bold text-lh-4 pb-4 wow fadeInLeft"
              style="color: white"
            >
              We Offer Wide Range Of Services At Pearl Fertility And IVF
            </h3>

            <p class="h5 d-flex align-items-center" style="color: white">
              <i
                class="ion-medal-outline mr-20"
                style="font-weight: 300; font-size: 35px"
              ></i>
              With You at Every Step.
            </p>
            <p class="h5 d-flex align-items-center mb-20" style="color: white">
              <i
                class="mw-baby mr-20"
                style="font-weight: 800; font-size: 35px"
              ></i>
              Plan your family with bright future
            </p>
            <p class="h5 d-flex align-items-center mb-20" style="color: white">
              <i
                class="mw-care mr-20"
                style="font-weight: 800; font-size: 35px"
              ></i>
              Providing care for future family
            </p>
            <a href="book-appointment.php" class="btn btn-primary btn-lg ml-40"
              >Book Appointment</a
            >
          </div>
        </div>
      </div>
    </div>

    <!-- ---------About pearl fertility--------A.A- -->
    <div class="container mt-40">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="heading-block wow fadeInLeft">
            <h2 class="heading font-bold text-lh-4 text-primary">
              About Pearl Fertility
            </h2>
            <h4 class="heading font-bold text-lh-4 pt-4 pb-4">
              What You Need To Know About Clinic
            </h4>
          </div>
        </div>
      </div>
    </div>

    <div
      class="pt-50 bg-light"
      style="
        background-image: url('_images/6.png');
        background-size: cover;
        background-position: center center;
      "
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center wow fadeInUp">
            <!-- <div class="icon icon-4x ">
            <i class="mw-care font-18"></i>
            <img src="_images/pearl-logo.png">
          </div> -->
            <h3 class="heading font-bold mt-20 mb-20">
              "Accessible,
              <span class="text-primary">Compassionate Care, </span>
            </h3>
            <h3 class="font-bold">
              <span class="text-primary">Anytime, </span>Anywhere.
            </h3>
            <p class="h5 mb-40">
              We offer confidential, non-judgmental reproductive health care for
              people of any gender, age & nationality.
            </p>
            <!-- <a href="contact-1.html" class="btn btn-primary"> Contact Us</a> -->
            <!-- <a href="book-appointment-form.html" class="btn btn-outline-primary ml-10"> Fix Appointment</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- ---------Testimonail-------- -->
    <div class="container mt-50">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="heading-block" style="margin-bottom: 0px">
            <h2 class="heading font-bold pb-4 wow fadeInLeft">
              Testimonial Notes
            </h2>
            <!-- <p class="sub-heading">
              There live the blind texts separated they right at the coast of
              the Semantics.
            </p> -->
          </div>
        </div>
      </div>
      <!-- <div class="row mt-0 wow fadeInUp">
      <div class="col-lg-12">
        <div class="flexible-slider" data-items="2" data-items-992="2" data-items-768="1" data-arrows="true" data-dots="true">
          <div class="slider-items">
            <div class="item">
              <div class="testimonial-2 bg-blue">
                <p class="testimonial-text font-style-3 font-italic text-white">
                  “Dr. Pritimala is incredable. Not only has she taken great care of my health, but also she is lovely to speak with at every appointment thank you doctor”
                </p>
                <div class="testimonial-author">
                  <div class="testi-img">
                    <img src="_images/1test-1-150x150-1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="testi-name">
                    <h6 class="heading font-bold font-2 text-white">
                      SNEHA BHIWANDKAR</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-2 bg-blue">
                <p class="testimonial-text font-style-3 font-italic text-white">
                  “It's a great experience to have such a talented doctor like doctor pritimala gangurde kadam to achieve my motherhood journey. Thanks a lot, Ma'am. I am always will be grateful to you”
                </p>
                <div class="testimonial-author">
                  <div class="testi-img">
                    <img src="_images/1test-1-150x150-1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="testi-name">
                    <h6 class="heading font-bold font-2 text-white">
                      SHOBA GOSWAMI</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-2 bg-blue">
                <p class="testimonial-text font-style-3 font-italic text-white">
                  “A very good IVF center.Dr. Pritimala is very caring and cooperative. In every appointment she is taking proper care of my health. Thank you madam for your kind support. ”
                </p>
                <div class="testimonial-author">
                  <div class="testi-img">
                    <img src="_images/1test-1-150x150-1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="testi-name">
                    <h6 class="heading font-bold font-2 text-white">
                      CHANCHALA KAMBLE</h6>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="slider-nav-outer">
            <div class="slider-nav-sleek">
              <div class="slider-arrows">
                <div class="icon-prev">
                  <i class="ion-chevron-back-sharp"></i>
                </div>
                <div class="icon-next">
                  <i class="ion-chevron-forward-sharp"></i>
                </div>
              </div>
              <div class="slider-dots"></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
      <!-- google review code  -->

      <div
        class="container-flude m-5 mt-0 owl-theme"
        id="google-review-container"
        style="padding-top: 50px"
      >
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel owl-theme" id="google-review">
              <div class="item">
                <div class="container-flude">
                  <div class="row">
                    <div class="col">
                      <div class="card p-3 review-card">
                        <div class="d-flex m-2 col-12">
                          <img
                            style="width: 50px; height: 50px"
                            src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_a5734c7808ae2c5bfedaed6c9b9d930c.jpg"
                            class="card-img-top"
                            alt="img"
                          />
                          <div class="m-2">
                            <h5 style="font-size: 13px" class="card-title">
                              SNEHA BHIWANDKAR
                            </h5>
                            <p class="card-text">2 months ago</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <p
                            style="color: #fb8e28; font-size: 20px"
                            class="card-text"
                          >
                            ★★★★★
                            <!-- ★★★★☆ -->
                          </p>
                          <div class="card-review-container">
                            <p class="card-text">
                              “Dr. Pritimala is incredable. Not only has she
                              taken great care of my health, but also she is
                              lovely to speak with at every appointment thank
                              you doctor”
                            </p>
                          </div>
                        </div>
                        <div class="google-svg">
                          <svg viewBox="0 0 512 512" height="18" width="18">
                            <g fill="none" fill-rule="evenodd">
                              <path
                                d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                                fill="#4285f4"
                              ></path>
                              <path
                                d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                                fill="#34a853"
                              ></path>
                              <path
                                d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                                fill="#fbbc05"
                              ></path>
                              <path
                                d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                                fill="#ea4335"
                              ></path>
                              <path d="M20 20h472v472H20V20z"></path>
                            </g>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container-flude">
                  <div class="row">
                    <div class="col">
                      <div
                        class="card p-3 review-card"
                      >
                        <div class="d-flex m-">
                          <img
                            style="width: 50px; height: 50px"
                            src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_998c7892fdefbe10ac9f3723ae97d5a4.jpg"
                            class="card-img-top"
                            alt="img"
                          />
                          <div class="m-2">
                            <h5 style="font-size: 13px" class="card-title">
                              SHOBA GOSWAMI
                            </h5>
                            <p class="card-text">6 months ago</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <p
                            style="color: #fb8e28; font-size: 20px"
                            class="card-text"
                          >
                            ★★★★★
                          </p>
                          <div class="card-review-container">
                            <p class="card-text">
                              “It's a great experience to have such a talented
                              doctor like doctor pritimala gangurde kadam to
                              achieve my motherhood journey. Thanks a lot,
                              Ma'am. I am always will be grateful to you”
                            </p>
                          </div>
                        </div>
                        <div class="google-svg">
                          <svg viewBox="0 0 512 512" height="18" width="18">
                            <g fill="none" fill-rule="evenodd">
                              <path
                                d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                                fill="#4285f4"
                              ></path>
                              <path
                                d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                                fill="#34a853"
                              ></path>
                              <path
                                d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                                fill="#fbbc05"
                              ></path>
                              <path
                                d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                                fill="#ea4335"
                              ></path>
                              <path d="M20 20h472v472H20V20z"></path>
                            </g>
                          </svg>
                          <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container-flude">
                  <div class="row">
                    <div class="col">
                      <div
                        class="card p-3 review-card"
                      >
                        <div class="d-flex m-">
                          <img
                            style="width: 50px; height: 50px"
                            src="https://www.goticketspro.com/wp-content/uploads/2024/02/ChIJyT3o3nLTQIYRuXsWN3R8UjY_e8dd98b5399bd0a48fb3b06c670d1658.jpg"
                            class="card-img-top"
                            alt="img"
                          />
                          <div class="m-2">
                            <h5 style="font-size: 13px" class="card-title">
                              CHANCHALA KAMBLE
                            </h5>
                            <p class="card-text">6 months ago</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <p
                            style="color: #fb8e28; font-size: 20px"
                            class="card-text"
                          >
                            ★★★★★
                          </p>
                          <div class="card-review-container-container">
                            <p class="card-text">
                              “A very good IVF center.Dr. Pritimala is very
                              caring and cooperative. In every appointment she
                              is taking proper care of my health. Thank you
                              madam for your kind support."
                            </p>
                          </div>
                        </div>
                        <div class="google-svg">
                          <svg viewBox="0 0 512 512" height="18" width="18">
                            <g fill="none" fill-rule="evenodd">
                              <path
                                d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                                fill="#4285f4"
                              ></path>
                              <path
                                d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                                fill="#34a853"
                              ></path>
                              <path
                                d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                                fill="#fbbc05"
                              ></path>
                              <path
                                d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                                fill="#ea4335"
                              ></path>
                              <path d="M20 20h472v472H20V20z"></path>
                            </g>
                          </svg>

                          <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container-flude">
                  <div class="row">
                    <div class="col">
                      <div
                        class="card p-3 review-card"
                      >
                        <div class="d-flex m-">
                        <div style="width: 50px;height: 50px; border-radius:50%; background-color: #78909c; display: flex; align-items: center; justify-content: center;">
                            <p style="font-size: 20px; font-weight: 900; color: white; margin: 0;">Y</p>
                          </div>
                          <div class="m-2">
                            <h5 style="font-size: 13px" class="card-title">
                            Yash Shah
                            </h5>
                            <p class="card-text">6 months ago</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <p
                            style="color: #fb8e28; font-size: 20px"
                            class="card-text"
                          >
                            ★★★★★
                          </p>
                          <div class="card-review-container-container">
                            <p class="card-text">
                              “Thank you pritimala maam for your efforts and guidance. Because of your precise decesions and experince of correct mediciation our family is completed. Highly recommended."
                            </p>
                          </div>
                        </div>
                        <div class="google-svg">
                          <svg viewBox="0 0 512 512" height="18" width="18">
                            <g fill="none" fill-rule="evenodd">
                              <path
                                d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                                fill="#4285f4"
                              ></path>
                              <path
                                d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                                fill="#34a853"
                              ></path>
                              <path
                                d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                                fill="#fbbc05"
                              ></path>
                              <path
                                d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                                fill="#ea4335"
                              ></path>
                              <path d="M20 20h472v472H20V20z"></path>
                            </g>
                          </svg>

                          <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container-flude">
                  <div class="row">
                    <div class="col">
                      <div
                        class="card p-3 review-card"
                      >
                        <div class="d-flex m-">
                          <div style="width: 50px;height: 50px; border-radius:50%; background-color: red; display: flex; align-items: center; justify-content: center;">
                            <p style="font-size: 20px; font-weight: 900; color: white; margin: 0;">N</p>
                          </div>
                          <div class="m-2">
                            <h5 style="font-size: 13px" class="card-title">
                            Nisha Angel
                            </h5>
                            <p class="card-text">6 months ago</p>
                          </div>
                        </div>
                        <div class="card-body">
                          <p
                            style="color: #fb8e28; font-size: 20px"
                            class="card-text"
                          >
                            ★★★★★
                          </p>
                          <div class="card-review-container-container">
                            <p class="card-text">
                              “Awesome clinic and doctor pritimala is superb. She is best doctor I have ever met she listen very carefully to you and understand your concern. She gives her best to there patients. Thanku so much doctor."
                            </p>
                          </div>
                        </div>
                        <div class="google-svg">
                          <svg viewBox="0 0 512 512" height="18" width="18">
                            <g fill="none" fill-rule="evenodd">
                              <path
                                d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z"
                                fill="#4285f4"
                              ></path>
                              <path
                                d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z"
                                fill="#34a853"
                              ></path>
                              <path
                                d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z"
                                fill="#fbbc05"
                              ></path>
                              <path
                                d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z"
                                fill="#ea4335"
                              ></path>
                              <path d="M20 20h472v472H20V20z"></path>
                            </g>
                          </svg>

                          <!-- <img style="width: 20px;position: relative;left: 50px;" src="assets/img/google.png" alt="img"> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div style="color: #000" class="swiper-button-prev"></div>
        <div style="color: #000" class="swiper-button-next rotate-180"></div> -->
      </div>
    </div>
    <!-- </div> -->

    <!-- ----------get in touch ------------- -->
    <!-- <div class="pt-60 pb-80 mt-80 bg-grey-1" style="
        background-image: url(images/world-map-3.png);
        background-repeat: no-repeat;
        background-position: right center;
        background-size: 50%;
      ">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-lg-4 mt-20">
          <h3 class="heading font-bold text-lh-4 mb-0">
            Get in touch with our experts today!
          </h3>
        </div>
        <div class="col-lg-4 d-flex align-items-center mt-20">
          <i class="ion-call-outline icon icon-primary icon-round icon-3x mr-20"></i>
          <div>
            <h6 class="heading  font-bold mb-10 text-primary">Call Us</h6>
            <p class="mb-0 h4 no-head font-semi-bold text-lh-1"><a href="tel:+919022920663">+919022920663</a></p>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center mt-20">
          <i class="ion-mail-outline icon icon-primary icon-round icon-3x mr-20"></i>
          <div>
            <h6 class="heading  font-bold mb-10 text-primary">Email Us</h6>
            <p class="mb-0 h4  email-head font-semi-bold text-lh-1"><a href="mailto:pearlfertilitynivf@gmail.com">pearlfertilitynivf@gmail.com
              </a></p>
          </div>
        </div>
      </div>
    </div>
  </div> -->

    <!-- ------------Acccordation-with image ------------A.A --- -->
    <div class="container mt-60">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12 pl-lg-30 mt-20">
          <div id="a2" class="accordion-2 wow fadeInLeft" role="tablist">
            <div class="accordion-item">
              <h3
                class="heading font-bold text-lh-4 text-primary pb-4 wow fadeInLeft"
              >
                Frequently Asked Questions
              </h3>

              <div class="accordion-heading" role="tab" id="a2heading1">
                <h6 class="accordion-title font-bold">
                  <a
                    role="button"
                    data-toggle="collapse"
                    href="#a2body1"
                    aria-expanded="true"
                    aria-controls="a2body1"
                  >
                    <i class="mw-kidneys accordion-icon"></i> What Is IVF
                  </a>
                </h6>
              </div>
              <div
                id="a2body1"
                data-parent="#a2"
                class="collapse show"
                role="tabpanel"
                aria-labelledby="a2heading1"
              >
                <div class="accordion-body">
                  <div class="accordion-data">
                    IVF i.e. In vitro fertilization is a procedure where female
                    eggs and male sperm are fertilized outside the body in a
                    petri dish in a controlled environment.
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-heading" role="tab" id="a2heading2">
                <h6 class="accordion-title font-bold">
                  <a
                    class="collapsed"
                    role="button"
                    data-toggle="collapse"
                    href="#a2body2"
                    aria-expanded="false"
                    aria-controls="a2body2"
                  >
                    <i class="mw-uterus accordion-icon"></i> When Is IVF Needed
                  </a>
                </h6>
              </div>
              <div
                id="a2body2"
                data-parent="#a2"
                class="collapse"
                role="tabpanel"
                aria-labelledby="a2heading2"
              >
                <div class="accordion-body">
                  <div class="accordion-data">
                    Broadly IVF is required for male factor infertility from
                    azoospermia and various female factor infertility conditions
                    like diminished ovarian reserve, defect in fallopian tubes
                    etc.
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-heading" role="tab" id="a2heading3">
                <h6 class="accordion-title font-bold">
                  <a
                    class="collapsed"
                    role="button"
                    data-toggle="collapse"
                    href="#a2body3"
                    aria-expanded="false"
                    aria-controls="a2body3"
                  >
                    <i class="mw-blood-drop accordion-icon"></i>Are there any
                    risks to having a baby through IVF?
                  </a>
                </h6>
              </div>
              <div
                id="a2body3"
                data-parent="#a2"
                class="collapse"
                role="tabpanel"
                aria-labelledby="a2heading3"
              >
                <div class="accordion-body">
                  <div class="accordion-data">
                    As such, there is no risk because of IVF procedures but
                    there are few anecdotal reports of increased birth defect
                    with IVF pregnancy.
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <a href="faqs.php" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-6 order-lg-1 mt-20 wow fadeInUp">
          <img src="images/700-783-1.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>

    <!-- =================New section Useful Information=========================== -->

    <section class="our-process-section padding-top-110 style-02 pb-80">
      <!-- style="background-image: url(./images/new-section.png) -->
      <div class="img-bg"></div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title-wrap text-center wow fadeInLeft">
              <!--Section Title-->
              <div class="heading-block">
                <h2
                  class="heading font-bold text-lh-4 text-primary pb-4 wow fadeInLeft"
                >
                  Find Useful Information
                </h2>
                <!-- <p class="sub-heading">There live the blind texts separated they right at the coast of the Semantics.</p> -->
              </div>
              <!--// Section Title-->
            </div>
          </div>
        </div>
        <!--// Row End-->
        <div class="row wow fadeInUp" style="color: white">
          <div class="col-lg-4 col-md-6">
            <!-- Work Items-->
            <div class="our-process-section__work-items">
              <div class="items-number">01</div>
              <div class="work-tiems-inner">
                <div class="padding-bottom-20">
                  <h5 class="items-title">Infertility & Evaluation</h5>
                </div>
                <p>
                  We give uncommon consideration to the underlying workup for a
                  infertile couple as it permits them to choose the correct sort
                  of fertility treatment dependent on the underlying reports.
                </p>
              </div>
            </div>
            <!--// Work Items-->
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Work Items-->
            <div class="our-process-section__work-items">
              <div class="items-number">02</div>
              <div class="work-tiems-inner">
                <div class="padding-bottom-20">
                  <h5 class="items-title">Fertility Advice</h5>
                </div>
                <p>
                  Discover the factors influencing fertility, learn about
                  testing procedures, explore treatment choices like IVF and
                  IUI, and find lifestyle tips for optimizing your reproductive
                  health.
                </p>
              </div>
            </div>
            <!--// Work Items-->
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Work Items-->
            <div class="our-process-section__work-items">
              <div class="items-number">03</div>
              <div class="work-tiems-inner">
                <div class="padding-bottom-20">
                  <h5 class="items-title">Fertility Awareness Method</h5>
                </div>
                <p>
                  Explore the principles of tracking your menstrual cycle, basal
                  body temperature, and cervical mucus to determine your fertile
                  days. This method can be used for both achieving pregnancy.
                  Learn to make informed choices about your reproductive health.
                </p>
              </div>
            </div>
            <!--// Work Items-->
          </div>
          <!-- <div class="col-lg-3 col-md-6">
          Work Items
          <div class="our-process-section__work-items">
            <div class="items-number">04</div>
            <div class="work-tiems-inner">
              <div class="padding-bottom-20">
                <h5 class="items-title">Best Gynecologist</h5>
              </div>
              <p>
                Highly skilled gynecologist specializing in women's health, providing compassionate care and expert treatment.
              </p>
            </div>
          </div>
          // Work Items
        </div> -->
        </div>
        <!--// Row End-->
      </div>
      <!--// Container-->
    </section>

    <!-- Image gallery  -->

    <div class="container mt-80">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="heading-block">
            <h3
              class="heading font-bold text-lh-4 text-primary pb-4 wow fadeInLeft"
            >
              Image Gallery
            </h3>
            <!-- <p class="sub-heading">There live the blind texts separated they right at the coast of the Semantics.</p> -->
          </div>
        </div>
      </div>
    </div>
    <section id="img-gallery ">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md"> -->
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="owl-carousel owl-theme" id="gallery-2">
                  <div class="item">
                    <a href="img-gallery/29.png" data-fancybox="gallery">
                      <img src="img-gallery/29.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/2.png" data-fancybox="gallery">
                      <img src="img-gallery/2.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/3.png" data-fancybox="gallery">
                      <img src="img-gallery/3.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/5.png" data-fancybox="gallery">
                      <img src="img-gallery/5.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/6.png" data-fancybox="gallery">
                      <img src="img-gallery/6.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/7.png" data-fancybox="gallery">
                      <img src="img-gallery/7.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/8.png" data-fancybox="gallery">
                      <img src="img-gallery/8.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/9.png" data-fancybox="gallery">
                      <img src="img-gallery/9.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/10.png" data-fancybox="gallery">
                      <img src="img-gallery/10.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/11.png" data-fancybox="gallery">
                      <img src="img-gallery/11.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/12.png" data-fancybox="gallery">
                      <img src="img-gallery/12.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/13.png" data-fancybox="gallery">
                      <img src="img-gallery/13.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/14.png" data-fancybox="gallery">
                      <img src="img-gallery/14.png" alt="Image 1" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="owl-carousel owl-theme" id="gallery-3">
                  <div class="item">
                    <a href="img-gallery/15.png" data-fancybox="gallery">
                      <img src="img-gallery/15.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/16.png" data-fancybox="gallery">
                      <img src="img-gallery/16.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/17.png" data-fancybox="gallery">
                      <img src="img-gallery/17.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/18.png" data-fancybox="gallery">
                      <img src="img-gallery/18.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/19.png" data-fancybox="gallery">
                      <img src="img-gallery/19.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/20.png" data-fancybox="gallery">
                      <img src="img-gallery/20.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/21.png" data-fancybox="gallery">
                      <img src="img-gallery/21.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/22.png" data-fancybox="gallery">
                      <img src="img-gallery/22.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/23.png" data-fancybox="gallery">
                      <img src="img-gallery/23.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/24.png" data-fancybox="gallery">
                      <img src="img-gallery/24.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/25.png" data-fancybox="gallery">
                      <img src="img-gallery/25.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/26.png" data-fancybox="gallery">
                      <img src="img-gallery/26.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/27.png" data-fancybox="gallery">
                      <img src="img-gallery/27.png" alt="Image 1" />
                    </a>
                  </div>
                  <div class="item">
                    <a href="img-gallery/28.png" data-fancybox="gallery">
                      <img src="img-gallery/28.png" alt="Image 1" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =================New section add End here=========================== -->

    <!--  ----------------Yoga-section----------A.A- -->
    <div class="container mt-80">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="heading-block">
            <h3
              class="heading font-bold text-lh-4 text-primary pb-4 wow fadeInLeft"
            >
              Nutrition And Health Services
            </h3>
            <!-- <p class="sub-heading">There live the blind texts separated they right at the coast of the Semantics.</p> -->
          </div>
        </div>
      </div>
    </div>
    <section id="nutrition-yoga-container" class="container">
      <div id="nutrition-yoga-img-container" class="wow fadeInLeft">
        <img src="_images/64664596.cms" id="nutrition-yoga-img" alt="img" />
      </div>
      <div id="nutrition-yoga-content-container" class="wow fadeInRight">
        <h3 class="heading font-bold">Nutrition & Yoga.</h3>
        <p class="h5">
          Shyft is a health platform that brings all health & well-being needs
          to one app. From understanding health - what’s good for you and what’s
          not, finding the right solutions, to having all your medical records &
          measuring health vitals in one place - find it all on Shyft! We also
          provide personalized Nutrition, Yoga and Dermatology services.
        </p>
        <a href="https://www.betheshyft.com/" class="btn btn-primary"
          >Know More</a
        >
      </div>
    </section>

    <!-- -----------------Blog -section------- -->
    <div class="container mt-80 mb-80">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-block">
            <h3 class="heading font-bold" style="padding-bottom: 24px">
              Our Blog
            </h3>
            <!-- <p class="sub-heading">
            Behind the word mountains, far from the countries Vokalia and
            Consonantia
          </p> -->
          </div>
        </div>
        <!-- <div class="col-lg-4 mt-20">
        <div class="blog-grid">
          <div class="blog-header">
            <img src="images/550-291-1.jpg" class="img-fluid rounded mb-30" alt="" />
            <div class="blog-meta mb-10">
              <ul class="meta-list">
                <li class="posted-on">
                  <a href="#">
                    <span class="date">23</span>
                    <span class="month">Sep</span>
                  </a>
                </li>
                <li class="posted-in"><a href="#">Technology</a></li>
              </ul>
            </div>
            <h4 class="heading font-bold text-lh-5 mb-10">
              Technology can help you become healthy
            </h4>
          </div>
          <div class="blog-excerpt">
            <p>
              Behind the word mountains, far from the countries Vokalia, there
              live the texts
            </p>
            <a href="blog-artical.php" class="link-primary">Read More..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-20">
        <div class="blog-grid">
          <div class="blog-header">
            <img src="images/550-291-2.jpg" class="img-fluid rounded mb-30" alt="" />
            <div class="blog-meta mb-10">
              <ul class="meta-list">
                <li class="posted-on">
                  <a href="#">
                    <span class="date">10</span>
                    <span class="month">Oct</span>
                  </a>
                </li>
                <li class="posted-in"><a href="#">Food</a></li>
              </ul>
            </div>
            <h4 class="heading font-bold text-lh-5 mb-10">
              Healthier options for those hunger-pangs
            </h4>
          </div>
          <div class="blog-excerpt">
            <p>
              Behind the word mountains, far from the countries Vokalia, there
              live the texts
            </p>
            <a href="blog-artical.php" class="link-primary">Read More..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-20">
        <div class="blog-grid">
          <div class="blog-header">
            <img src="images/550-291-3.jpg" class="img-fluid rounded mb-30" alt="" />
            <div class="blog-meta mb-10">
              <ul class="meta-list">
                <li class="posted-on">
                  <a href="#">
                    <span class="date">25</span>
                    <span class="month">Nov</span>
                  </a>
                </li>
                <li class="posted-in"><a href="#">Health Care</a></li>
              </ul>
            </div>
            <h4 class="heading font-bold text-lh-5 mb-10">
              Complete guide to shoulder &amp; neck pain
            </h4>
          </div>
          <div class="blog-excerpt">
            <p>
              Behind the word mountains, far from the countries Vokalia, there
              live the texts
            </p>
            <a href="blog-artical.php" class="link-primary">Read More..</a>
          </div>
        </div>
      </div> -->
      </div>
      <div class="row">
        <div class="col-md-4 col-12 home-blog-card">
          <div class="home-blog-card-img-container">
            <img
              src="images/blog-img/blog-1.png"
              alt=""
            />
          </div>
          <div class="home-blog-card-content p-20">
            <h2 class="home-blog-card-heading">
              Testing for Female Infertility: What to Expect
            </h2>
            <p class="home-blog-card-info">
              Understanding the intricacies of female infertility can be a crucial step on the journey to parenthood....
            </p>
            <div class="home-blog-card-btn">
              <a href="https://pearlfertilityandivf.com/blog/2024/04/20/testing-for-female-infertility-what-to-expect/" class="home-blog-card-read-more-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 home-blog-card">
          <div class="home-blog-card-img-container">
            <img
              src="images/blog-img/blog-2.jpg"
              alt=""
            />
          </div>
          <div class="home-blog-card-content p-20">
            <h2 class="home-blog-card-heading">
              Exploring The Science Behind IVF: How It Works
            </h2>
            <p class="home-blog-card-info">
              Do you want to grow your family but can’t conceive? If so, you may wonder if in vitro fertilization (IVF)...
            </p>
            <div class="home-blog-card-btn">
              <a href="https://pearlfertilityandivf.com/blog/2024/04/20/exploring-the-science-behind-ivf-how-it-works/" class="home-blog-card-read-more-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 home-blog-card">
          <div class="home-blog-card-img-container">
            <img
              src="images/blog-img/blog-3.jpg"
              alt=""
            />
          </div>
          <div class="home-blog-card-content p-20">
            <h2 class="home-blog-card-heading">
              The Role Of Gratitude In The Fertility Journey: Finding Joy In The Process
            </h2>
            <p class="home-blog-card-info">
              As you navigate your fertility journey, you’ll experience no shortage of emotions. One feeling you may...
            </p>
            <div class="home-blog-card-btn">
              <a href="https://pearlfertilityandivf.com/blog/2024/04/20/the-role-of-gratitude-in-the-fertility-journey-finding-joy-in-the-process/" class="home-blog-card-read-more-btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- -------------footer------------ -->
    <?php include './includes/footer.php'; ?>

    <div id="back"><i class="ion-chevron-up-sharp"></i></div>

    <!-- Modal -->
    <!-- <div class="modal zoom-in fade" id="modal-welcome" data-open-onload="true" data-open-delay="3000" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content" style="
            background-image: url('images/800-450-1.jpg');
            background-size: cover;
            background-position: center center;
          ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ion-close-sharp"></i>
        </button>
        <div class="modal-body p-50">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <h4 class="heading font-bold text-primary mb-10">
                  Pearl Fertility and IVF </h4>
                <h4 class="heading font-bold text-primary mb-10">
                  Don't lose hope!
                </h4>
                <h3 class="heading font-bold font-15 text-secondary mb-20">
                  Consult Our IVF Specialists
                </h3>
                <p class="heading h5 mb-10">
                  Highly Qualified Fertility & IVF Expert.
                </p>
                <p class="mb-30">
                  To assure the best & genuine fertility solutions to all needy couples.
                </p>
                <a href="contact.php" class="btn btn-primary">Get in touch</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

    <!-- JQuery Version 3.6.0 -->
    <script src="js/jquery.min.js"></script>

    <!-- jquery version 3.4.1 -->
    <script src="home/js/jquery-3.4.1.min.js"></script>

    <!-- new slick min.js  -->
    <script src="home/js/slick.min.js"></script>

    <!-- new jquery migrate  -->
    <script src="js/jquery-migrate.js"></script>

    <!-- new way points js -->
    <script src="js/waypoints.min.js"></script>

    <!-- new counter js -->
    <script src="js/jQuery.rcounter.js"></script>

    <!-- new  jquery nice-select-->
    <script src="js/jquery.nice-select.min.js"></script>

    <!-- new main -->
    <script src="js/main.js"></script>

    <!-- Bootstrap Version 4.5.3 -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Appear JS -->
    <script src="js/jquery.appear.min.js"></script>

    <!--Pretty Photo Version 3.1.6-->
    <script src="js/jquery.prettyPhoto.min.js"></script>

    <!-- Count To JS -->
    <script src="js/jquery.countTo.min.js"></script>

    <!-- Slick Slider Version 1.8.1 -->
    <script src="js/slick.min.js"></script>

    <!-- jQuery UI (Date Picker) -->
    <script src="js/jquery-ui.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.min.js"></script>

    <!-- owl carousal image gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

    <!-- WOW Aimation  -->
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();

      // image gallery

      // <--image gallery script-- >

      $(document).ready(function () {
        $("#google-review").owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1,
            },
            783: {
              items: 2,
            },
            1024: {
              items: 2,
            },
            1050: {
              item: 3,
            },
          },
        });
      });
      $(document).ready(function () {
        $("#gallery-2").owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 2,
            },
            1000: {
              items: 2,
            },
          },
        });
      });
      $(document).ready(function () {
        $("#gallery-3").owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 2,
            },
            1000: {
              items: 2,
            },
          },
        });
      });

      $('[data-fancybox="gallery"]').fancybox();

      $(document).ready(function () {
        var swiper = new Swiper(".swiper-container-nobe", {
          // Optional parameters
          direction: "horizontal",
          loop: true,

          // If you need pagination
          pagination: {
            el: ".swiper-pagination",
          },

          navigation: {
            prevEl: ".swiper-button-prev",
            nextEl: ".swiper-button-next",
          },

          // Responsive breakpoints
          breakpoints: {
            // when window width is >= 992px (desktop)
            992: {
              slidesPerView: 3,
              spaceBetween: 10,
            },
            // when window width is >= 768px and < 992px (tablet)
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            // when window width is < 768px (mobile)
            0: {
              slidesPerView: 1,
              spaceBetween: 5,
            },
          },
        });
      });
    </script>
  </body>

  <!-- Mirrored from wwsthemes.com/themes/medwise/v2.0/index-infertility.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 07:04:35 GMT -->
</html>
