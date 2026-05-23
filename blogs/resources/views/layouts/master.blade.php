<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content=@yield('description') />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link rel="canonical" href="@yield('canonical', url()->current())" />


    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" /> --}}
    <link rel="icon" href="{{ asset('assets/images/stethoscope-solid-full.svg') }}" type="image/x-icon" />

    <!-- -----font awesome---- -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/blog_style.css') }}" rel="stylesheet" />
    <!-- boostrap -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- Bootstrap Framework Version 4.5.3 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />

    <!-- Ion Icons Version 5.1.0 -->
    <link href="{{ asset('assets/css/ionicons.css') }}" type="text/css" rel="stylesheet" />

    <!-- Medical Icons -->
    <link href="{{ asset('assets/css/medwise-icons.css') }}" type="text/css" rel="stylesheet" />

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/vendors.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.min.css') }}" type="text/css" rel="stylesheet" id="style" />
    <link href="{{ asset('assets/css/components.min.css') }}" type="text/css" rel="stylesheet" id="components" />

    <!-- Animation css -->
    <link href="{{ asset('assets/css/animate.css') }}" type="text/css" rel="stylesheet" />

    <!-- responsive css -->
    <link href="{{ asset('assets/css/responsive.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/new-contact-form.css') }}" type="text/css" rel="stylesheet" />

    <!-- slick css -->
    <link href="{{ asset('assets/css/slick.css') }}" type="text/css" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/css/style.min.css') }}" type="text/css" rel="stylesheet" --}}
    {{-- <!-- image-gallery --> --}}
    <link href="{{ asset('assets/css/image-gallery.css') }}" rel="stylesheet" type="text/css" />

    <!-- owl carousal image gallery -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- link for dots/arrow owl carousal -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&amp;family=Manrope:wght@300;400;600;800&amp;family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    @yield('extracss')

    <style>

    </style>
</head>

<body>
    <!--<div class="loader-backdrop">-->
        <!-- Loader -->
    <!--    <div class="loader">-->
    <!--        <i class="fa-solid fa-stethoscope"></i>-->
    <!--    </div>-->
    <!--</div>-->
    
<header class="header-1">
  <!-- Header -->
  <!-- <div class="topbar">
    Topbar
    <div class="container-lg">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div class="topbar-items">
            <ul class="topbar-social d-none d-lg-inline-flex">
              <li>
                <a href="https://www.facebook.com/pearlfertilityanddiagnostics/"><i class="ion-logo-facebook"></i></a>
              </li>
             
              <li>
                <a href="https://www.youtube.com/@pearlfertilityandivf"><i class="ion-logo-youtube"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/pearlfertilityandivf/"><i class="ion-logo-instagram"></i></a>
              </li>
            </ul>
            <ul class="widgets">
              <li class="region-widget d-none d-lg-inline-flex">
                <i class="ion-earth"></i>India, Mumbai
              </li>
              <li class="email-widget d-none d-lg-inline-flex">
                <i class="ion-mail-outline"></i> <a href="mailto:pearlfertilitynivf@gmail.com">pearlfertilitynivf@gmail.com
                </a>

              </li>
              <li class="emergency-widget">
                <h4 class="emergency">
                  Emergency Number
                  <span class="sub-text">Emergency</span>
                  <span class="number"><a href="tel:+919022920663" style=" color: black;">+919022920663</a></span><br />
                </h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <nav class="navbar navbar-expand-lg sticky-nav">
    <!-- Navigation Bar -->
    <div class="container">

      <a class="navbar-brand" href="https://pearlfertilityandivf.com/">
        <img src="https://pearlfertilityandivf.com/_images/pearl-logo.png" alt="" class="logo" />
        <!-- Replace with your Logo -->
      </a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon">
          <!-- Mobile Menu Toggle -->
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </span>
      </button>

      <div class="navbar-collapse collapse" id="main-navigation">
        <!-- Main Menu -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="https://pearlfertilityandivf.com">Home</a>

          </li>
          <li class="nav-item">
            <a href="about-us">About Us</a>

          </li>

          <li class="nav-item has-menu">
            <a href="#">Facilities</a>
            <div class="mega-menu">
              <!-- Mega Menu -->
              <div class="row">
                <div class="col-lg-3">
                  <ul class="menu-items">
                    <!-- <li class="menu-heading">IVF Center in Mumbai</li> -->

                    <li class="menu-heading">IVF TREATMENTS</li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/best-ivf-center-in-mumbai">IVF Center In Mumbai</a>
                    </li>
                    <li>
                    <a href="https://pearlfertilityandivf.com/ivf-cost-in-mumbai">IVF Cost in Mumbai</a>
                    </li>
                    <li>
                    <a href="https://pearlfertilityandivf.com/iui-treatment-in-mumbai">IUI Treatment In Mumbai</a>
                    </li>
                    <li>
                    <a href="https://pearlfertilityandivf.com/imsi-treatment-in-mumbai">IMSI Treatment In Mumbai</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/icsi-treatment-for-infertility">ICSI Treatment For Infertility</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/fertility-evaluation">Fertility Evaluation</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/infertility-work-up">Infertility Work Up</a>
                    </li>
                    <li><a href="https://pearlfertilityandivf.com/blastocyst">Blastocyst Transfer</a></li>

                    <li class="hr"></li>
                    
                    <!-- ----------HR--------- -->
                    <!-- <li class="hr"></li>
                    <li class="menu-heading">IVF Center In Mumbai</li>
                    <li>
                      <a href="2d-echo-ecg-usg">2D- ECHO, ECG, USG</a>
                    </li> -->
                    

                </div>
                <div class="col-lg-3">
                  <ul class="menu-items">
                    <!-- <li class="menu-heading">Features</li> -->
                    <li class="menu-heading">GYNEC SERVICES</li>

                    <li>
                      <a href="https://pearlfertilityandivf.com/gynecologist-obstetrics-doctors-in-mumbai">Best Gynecologist In Mumbai</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/best-lady-gynecologist-in-mumbai">Best Lady Gynecologist In Mumbai</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/menopause-clinic">Menopause Clinic</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/contraception-counseling">Contraception counseling</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/pcos-treatment-in-mumbai">PCOS Treatment In Mumbai</a>
                    </li>
                    <li class="hr"></li>

                  </ul>
                </div>
                <div class="col-lg-3">
                  <ul class="menu-items">
                    <!-- <li class="menu-heading">Careers</li> -->
                    <!-- <li><a href="reflexology">Reflexology</a></li> -->
                    <!-- ----------------HR------------ -->
                    <!-- <li class="hr"></li> -->

                    <li class="menu-heading">FREEZING SERVICES</li>

                    <li>
                      <a href="https://pearlfertilityandivf.com/oocyte">Oocyte Freezing</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/embryo-freezing">Embryo Freezing</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/semen-freezing">Semen Freezing</a>
                    </li>

                    <li class="hr"></li>


                    <li class="menu-heading">DONOR SERVICE</li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/donor-sperm">Donor Sperm</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/egg-donation">Egg Donation</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/donor-embryo">Donor Embryo</a>
                    </li>
                    <li class="hr"></li>

                    <!-- <li><a href="careers-list.html">Careers List</a></li>
                        <li class="hr"></li>
                        <li class="menu-heading">Components</li>
                        <li><a href="accordion.html">Accordion</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="carousels.html">Carousels</a></li>
                        <li><a href="lists.html">Lists</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="progress-bar.html">Progress Bars</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="typography.html">Typography</a></li> -->
                  </ul>
                </div>
                <div class="col-lg-3">
                  <ul class="menu-items">
                    <!-- <li class="menu-heading">Icons</li> -->
                    <li class="menu-heading">OTHER SERVICES</li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/automated-semen-analyser">Automated Semen Analyser</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/sonography">Comprehensive Sonography</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/laproscopy">Laparoscopy</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/cervical-cancer">Cervical Cancer Screening</a>
                    </li>
                    <li>
                      <a href="https://pearlfertilityandivf.com/hysteroscopy">Hysteroscopy</a>
                    </li>
                    <li class="hr"></li>
                    <!-- <li><a href="icon-boxes.html">Icon Boxes</a></li>
                        <li><a href="medical-icons.html">Medical Icons</a></li>
                        <li><a href="social-media.html">Social Icons</a></li>
                        <li class="hr"></li>
                        <li class="menu-heading">Miscellaneous</li>
                        <li><a href="footer-dark.html">Footer Dark</a></li>
                        <li><a href="footer-light.html">Footer Light</a></li>
                        <li><a href="policies.html">Policies</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="404.html">Not Found</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="doctor">OUR DOCTORS</a>

          </li>
          <!-- <li class="nav-item has-menu">
                        <a href="#">Blog</a>
                        Sub Menu
                        <div class="sub-menu">
                            <ul class="menu-items">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="widgets.html">Sidebar Widgets</a></li>
                            </ul>
                        </div>
                    </li> -->
          <li class="nav-item">
            <a href="https://pearlfertilityandivf.com/blogs/">Blog</a>

          </li>
          <li class="nav-item">
            <a href="faqs">FAQ</a>
          <li class="nav-item">
            <a href="contacts">Contact</a>
            <!-- <div class="sub-menu"> -->
            <!-- Sub Menu -->
            <!-- <ul class="menu-items">
                                <li><a href="contact-1.html">Contact Style 1</a></li>
                                <li><a href="contact-2.html">Contact Style 2</a></li>
                                <li><a href="contact-3.html">Contact Style 3</a></li>
                                <li><a href="quick-contact.html">Quick Contact</a></li>
                            </ul> -->
      </div>
      </li>
      </ul>
    </div>
    </div>
  </nav>
</header>
    <main>
        @yield('content')
    </main>
    
    <footer class="footer-2">
    <!-- Footer Style 2 -->
    <div class="footer-pri">
        <!-- Primary Footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget widget-about">
                        <!-- Widget -->
                        <a href="index.php">
                            <img src="_images/pearl-logo.png " class="logo-footer" alt="" />
                        </a>
                        <p class="mt-20 footer-text">
                            A wonderful serenity has taken possession of my entire soul,
                            like these sweet mornings of spring which I enjoy with my
                            whole heart.
                        </p>
                        <hr class="mt-30 mb-20" />
                        <h5 class="heading font-bold">Reach Out</h5>
                        <ul class="contact footer-text">
                            <!-- <li>
                    <i class="ion-location-outline"></i>
                    <div>
                      <strong>Medwise Hospital</strong>
                      <br />
                      4038 Liberty Avenue, California
                    </div>
                  </li> -->
                            <li><i class="fa-solid fa-phone"></i><a href="tel:+919022920663" style="color: #abb2ba;">+91 9022920663</a></li>
                            <li><i class="fa-solid fa-phone"></i><a href="tel:+91 8779580308" style="color: #abb2ba;">+91 8779580308</a></li>
                            <li><i class="fa-solid fa-envelope"></i><a href="mailto:pearlfertilitynivf@gmail.com" style="color: #abb2ba;"> pearlfertilitynivf@gmail.com </a></li>
                        </ul>
                        <!-- <hr class="mt-30 mb-30" /> -->

                    </div>
                </div>
                <div class="col-lg-4">
                    <hr class="mt-30 mb-30 d-lg-none" />
                    <div class="widget widget-links">
                        <!-- Widget -->
                        <h5 class="heading font-bold">Useful Links</h5>
                        <ul>
                            <li>
                                <a href="https://pearlfertilityandivf.com/best-ivf-center-in-mumbai.php">
                                    IVF Services</a>
                            </li>
                            <li>
                                <a href="https://pearlfertilityandivf.com/iui-treatment-in-mumbai.php">
                                    IUI Services</a>
                            </li>
                            <li><a href="https://pearlfertilityandivf.com/imsi-treatment-in-mumbai">
                                    IMSI Services</a></li>
                            <li><a href="https://pearlfertilityandivf.com/donor-embryo.php">Donor Embryo Service</a></li>
                            <li><a href="https://pearlfertilityandivf.com/pcos-treatment-in-mumbai.php">PCOS Treatment
                                </a></li>
                            <li><a href="https://pearlfertilityandivf.com/icsi-treatment-for-infertility.php">ICSI Treatment</a></li>
                            <li><a href="https://pearlfertilityandivf.com/best-lady-gynecologist-in-mumbai.php">
                                    Best Lady Gynecologist
                                </a></li>
                            <li><a href="https://pearlfertilityandivf.com/doctor.php"> Our Doctor</a></li>

                        </ul>
                    </div>
                    <hr class="mt-30 mb-30" />
                    <div class="widget widget-twitter">
                        <h5 class="heading font-bold mb-20">Social Connect</h5>
                        <ul class="social social-round social-2x">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/pearlfertilityanddiagnostics/"><i class="ion-logo-facebook"></i></a>
                            </li>
                            
                            <!-- <li>
                                <a class="twitter" href="#"><i class="ion-logo-twitter"></i></a>
                            </li>
                            <li>
                                <a class="google" href="#"><i class="ion-logo-google"></i></a>
                            </li> -->
                            <li>
                                <a class="youtube" href="https://www.youtube.com/@pearlfertilityandivf"><i class="ion-logo-youtube"></i></a>
                            </li>
                            <li>
                                <a class="youtube" href="https://twitter.com/i/flow/login?redirect_after_login=%2Ffertility_pearl"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>

                            
                            <li>
                                <a class="facebook" href="https://www.instagram.com/pearlfertilityandivf/"><i class="ion-logo-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- Widget -->
                        <!-- <h5 class="heading font-bold">Latest Tweet</h5>
                <div class="tweets">
                  <ul class="carousel-items">
                    <li class="tweet-item">
                      <p>
                        How to tell if the hand sanitizer you’re buying is safe
                        and actually works? <a href="#">#askDoctor</a>
                      </p>
                    </li>
                    <li class="tweet-item">
                      <p>
                        Screen time doesn’t hurt kids’ social skills, says
                        harvard university
                        <a href="#">#healthcare #dailyTips</a>
                      </p>
                    </li>
                    <li class="tweet-item">
                      <p>
                        Can clothes and shoes track infection into your house?
                        What to Know <a href="#">Read blog here</a>
                      </p>
                    </li>
                  </ul>
                </div>
                <a href="#" class="btn btn-outline-light curved btn-sm mt-10"
                  >Follow Us</a
                > -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <hr class="mt-30 mb-30 d-lg-none" />
                    <div class="widget widget-timings">
                        <!-- Widget -->
                        <h5 class="heading font-bold">Hospital Timings</h5>
                        <table class="table table-bordered footer-text">
                            <tr>
                                <td>Mon - Sat</td>
                                <td>8:00 am to 9:00 pm</td>
                            </tr>
                            <!-- <tr>
                                <td>Saturday</td>
                                <td>10:00 am to 1:00 pm</td>
                            </tr> -->
                            <tr>
                                <td>Sunday</td>
                                <td>10:00 am to 12:00 pm</td>

                            </tr>
                        </table>
                    </div>
                    <hr class="mt-30 mb-30" />
                    <div class="widget widget-subscribe">
                        <!-- Widget -->
                        <h5 class="heading font-bold">Subscribe Newsletter</h5>
                        <p class="footer-text">
                            Subscribe to our newsletter for daily health tips
                        </p>
                        <form class="search" action="email.php" method="post">
                            <!-- Search Form -->
                            <div class="input-group">
                                <input type="email" class="form-control curved style-1" name="email" placeholder="Your Email Id" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary curved" type="submit">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <hr class="mt-30 mb-30" /> -->
                    <!-- <div class="widget widget-pay"> -->
                    <!-- Widget -->
                    <!-- <h5 class="heading font-bold">Payment Accepted</h5>
                  <ul class="payment-list">
                    <li class="item">
                      <img src="images/payment-type-1.png" alt="" />
                    </li>
                    <li class="item">
                      <img src="images/payment-type-2.png" alt="" />
                    </li>
                    <li class="item">
                      <img src="images/payment-type-3.png" alt="" />
                    </li>
                    <li class="item">
                      <img src="images/payment-type-4.png" alt="" />
                    </li>
                    <li class="item">
                      <img src="images/payment-type-5.png" alt="" />
                    </li>
                  </ul>
                </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-sec">
        <!-- Secondary Footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-10 mb-10">
                    <ul class="misc-links">
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Usage Rights</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mt-10 mb-10 text-right">
                    <p class="mb-0 footer-text text-lg-right text-center">
                        &copy; 2025 All Rights Reserved.
                        <a href="http://wwsthemes.com/" target="_blank" class="font-semi-bold"> Fertility & IVF center in Mumbai</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="whatsapp-btn-container" style="
display: flex;
align-items: center;
justify-content: center;
border-radius: 25px;
position: fixed;
bottom: 70px;
background: #25d366;
right: 2.1875rem;
width: 50px;
height: 50px;
z-index:99;">
    <div id="whatsapp-btn" style="margin-top:5px;">
        <a class="whatsapp" href="https://wa.me/+919022920663">
            <i class="ion-logo-whatsapp" style="color:white; font-size:25px"></i>
        </a>
    </div>
</div>



    <!-- JQuery Version 3.6.0 -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- jquery version 3.4.1 -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>

    <!-- new slick min.js  -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- new jquery migrate  -->
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>

    <!-- new way points js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

    <!-- new counter js -->
    <script src="{{ asset('assets/js/jQuery.rcounter.js') }}"></script>

    <!-- new  jquery nice-select-->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- new main -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Bootstrap Version 4.5.3 -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Appear JS -->
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>

    <!--Pretty Photo Version 3.1.6-->
    <script src="{{ asset('assets/js/jquery.prettyPhoto.min.js') }}"></script>

    <!-- Count To JS -->
    <script src="{{ asset('assets/js/jquery.countTo.min.js') }}"></script>

    <!-- Slick Slider Version 1.8.1 -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- jQuery UI (Date Picker) -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.min.js') }}"></script>

    <!-- owl carousal image gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

    <!-- WOW Aimation  -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>


    @yield('scripts')
</body>

</html>
