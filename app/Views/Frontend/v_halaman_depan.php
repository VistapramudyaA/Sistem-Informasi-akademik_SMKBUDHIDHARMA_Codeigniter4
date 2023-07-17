<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>SMK BUDHI DHARMA PIYUNGAN</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url('smkbudhi') ?>/images/logosmk.png" alt="Logo">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?= base_url('smkbudhi') ?>/css/responsive.css">


</head>

<body>

    <?php
    $db = \Config\Database::connect();
    $jurusan = $db->table('jurusan')->get()->getResultArray();
    ?>

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">

        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="<?= base_url('smkbudhi') ?>/images/all-icon/map.png"
                                        alt="icon"><span>JL.YOGYA-WONOSARI KM.14</span></li>
                                <li><img src="<?= base_url('smkbudhi') ?>/images/all-icon/email.png"
                                        alt="icon"><span>smkbdbs@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->

        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="<?= base_url('Home') ?>">
                                <img src="<?= base_url('smkbudhi') ?>/images/logosmk/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="<?= base_url('smkbudhi') ?>/images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>INFORMASI PENDAFTARAN</p>
                                    <span>+6288232324437</span>
                                </div>
                            </div>
                            <div class="button float-left">
                                <a href="<?= base_url('Auth') ?>" class="main-btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->

        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="<?= base_url('Home') ?>"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a>Jurusan</a>
                                        <ul class="sub-menu">
                                            <?php foreach ($jurusan as $key => $data) { ?>
                                            <li><a
                                                    href="<?= base_url('Home/DetailJurusan/'. $data['id_jurusan']) ?>"><?= $data['jurusan'] ?></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="events.html">Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-singel.html">Event Singel</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="teachers.html">Our teachers</a>
                                        <ul class="sub-menu">
                                            <li><a href="teachers.html">teachers</a></li>
                                            <li><a href="teachers-singel.html">teacher Singel</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-singel.html">Blog Singel</a></li>
                                        </ul>
                                    </li>

                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html">Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="contact-2.html">Contact Us 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

    </header>

    <!--====== isi content ======-->

    <?php if ($page) {
        echo view ($page);
    } ?>
    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="<?= base_url('smkbudhi') ?>/images/patnar-logo/p-1.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="<?= base_url('smkbudhi') ?>/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="<?= base_url('smkbudhi') ?>/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="<?= base_url('smkbudhi') ?>/images/patnar-logo/p-4.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="<?= base_url('smkbudhi') ?>/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="<?= base_url('smkbudhi') ?>/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="<?= base_url('smkbudhi') ?>/images/logosmk/logo.png"
                                        alt="Logo"></a>
                            </div>
                            <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh
                                id elit. Duis sed odio sit amet nibh vulputate.</p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index-2.html"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right"></i>Courses</a></li>
                                <li><a href="blog.html"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="events.html"><i class="fa fa-angle-right"></i>Event</a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="teachers.html"><i class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>143 castle road 517 district, kiyev port south Canada</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+3 123 456 789</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@yourmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->

        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.magnific-popup.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/waypoints.min.js"></script>
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.counterup.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.nice-select.min.js"></script>

    <!--====== Nice Number js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.nice-number.min.js"></script>

    <!--====== Count Down js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/jquery.countdown.min.js"></script>

    <!--====== Validator js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/validator.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url('smkbudhi') ?>/js/main.js"></script>

    <!--====== Map js ======-->
    <script
        src="<?= base_url('smkbudhi') ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ">
    </script>
    <script src="<?= base_url('smkbudhi') ?>/js/map-script.js"></script>

</body>

</html>