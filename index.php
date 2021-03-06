<?php
	if (isset($_GET['utm_source'])){
	    $utm_source=$_GET['utm_source'];
	    $utm_medium=$_GET['utm_medium'];
	    $utm_content=$_GET['utm_content'];
	}
?>
<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Passcode Bull Run</title>
    <link rel="icon" type="image/png" href="assets/images/poplogo.png" />
    <meta name="description" content="">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B38BESHXWM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-B38BESHXWM');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N47CDC5');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N47CDC5"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional bootstrap theme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet"
        href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
        integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/aos.css">
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-default" id="hide-menu">
            <div class="br__menu-container pd0-m">
                <div class="col-md-2 col-sm-2 hidden-xs">
                    <div class="br__navbar-header">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" alt="Brigade Utopia">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 pd0-m">
                    <div class="br__navbar-header visible-xs">
                        <button type="button" class="navbar-toggle collapsed open-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" alt="" />
                            <a class="navbar-brand" href="https://veenadevelopers.com/" target="_blank">
                                <img class="br__nav-logo" src="assets/images/veena-logo.svg"
                                    style="width:50px;margin-top: 4px;">
                            </a> <a class="navbar-brand" href="https://www.bhoomi-group.com/" target="_blank">
                                <img class="br__nav-logo" src="assets/images/Bhoomi-Logo.png"
                                    style="width:50px;margin-top: 4px;">
                            </a>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#thegateway" class="m-link">Overview</a></li>
                            <li><a href="#configuration" class="m-link">Configuration</a></li>
                            <li><a href="#amenities" class="m-link">Amenities</a></li>
                            <li><a href="#gallery" class="m-link">Gallery</a></li>
                            <li><a href="#location" class="m-link">Location</a></li>
                            <li><a href="#aboutus" class="m-link">About Us</a></li>
                            <li><a href="#contactus" class="m-link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="hidden-xs">
                    <div class="br__navbar-header br__right__logo">
                        <a class="navbar-brand" href="https://veenadevelopers.com/" target="_blank">
                            <img class="br__nav-logo" src="assets/images/veena-logo.svg">
                        </a> <a class="navbar-brand" href="https://www.bhoomi-group.com/" target="_blank">
                            <img class="br__nav-logo" src="assets/images/Bhoomi-Logo.png">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="brNav" class="menu-overlay">
        <a href="javascript:void(0)" class="closebtn close-menu">&times;</a>
        <div class="menu-overlay-content">
            <a class="close-menu m-link" href="#thegateway">Overview</a>
            <a class="close-menu m-link" href="#configuration">Configuration</a>
            <a class="close-menu m-link" href="#amenities">Amenities</a>
            <a class="close-menu m-link" href="#gallery">Gallery</a>
            <a class="close-menu m-link" href="#location">Location</a>
            <a class="close-menu m-link" href="#aboutus">About Us</a>
            <a class="close-menu m-link" href="#contactus">Contact Us</a>
        </div>
    </div>
    <!-- <div class="arrow-up logo-wrapper">
        <a href="#header" class="m-link visible-xs new-int">
            <img data-event-category="header" data-event-action="click" data-event-name="logo"
                src="assets/images/up-arrow.png" class="img-responsive" />
        </a>
    </div> -->
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
        </ol>
        <!-- <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/images/slider/slide-1.jpg" alt="" class="hidden-xs" />
                <img src="assets/images/slider/mobile-1.jpg" alt="" class="visible-xs" />
            </div>
            <div class="item">
                <img src="assets/images/slider/slide-3.jpg" alt="" class="hidden-xs" />
                <img src="assets/images/slider/mobile-3.jpg" alt="" class="visible-xs" />
            </div>
            <div class="item">
                <img src="assets/images/slider/slide-4.jpg" alt="" class="hidden-xs" />
                <img src="assets/images/slider/mobile-4.jpg" alt="" class="visible-xs" />
            </div>
        </div> -->
        <div class="carousel-inner" role="listbox">
            <!-- <div class="item active">
                <img src="assets/images/slider/pre-teaser-1.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/pre-teaser-2.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/pre-teaser-3.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/teaser-1.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/teaser-2.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/teaser-3.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/teaser-4.jpg" alt="" />
            </div> -->
            
            <div class="item active">
                <img src="assets/images/slider/pre-teaser-4.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/pre-teaser-5.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/pre-teaser-6.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/slider/pre-teaser-7.jpg" alt="" />
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <img src="assets/images/left.png" alt="" />
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <img src="assets/images/right.png" alt="" />
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section id="thegateway" class="wrap-section">
        <div class="row mr0 overview__cover">
            <div class="col-md-6 col-xs-12 pd0" data-aos="fade-top" data-aos-delay="400" data-aos-duration="1000">
                <div class="cover-img">
                    <img src="assets/images/intro.jpg">
                </div>
            </div>
            <div class="col-md-6 col-xs-12 pd0" data-aos="fade-top" data-aos-delay="400" data-aos-duration="1000">
                <div class="cover-content" style="background: #eee;">
                    <div class="cover-text black-color">
                        <h2>
                            Overview
                        </h2>
                        <div class="headline"></div>
                        <div style="width: 100%; height: 40px;"></div>
                        <p>
                            Passcode Bull Run is Mumbai Suburban???s most prestigious and luxurious entrepreneurial
                            destination, providing an edge to
                            your business, in today's highly competitive world. It comes with top-of-the-line amenities
                            enhancing quality of life,
                            along with breathtaking, evergreen vistas, providing a stress-free environment, in one of
                            the most sought-after
                            locations.
                        </p>
                        <a href="javascript:void (0);" class="btn btn-primary broucher-click getBrochureBtn onlyMobile">
                            <i class="fa fa-download f-icon" aria-hidden="true"></i>
                            Get Brochure
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="location2">
        <div class="wrap-sec">
            <div class="container">
                <h2 class="sec-head" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    Opportunity of a Bullish Investment</h2>
                <div style="width: 100%;height: 20px;"></div>
                <div class="row br__icon-wrapper">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/high-rental.png" alt="" />
                                </figure>
                                <p>Higher rental yields</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/capital-appreciation.png" alt="" />
                                </figure>
                                <p>Impressive capital appreciation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/positive-demand.png" alt="" />
                                </figure>
                                <p>Positive Demand</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/vacancy-rate.png" alt="" />
                                </figure>
                                <p>Low vacancy rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/longer-Lease-Period.png" alt="" />
                                </figure>
                                <p>Longer Lease Period</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/growing-economy.png" alt="" />
                                </figure>
                                <p>Growing economy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/cash-flow.png" alt="" />
                                </figure>
                                <p>Continuous cash flow</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/great-ROI.png" alt="" />
                                </figure>
                                <p> Great ROI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="configuration">
        <div class="wrap-sec fullheight overlay">
            <div class="container">
                <div class="cover-text1 white-color">
                    <h2>
                        Project Configurations
                    </h2>
                    <div class="headline"></div>
                </div>
                <div style="width: 100%;height: 50px;"></div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0" data-aos="fade-up"
                        data-aos-delay="600" data-aos-duration="1000">
                        <table class="table config-table">
                            <thead>
                                <tr>
                                    <th>Configurations</th>
                                    <th>Carpet Area (SQ.FT.)</th>
                                    <th>Know More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Office </td>
                                    <td>442</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office</td>
                                    <td>470</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office</td>
                                    <td>484</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office</td>
                                    <td>928</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office</td>
                                    <td>964</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office</td>
                                    <td>1006</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office</td>
                                    <td>1179</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Office</td>
                                    <td>1229</td>
                                    <td>
                                        <a href="javascript:void (0);" class="price-click">
                                            Click Here
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="amenities">
        <div class="wrap-sec overlay fullheight">
            <div class="container-fluid">
                <div class="cover-text1 white-color">
                    <h2>
                        Amenities
                    </h2>
                    <div class="headline"></div>

                    <h3>AN OFFICE SPACE THAT'S MORE THAN JUST A HEALTHY WORKING ENVIRONMENT</h3>
                </div>
                <div style="width: 100%;height: 50px;"></div>
                <div class="row br__icon-wrapper">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/wifi.png" alt="" />
                                </figure>
                                <p>Fully Wi-Fi enabled building</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/lift.png" alt="" />
                                </figure>
                                <p>Dedicated Lift for Directors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/rooftop.png" alt="" />
                                </figure>
                                <p>Luxury rooftop lounge</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/vehicle-charging.png" alt="" />
                                </figure>
                                <p> Electric vehicle charging stations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/parking.png" alt="" />
                                </figure>
                                <p>Facility Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/intercom.png" alt="" />
                                </figure>
                                <p>Intercom Facility</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top"
                            data-aos-delay="200" data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/self-sustain-offices.png" alt="" />
                                </figure>
                                <p>Self Sustain Offices</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top" data-aos-delay="200"
                        data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/mobile-app.png" alt="" />
                                </figure>
                                <p>Mobile app for easy access to faculties management and allied services within the development - such as F&B, etc</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top" data-aos-delay="200"
                        data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/parking.png" alt="" />
                                </figure>
                                <p>Dedicated faculties management team and housekeeping services for common area as well as private offices</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top" data-aos-delay="200"
                        data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/intercom.png" alt="" />
                                </figure>
                                <p>Intercom on each floor with support line to the security control room, ground floor and faculties management pantry</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top" data-aos-delay="200"
                        data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/water.png" alt="" />
                                </figure>
                                <p>STP, water conservation and rainwater harvesting, recycling bins and waste management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top" data-aos-delay="200"
                        data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/customized.png" alt="" />
                                </figure>
                                <p>Customised interior design solutions by project architect available at an additional cost</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="br__iconwrap border-effect wow aos-init aos-animate" data-aos="fade-top" data-aos-delay="200"
                        data-aos-duration="1000">
                            <div class="bo">
                                <figure>
                                    <img src="assets/images/icons/amenties/washroom.png" alt="" />
                                </figure>
                                <p>Washrooms adjoining the entrance lobby with international-standard finishes</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="wrap-sec grey-bg">
            <div class="container">
                <h2 class="sec-head" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    Gallery</h2>
                <div class="headline"></div>
                <div style="width: 100%;height: 20px;"></div>
                <div class="row mr0">
                    <div class="tab-rwap">
                        <ul class="nav nav-tabs project-tab" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#exterior" aria-controls="settings" role="tab" data-toggle="tab"
                                    aria-expanded="false">Exterior
                                </a>
                            </li>
                            <!-- <li role="presentation" class="">
                                <a href="#interior" aria-controls="profile" role="tab" data-toggle="tab"
                                    aria-expanded="true">Interior
                                </a>
                            </li> -->
                            <li role="presentation" class="">
                                <a href="#floorPlan" aria-controls="profile" role="tab" data-toggle="tab"
                                    aria-expanded="true">Floor Plans
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="exterior">
                                <div class="tab-content-wrap">
                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/cam-1.jpg" data-fancybox="exterior">
                                            <img class="back-img" src="assets/images/gallery/exterior/cam-1.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/cam-5.jpg" data-fancybox="exterior">
                                            <img class="back-img" src="assets/images/gallery/exterior/cam-5.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/cam-7.jpg" data-fancybox="exterior">
                                            <img class="back-img" src="assets/images/gallery/exterior/cam-7.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/cam-10.jpg" data-fancybox="exterior">
                                            <img class="back-img" src="assets/images/gallery/exterior/cam-10.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/cam-15.jpg" data-fancybox="exterior">
                                            <img class="back-img" src="assets/images/gallery/exterior/cam-15.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/cam-16.jpg" data-fancybox="exterior">
                                            <img class="back-img" src="assets/images/gallery/exterior/cam-16.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/cam-24.jpg" data-fancybox="exterior">
                                            <img class="back-img" src="assets/images/gallery/exterior/cam-24.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/exterior/Khakkhar_Lounge_Final_jpeg.jpg"
                                            data-fancybox="exterior">

                                            <img class="back-img"
                                                src="assets/images/gallery/exterior/Khakkhar_Lounge_Final_jpeg.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="interior">
                                <div class="tab-content-wrap">

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/Interior/cam-1.jpg" data-fancybox="interior">

                                            <img class="back-img" src="assets/images/gallery/Interior/cam-1.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/Interior/cam-16.jpg" data-fancybox="interior">

                                            <img class="back-img" src="assets/images/gallery/Interior/cam-16.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/Interior/cam-5.jpg" data-fancybox="interior">

                                            <img class="back-img" src="assets/images/gallery/Interior/cam-5.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/Interior/cam-15.jpg" data-fancybox="interior">

                                            <img class="back-img" src="assets/images/gallery/Interior/cam-15.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="floorPlan">
                                <!-- <div class="tab-content-wrap">
                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/floor/13-floor-plan.jpg"
                                            data-fancybox="floorPlan">

                                            <img class="back-img"
                                                src="assets/images/gallery/floor/13-floor-plan.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/floor/6-floor-plan.jpg"
                                            data-fancybox="floorPlan">

                                            <img class="back-img"
                                                src="assets/images/gallery/floor/6-floor-plan.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/floor/7-12-floor-plan.jpg"
                                            data-fancybox="floorPlan">

                                            <img class="back-img"
                                                src="assets/images/gallery/floor/7-12-floor-plan.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="galleryThumb ami-img-wrap">
                                        <a href="assets/images/gallery/floor/ground-floor-plan.jpg"
                                            data-fancybox="floorPlan">

                                            <img class="back-img"
                                                src="assets/images/gallery/floor/ground-floor-plan.jpg">
                                            <div class="img-overlay">
                                                <div class="text-wrap">
                                                    <div class="secondcorner">
                                                        <div class="gall-icon">
                                                            <i class="fas fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div> -->

                                
                                <div class="tab-content-wrap">
                                    <div class="galleryThumb ami-img-wrap galleryModelBtn">
                                        <img class="back-img" src="assets/images/gallery/floor/13-floor-plan.jpg">
                                    </div>
                                    <div class="galleryThumb ami-img-wrap galleryModelBtn">
                                        <img class="back-img" src="assets/images/gallery/floor/6-floor-plan.jpg">
                                    </div>
                                    <div class="galleryThumb ami-img-wrap galleryModelBtn">
                                        <img class="back-img" src="assets/images/gallery/floor/7-12-floor-plan.jpg">
                                    </div>
                                    <div class="galleryThumb ami-img-wrap galleryModelBtn">
                                        <img class="back-img" src="assets/images/gallery/floor/ground-floor-plan.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="location">
        <div class="wrap-sec">
            <div class="container">
                <h2 class="sec-head" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">Location</h2>
                <div class="headline"></div>
                <div class="loc-subhead">
                    <!-- <h3>Chembur is best known for its multimodal connectivity, giving easy access to
                        business hubs and life's imperative avenues.</h3> -->
                </div>
                <div style="width: 100%;height: 20px;"></div>
                <div class="row mr0">
                    <div class="col-md-6">
                        <div class="contactThumbsSec">
                            <figure>
                                <img src="assets/images/icons/shopping.png" alt="" />
                            </figure>
                            <div>
                                <p><b>Shopping and Entertainment:</b></p>
                                <p>Inorbit Mall - 1.1 km</p>
                                <p>Infinity Mall - 1.1 km</p>
                                <p>Hypercity - 1.3 km</p>
                                <p>Cinemax PVR Cinemas - 1.4 km</p>
                            </div>
                        </div>
                        <div class="contactThumbsSec">
                            <figure>
                                <img src="assets/images/icons/networking.png" alt="" />
                            </figure>
                            <div>
                                <p><b>Networking & Recreation:</b></p>
                                <p>Goregaon Sports Club - 750 m</p>
                                <p>Sarovar Grand Hometel - 450 m</p>
                            </div>
                        </div>
                        <div class="contactThumbsSec">
                            <figure>
                                <img src="assets/images/icons/healthcare.png" alt="" />
                            </figure>
                            <div>
                                <p><b>Healthcare:</b></p>
                                <p>Diamond Hospital - 1.7 km</p>
                                <p>Evershine Nursing Home - 2.2 km</p>
                                <p>Zenith Multispeciality Hospital - 2.1 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ami-img-wrap mapWrap">
                            <a href="assets/images/map.jpg" data-fancybox="mapzoom">
                                <img class="back-img" src="assets/images/map.jpg">
                                <div class="img-overlay">
                                    <div class="text-wrap">
                                        <div class="secondcorner">
                                            <div class="gall-icon">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row mr0">
                            <div class="col-md-6">
                                <div class="btnWrap360">
                                     <a href="https://passcodebullrun.com/360-view"  target="_blank" class="btn btn-primary view">360 Degree View</a>
                                     <!-- <a href="#" class="btn btn-primary">360 Deg</a> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btnWrap360">
                                    <a href="#" class="btn btn-primary view getLocationBtn">Location Tour</a>
                                    <!-- <a href="#" class="btn btn-primary">360 Deg</a> -->
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="btnWrap360">
                            <a href="#" class="btn btn-primary getDirectionBtn">Get Directions</a>
                            <!-- <a href="#" class="btn btn-primary">360 Deg</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutusold" hidden>
        <div class="wrap-sec grey-bg">
            <div class="container">
                <h2 class="sec-head" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">About Us</h2>
                <div class="headline"></div>
                <div style="width: 100%;height: 10px;"></div>
                <div class="loc-subhead">
                    <!-- <h3>Our Legacy Of Commercial Spaces.</h3> -->
                </div>
                <div style="width: 100%;height: 20px;"></div>
                <div class="row mr0">
                    <div class="col-md-6 pd0-m" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <div class="builder-cover">
                            <div>
                                <img class="builder-logo" src="assets/images/veena-logo.svg">
                                <div>
                                   
                                    <div class="owl-carousel owl-theme view-carousel">
                                        <div class="item">
                                            <div class="boxes">
                                                <div class="box">
                                                    <!-- <div class="icon"><img src="assets/images/aminities/build.png" alt="" /> -->
                                                </div>
                                                <h2>5 Decades</h2>
                                                <p class="piece-count">Of Excellence</p>
                                            </div>
                                            <div class="box">
                                                <!-- <div class="icon"><img src="assets/images/aminities/family.png" alt="" /> -->
                                            </div>
                                            <h2>20,000+</h2>
                                            <p class="piece-count">Happy Families</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="boxes">
                                        <div class="box">
                                            <!-- <div class="icon"><img src="assets/images/aminities/rating.png" alt="" /> -->
                                        </div>
                                        <h2>150 MNC</h2>
                                        <p class="piece-count">Clients</p>
                                    </div>
                                    <div class="box">
                                        <!-- <div class="icon"><img src="assets/images/aminities/award.png" alt="" /> -->
                                    </div>
                                    <h2>40+ Awards</h2>
                                    <p class="piece-count">For Excellence In <br>Realty</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="boxes">
                                <div class="box">
                                    <!-- <div class="icon"><img src="assets/images/aminities/hook.png" alt="" /></div> -->
                                    <h2>4.21 million Sq.m</h2>
                                    <p class="piece-count">Developed, Ongoing & Future</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-6 pd0-m" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
            <div class="builder-cover">
                <div>
                    <img class="builder-logo" src="assets/images/Bhoomi-Logo.png">
                    <div>
                        <div class="owl-carousel owl-theme view-carousel">
                            <div class="item">
                                <div class="boxes">
                                    <div class="col-md-2 box">
                                        <!-- <div class="icon"><img src="assets/images/aminities/build.png" alt="" /> -->
                                    </div>
                                    <h2>122 Projects</h2>
                                    <p class="piece-count">Commercial And Residential</p>
                                </div>
                                <div class=" col-md-2  box">
                                    <!-- <div class="icon"><img src="assets/images/aminities/engineer.png" alt="" /> -->
                                </div>
                                <h2>28 Million Sq.ft</h2>
                                <p class="piece-count">Of Development Across India</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="boxes">
                            <div class=" col-md-2  box">
                                <!-- <div class="icon"><img src="assets/images/aminities/hook.png" alt="" /></div> -->

                                <h2>38 Million Sq.ft</h2>
                                <p class="piece-count">Of Development In Progress</p>

                            </div>
                            <div class=" col-md-2 box">
                                <!-- <div class="icon"><img src="assets/images/aminities/shop.png" alt="" /></div> -->
                                <h2>60% Commercial</h2>
                                <p class="piece-count">Development Which Will Be Completed Over The Next 4 Years</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section id="aboutus">
        <div class="wrap-sec aboutSec grey-bg">
            <div class="container">
                <h2 class="sec-head" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">About Us</h2>
                <div class="headline"></div>
                <div class="loc-subhead">
                    <!-- <h3>Our Legacy Of Commercial Spaces.</h3> -->
                </div>
                <div class="row mr0 wrap-sec-inner">
                    <div class="col-md-6 pd0-m" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                        <div class="builder-cover">
                            <div>
                                <img class="builder-logo" src="assets/images/veena-logo.svg">
                                <p>Founded in the year 1990, Veena Developers has become a name synonymous with honesty, integrity, transparency, and trust. With 31 years of experience, Veena Developers has come a long way in delivering projects spread across approximately 47,50,000 sq. ft into residential, commercial, and industrial developments. 5300+ happy customers and 30+ completed projects are a part of our success. </p>
                                <!-- <div class="row br__icon-wrapper">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">30+</b></p>
                                                            <p> years of experience</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">30+</b></p>
                                                            <p> Number of projects</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">5300+</b></p>
                                                            <p> Happy families</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">4.7M+ sq.ft.</b></p>
                                                            <p>Area Built</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pd0-m" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                        <div class="builder-cover">
                            <div>
                                <img class="builder-logo" src="assets/images/Bhoomi-Logo.png">
                                <p>Since its foundation in 1993, Bhoomi Group has been creating values in people???s lives by delivering happiness. With over 27 years of propelling experience in the construction industry, we have created our own benchmarks with the upgrading times in terms of creating the ideal blend of innovation and experience making us one of the leading builders today. </p>
                                <!-- <div class="row br__icon-wrapper">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">30+</b></p>
                                                            <p> years of experience</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">50+</b></p>
                                                            <p> projects delivered</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">12000+</b></p>
                                                            <p> happy families</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="br__iconwrap border-effect wow aos-init aos-animate"
                                                    data-aos="fade-top" data-aos-delay="200" data-aos-duration="1000">
                                                    <div class="bo">
                                                        <div>
                                                            <p><b class="colored">10 M+ sq.ft.</b></p>
                                                            <p>Area Built</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contactus">
        <div class="wrap-sec overlay contactusWrap">
            <div class="container-fluid">
                <div class="row contactusWrap_row">
                    <div class="col-md-6">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15073.675718937278!2d72.8356045!3d19.1768963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc26b33eb01023bff!2sPasscode%20Bull%20Run!5e0!3m2!1sen!2sin!4v1641844218355!5m2!1sen!2sin"
                         width="100%" height="355" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d50709.65114299404!2d72.81499347877423!3d19.150716885007938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7cc3b4b91af%3A0xc26b33eb01023bff!2sPasscode%20Bull%20Run!5e0!3m2!1sen!2sus!4v1642662653278!5m2!1sen!2sus"
                            width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-6 contactusWrap_form">
                        <h2 class="sec-head white">Contact Us</h2>
                        <div class="headline white"></div>
                        <form id="contact-form" action="" name="contact-form" method="POST">
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user form-ico" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name">
                                    <input type="hidden" name="source" value="Contact Form" id="source">
                                     <input type="hidden" name="utm_source" id="utm_source"  value="<?php echo $utm_source;?>">
                                      <input type="hidden" name="utm_content" id="utm_content" value="<?php echo $utm_content;?>">
                                       <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium;?>">
                                </div>
                                <label for="fname" class="error"></label>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                                </div>
                                <label for="mobile" class="error"></label>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <label for="email" class="error"></label>
                            </div>
   <div id="answer1" style="    color: green;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;display:none;" ></div>
                            <button type="submit" class="btn btn-default contact-btn">Submit</button>

                            <a href="tel:02268680073" class="fot-call">Call Now :&nbsp;02268680636</a>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row footerDetails">
                <img src="assets/images/veena-logo.svg" class="footerLogoLeft">
                <div class="rera-wrap">
                    <h2>Site Address:</h2>
                    <p>
                        Passcode Bull Run, Off Link Road, Behind Evershine Mall, Mindspace, Malad (W), Mumbai, 400064.
                    </p>
                    <h2>MahaRERA No. P51800032829</h2>
                    <p>
                        Details Available at https://maharera.mahaonline.gov.in
                    </p>
                </div>
                <img src="assets/images/Bhoomi-Logo.png" class="footerLogoRight">
                <!-- <ul class="partner">
                    <li>
                        <a href="https://veenadevelopers.com/" target="_blank">
                            <img src="assets/images/veena-logo.svg" class=""></a>
                    </li>
                    <li> <a href="https://www.bhoomi-group.com/" target="_blank">
                            <img src="assets/images/Bhoomi-Logo.png"></a></li>
                </ul> -->
            </div>
        </div>
    </footer>
    <div class="sec-disc">
        <div class="container">
            <p>
                <span>Disclaimer:</span>
                Passcode Bullrun is the marketing campaign name of 9, BusinessBay and had been registered via MahaRERA Registration No: P51800032829. Available on the website http://maharera.mahaonline.gov.in.
                The information provided included all pictures, visuals, perspective views of the building, and amenities are as per architectural drawings and the same shall be constructed subject to approvals of competent authorities and shall be in compliance with RERA Act and Rules and Regulations. Furniture, fixtures are shown in the pictures, and images of the office are for representation purposes only and actual offices will be the bare shell. *T&C apply.
            </p>
        </div>
    </div>
    <div class="col-lg-12 col-sm-12 col-xs-12 fixed-footer-cust hidden-md hidden-lg hidden-sm">
        <div class="container">
            <div class="col-lg-6 col-sm-6 col-xs-6 div-line pd0">
                <a href="tel:02268680636" class="fix-link callme broucher-click">
                    <i class="fa fa-phone f-icon" aria-hidden="true"></i>
                    CLICK TO CALL
                </a>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-6 pd0">
                <button class="btn fix-link i-am"><i class="fa fa-envelope"></i> ENQUIRE NOW</button>
            </div>
        </div>
    </div>
    <div class="modal fade in" tabindex="-1" role="dialog" id="main-modal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/images/poplogo.png" alt="Passcode Bull Run">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                    <h3>Enquire Now</h3>
                    <p>Please Enter Your Details To Download EBrochure</p>
                    <form id="main-popup" action="" name="main-popup" method="POST" >
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Name">
                                <input type="hidden" name="source" value="Main PopUp">
                                 <input type="hidden" name="utm_source" value="<?php echo $utm_source;?>">
                                      <input type="hidden" name="utm_content" value="<?php echo $utm_content;?>">
                                       <input type="hidden" name="utm_medium" value="<?php echo $utm_medium;?>">
                            </div>
                            <label for="fname" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <label for="mobile" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <label for="email" class="error"></label>
                        </div>
                           <div id="answer2" style="    color: green;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;display:none;" ></div>
                        <button type="submit" class="btn btn-default popup-btn">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade in" tabindex="-1" role="dialog" id="galleryModel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/images/poplogo.png" alt="Passcode Bull Run">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                    <h3>Floor Plans</h3>
                    <p>Please Enter Your Details To Floor Plans</p>
                    <form id="floor-popup1" action="" name="floor-popup1" method="POST">
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Name">
                                <input type="hidden" name="source" value="Floor Plans">
                                 <input type="hidden" name="utm_source" value="<?php echo $utm_source;?>">
                                      <input type="hidden" name="utm_content" value="<?php echo $utm_content;?>">
                                       <input type="hidden" name="utm_medium" value="<?php echo $utm_medium;?>">
                            </div>
                            <label for="fname" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <label for="mobile" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <label for="email" class="error"></label>
                        </div>
                           <div id="answer10" style="    color: green;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;display:none;" ></div>
                        <button type="submit" class="btn btn-default popup-btn">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade in" tabindex="-1" role="dialog" id="getDirectionModel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/images/poplogo.png" alt="Passcode Bull Run">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                    <h3>Get Direction</h3>
                    <p>Please Enter Your Details To Get Direction</p>
                    <form id="get-popup" action="" name="get-popup" method="POST" >
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Name">
                                <input type="hidden" name="source" value="Get Direction">
                                 <input type="hidden" name="utm_source" value="<?php echo $utm_source;?>">
                                      <input type="hidden" name="utm_content" value="<?php echo $utm_content;?>">
                                       <input type="hidden" name="utm_medium" value="<?php echo $utm_medium;?>">
                            </div>
                            <label for="fname" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <label for="mobile" class="error"></label>
                        </div>
                        <div id="answer7" style="    color: green;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;display:none;" ></div>
                        <button type="submit" class="btn btn-default popup-btn">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade in" tabindex="-1" role="dialog" id="getLocationModel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                    <iframe src="https://www.youtube.com/embed/exQa6Lc43Mk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <div class="modal fade in" tabindex="-1" role="dialog" id="price-modal" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/images/poplogo.png" alt="Passcode Bull Run">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                    <h3>Price</h3>
                    <p>Please Enter Your Details To Get Pricing Information</p>
                    <form id="price-popup" action="" name="price-popup" method="POST" >
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Name">
                                <input type="hidden" name="source" value="Price PopUp">
                                 <input type="hidden" name="utm_source" value="<?php echo $utm_source;?>">
                                      <input type="hidden" name="utm_content" value="<?php echo $utm_content;?>">
                                       <input type="hidden" name="utm_medium" value="<?php echo $utm_medium;?>">
                            </div>
                            <label for="fname" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <label for="mobile" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <label for="email" class="error"></label>
                        </div>
                           <div id="answer3" style="    color: green;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;display:none;" ></div>
                        <button type="submit" class="btn btn-default popup-btn">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <button class="btn btn-danger interested hidden-xs">Enquire Now</button>


    <button class="btn download-btn broucher-click hidden-xs">Download e-brochure</button>

    <div class="modal fade in" tabindex="-1" role="dialog" id="interested" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/images/poplogo.png" alt="Passcode Bull Run">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                    <h3>Enquire Now</h3>
                    <p>Kindly take a moment to fill up this form, Our representative will connect you shortly</p>
                    <form id="enquire-now" action="" name="enquire-now" method="post" >
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Name">
                                <input type="hidden" name="source" value="Enquire Now">
                                 <input type="hidden" name="utm_source" value="<?php echo $utm_source;?>">
                                      <input type="hidden" name="utm_content" value="<?php echo $utm_content;?>">
                                       <input type="hidden" name="utm_medium" value="<?php echo $utm_medium;?>">
                            </div>
                            <label for="fname" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <label for="mobile" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <label for="email" class="error"></label>
                        </div>
                           <div id="answer4" style="    color: green;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;display:none;" ></div>
                        <button type="submit" class="btn btn-default popup-btn">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade in" tabindex="-1" role="dialog" id="download-modal" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/images/poplogo.png" alt="Passcode Bull Run">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                    <h3 id="modaltittle"></h3>
                    <p>Please Enter Your Details To Download EBrochure</p>
                    <form id="download-now" action="" name="download-now" method="POST" >
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="fname" placeholder="Name">
                                <input type="hidden" name="source" value="Download Brochure">
                                 <input type="hidden" name="utm_source" value="<?php echo $utm_source;?>">
                                      <input type="hidden" name="utm_content" value="<?php echo $utm_content;?>">
                                       <input type="hidden" name="utm_medium" value="<?php echo $utm_medium;?>">
                            </div>
                            <label for="fname" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mobile form-ico" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <label for="mobile" class="error"></label>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <label for="email" class="error"></label>
                        </div>
                        <div id="answer5" style="    color: green;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 600;display:none;" ></div>
                        <button type="submit" class="btn btn-default popup-btn">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a id="gatewaybrochure" style="display: none;" href="assets/images/Multipolis Opportunity.pdf" download></a>

    <div id="pageloader">
        <div class="loading-wrap">
            <img class="arrow-animated bounce" src="assets/images/logo.png">
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/mobilevalidate.js"></script>
    <script src="assets/js/cookie.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custome-js.js"></script>

    <script>
        AOS.init({
            easing: 'ease-out-back'
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".price-click").click(function () {
                $('#price-modal').modal('show');
            });

            $(".interested").click(function () {
                $('#interested').modal('show');
                $('#answer4').hide();
            });

            $(".i-am").click(function () {
                $('#interested').modal('show');
            });

            $(".broucher-click").click(function () {
                $('#modaltittle').html('Download e-Brochure');
                $('#download-modal').modal('show');
                $('#answer5').hide();
            });

            $(".unitclick").click(function () {
                $('#modaltittle').html('Download Unit Plan');
                $('#download-modal').modal('show');
            });

            $(".floorclick").click(function () {
                $('#modaltittle').html('Download Floor Plan');
                $('#download-modal').modal('show');
            });

            $(".galleryModelBtn").click(function () {
                $('#modaltittle').html('Download Floor Plan');
                $('#galleryModel').modal('show');
            });

            $(".getDirectionBtn").click(function () {
                $('#modaltittle').html('Get Direction');
                $('#getDirectionModel').modal('show');
            });

            $(".getLocationBtn").click(function () {
                $('#modaltittle').html('Get Location');
                $('#getLocationModel').modal('show');
            });
        });
    </script>
    <script>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 75) {
                $("#hide-menu").addClass("fixHeader");
            } else {
                $("#hide-menu").removeClass("fixHeader");
            }
        });
    </script>
    <script>
        $('.open-menu').click(function () {
            document.getElementById("brNav").style.width = "100%";
        });
        $('.close-menu').click(function () {
            document.getElementById("brNav").style.width = "0%";
        });
    </script>
    <script>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 150) {
                $(".new-int").addClass("int");
            } else {
                $(".new-int").removeClass("int");
            }
        });
    </script>
    <script>
    var pdfUrl = "assets/pdf/Bull_Run_Opp_Doc_7_JAN_2022_Blue.pdf";

    $('#download-now').on('submit', function () {
        window.open(pdfUrl, '_blank');
    });
</script>
</body>

</html>