<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wwsthemes.com/themes/medwise/v2.0/book-appointment-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 07:05:35 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Book Appointment - Pearl Fertility and IVF
    </title>

    <!-- Favicon -->
    <link rel="icon" href="_images/favicon.png" type="image/x-icon" />

     <!--  adding tags.php by kadir -->
     <?php include "includes/tags.php" ?>

    <!-- Bootstrap Framework Version 4.5.3 -->
    <link href="https://pearlfertilityandivf.com/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- Ion Icons Version 5.1.0 -->
    <link href="https://pearlfertilityandivf.com/css/ionicons.css" type="text/css" rel="stylesheet">
    <link href="css/ionicons.css" type="text/css" rel="stylesheet">

    <!-- Medical Icons -->
    <link href="https://pearlfertilityandivf.com/css/medwise-icons.css" type="text/css" rel="stylesheet">
    <link href="css/medwise-icons.css" type="text/css" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="https://pearlfertilityandivf.com/css/vendors.min.css" type="text/css" rel="stylesheet">
    <link href="css/vendors.min.css" type="text/css" rel="stylesheet">
    <link href="https://pearlfertilityandivf.com/css/style.min.css" type="text/css" rel="stylesheet" id="style">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" id="style">
    <link href="https://pearlfertilityandivf.com/css/components.min.css" type="text/css" rel="stylesheet" id="components">
    <link href="css/components.min.css" type="text/css" rel="stylesheet" id="components">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&amp;family=Manrope:wght@300;400;600;800&amp;family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet">

    <!-- Animation css -->
    <link href="https://pearlfertilityandivf.com/css/animate.css" type="text/css" rel="stylesheet">
    <link href="css/animate.css" type="text/css" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79657248-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-79657248-2');
    </script>
</head>

<body>

    <!-- <div class="loader-backdrop">
        <div class="loader">
            <img src="_images/favicon.png" width="100px ">
        </div>
    </div> -->

    <!-- --------footer------ -->
    <?php include './includes/header.php'; ?>

    <div class="page-header lazy-background-unique"><!-- Page Header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="heading bold">Book Appointment</h1>
                </div>
            </div>
        </div>
        <!-- <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="breadcrumb">
                            <li><a href="index-hospital-classic.html">Home</a></li>
                            <li class="active">Book Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="container mt-80 mb-60">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="heading font-bold mb-20">Online Appointment Form</h3>
                <p class="mb-30">The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left.</p>
                <form action="email.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="first_name" placeholder="Your First Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="last_name" placeholder="Your Last Name" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="address" placeholder="Full Address">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input class="form-control" type="text" name="city" placeholder="City">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="phone" placeholder="Your Phone Number" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Your Email ID" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control date-select" type="text" name="dob" placeholder="Date Of Birth">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select class="form-control" name="slot">
                                <option value="">Select Slot</option>
                                <option>9:00 a.m. - 12:00 p.m.</option>
                                <option>12:00 p.m. - 4:00 p.m.</option>
                                <option>4:00 p.m. - 8:00 p.m.</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="message" placeholder="Special Message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        <i class="ion-paper-plane-outline icon-left"></i> Book Appointment
                    </button>
                </div>
            </form>

            </div>
            <div class="col-lg-4 mt-40 mt-lg-0">
                <aside class="sidebar pl-lg-20">
                    <div class="widget widget-text pt-0">
                        <h5 class="heading d-flex align-items-center"><i class="ion-help-circle-outline icon-left"></i>Need Help?</h5>
                        <p class="normal">In case of problems in filling out the form, please do let us know.</p>
                        <p class="h6 d-flex align-items-top mb-0"><i class="ion-mail-outline icon-left text-primary"></i><a href="mailto:pearlfertilitynivf@gmail.com" style="color: black;">pearlfertilitynivf@gmail.com
                            </a></p>
                        <p class="h6 d-flex align-items-center mb-0"><i class="ion-call-outline icon-left text-primary"></i><a href="tel:+919022920663" style=" color: black;">+919022920663</a></p>
                    </div>
                    <div class="widget widget-departments">
                        <h5 class="heading d-flex align-items-center"><i class="ion-share-social-outline icon-left"></i>Departments</h5>
                        <ul class="mb-0">
                            <li>
                                <a href="best-ivf-center-in-mumbai.php">
                                    <div class="dep-icon">
                                        <i class="mw-stretcher  "></i>
                                    </div>
                                    <h6 class="mb-0 dep-name">IVF Services</h6>
                                </a>
                            </li>
                            <li>
                                <a href="iui-treatment-in-mumbai.php">
                                    <div class="dep-icon">
                                        <i class="mw-tablets"></i>
                                    </div>
                                    <h6 class="mb-0 dep-name">IUI Services</h6>
                                </a>
                            </li>
                            <li>
                                <a href="icsi-treatment-for-infertility.php">
                                    <div class="dep-icon">
                                        <i class="mw-pulse"></i>
                                    </div>
                                    <h6 class="mb-0 dep-name">ICSI service</h6>
                                </a>
                            </li>
                            <li>
                                <a href="donor-sperm.php">
                                    <div class="dep-icon">
                                        <i class="mw-tube-baby"></i>
                                    </div>
                                    <h6 class="mb-0 dep-name">Donor service</h6>
                                </a>
                            </li>
                            <li>
                                <a href="best-lady-gynecologist-in-mumbai.php" class="pb-0">
                                    <div class="dep-icon">
                                        <i class="mw-uterus"></i>
                                    </div>
                                    <h6 class="mb-0 dep-name">Infertility Work UP</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-social">
                        <h5 class="heading d-flex align-items-center"><i class="ion-share-social-outline icon-left"></i>We're Social</h5>
                        <p class="mb-20">Care for your loved ones by sharing our blogs with your friends & family</p>
                        <ul class="social social-round social-2x">
                            <li><a class="facebook" href="#"><i class="ion-logo-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="ion-logo-twitter"></i></a></li>
                            <li><a class="skype" href="#"><i class="ion-logo-skype"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="ion-logo-pinterest"></i></a></li>
                            <li><a class="instagram" href="#"><i class="ion-logo-instagram"></i></a></li>
                            <li><a class="youtube" href="#"><i class="ion-logo-youtube"></i></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include './includes/footer.php'; ?>

    <div id="back"><i class="ion-chevron-up-sharp"></i></div>

    <!-- JQuery Version 3.6.0 -->
    <script src="https://pearlfertilityandivf.com/js/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Version 4.5.3 -->
    <script src="https://pearlfertilityandivf.com/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Slick Slider Version 1.8.1 -->
    <script src="https://pearlfertilityandivf.com/js/slick.min.js"></script>
    <script src="js/slick.min.js"></script>

    <!-- jQuery UI (Date Picker) -->
    <script src="https://pearlfertilityandivf.com/js/jquery-ui.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <!-- Custom JS -->
    <script src="https://pearlfertilityandivf.com/js/script.min.js"></script>
    <script src="js/script.min.js"></script>

</body>


<!-- Mirrored from wwsthemes.com/themes/medwise/v2.0/book-appointment-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2024 07:05:35 GMT -->

</html>