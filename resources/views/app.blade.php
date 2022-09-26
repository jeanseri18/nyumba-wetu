<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Charity | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href={{ url('assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/slicknav.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/flaticon.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/progressbar_barfiller.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/gijgo.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/animate.min.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/animated-headline.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/magnific-popup.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/fontawesome-all.min.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/themify-icons.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/slick.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/nice-select.css') }}>
    <link rel="stylesheet" href={{ url('assets/css/style.css') }}>
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src={{ url('assets/img/logo/loder.png') }} alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">

                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src={{ url('assets/img/logo/logo.png') }}
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{ url('/') }}">ACCEUIL</a></li>
                                                <li><a href="{{ url('home/service') }}">CE QUE NOUS FAISONS</a></li>
                                                <li><a href="{{ url('home/help') }}">PERSONNE A AIDER</a></li>
                                                <li><a href="{{ url('home/event') }}">EVENEMENT SOCIAL</a></li>
                                                <li><a href="#">A PROPOS DE NOUS</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('home/about') }}">QUI SOMME NOUS</a></li>
                                                        <li><a href="{{ url('home/contact') }}">COMMENT NOUS CONTACTEZ</a></li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="contact.html" class="btn header-btn">FAITE UN DON</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
        @yield('content')
        <!-- Count Down End -->
    </main>
    <footer style='background-color:#040083'>
        <div class="footer-wrapper section-bg2">
            <!-- Footer Top-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <div class="footer-tittle">
                                        <div class="footer-logo mb-20">
                                            <a href="index.html"><img src={{ url('assets/img/logo/logo2_footer.png') }}
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>
                                            <p>Address : Rue de Bruyn,12 à Bruxelles 1210, dans la localité de
                                                Saint-Josse</p>
                                        </li>
                                        <li><a href="#">Telephone : +32 465 98 04 22</a></li>
                                        <li><a href="#">Email : info@colorlib.com</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>À PROPOS DE NOUS</h4>
                                    <ul>
                                        <li><a href="#"> Voir les Projects</a></li>
                                        <li><a href="#">Contactez nous</a></li>
                                        <li><a href="#">Temoignage</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Equipe</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>SOUSCRIPTION</h4>
                                    <div class="footer-pera footer-pera2">
                                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                                    </div>
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank"
                                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                                method="get" class="subscribe_form relative mail_part">
                                                <input type="email" name="email" id="newsletter-form-email"
                                                    placeholder="Email Address" class="placeholder hide-on-focus"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = ' Email Address '">
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit"
                                                        class="email_icon newsletter-submit button-contactForm"><img
                                                            src="assets/img/gallery/form.png" alt=""></button>
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    {{-- <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div> --}}

    <!-- JS here -->
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'a5ae0e004d71e7b9d5fde1f8df7ff71988bf3bfb';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <script src={{ url('./assets/js/vendor/modernizr-3.5.0.min.js') }}></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src={{ url('./assets/js/vendor/jquery-1.12.4.min.js') }}></script>
    <script src={{ url('./assets/js/popper.min.js') }}></script>
    <script src={{ url('./assets/js/bootstrap.min.js') }}></script>
    <!-- Jquery Mobile Menu -->
    <script src={{ url('./assets/js/jquery.slicknav.min.js') }}></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src={{ url('./assets/js/owl.carousel.min.js') }}></script>
    <script src={{ url('./assets/js/slick.min.js') }}></script>
    <!-- One Page, Animated-HeadLin -->
    <script src={{ url('./assets/js/wow.min.js') }}></script>
    <script src={{ url('./assets/js/animated.headline.js') }}></script>
    <script src={{ url('./assets/js/jquery.magnific-popup.js') }}></script>

    <!-- Date Picker -->
    <script src={{ url('./assets/js/gijgo.min.js') }}></script>
    <!-- Nice-select, sticky -->
    <script src={{ url('./assets/js/jquery.nice-select.min.js') }}></script>
    <script src={{ url('./assets/js/jquery.sticky.js') }}></script>
    <!-- Progress -->
    <script src={{ url('./assets/js/jquery.barfiller.js') }}></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src={{ url('./assets/js/jquery.counterup.min.js') }}></script>
    <script src={{ url('./assets/js/waypoints.min.js') }}></script>
    <script src={{ url('./assets/js/jquery.countdown.min.js') }}></script>
    <script src={{ url('./assets/js/hover-direction-snake.min.js') }}></script>

    <!-- contact js -->
    <script src={{ url('./assets/js/contact.js') }}></script>
    <script src={{ url('./assets/js/jquery.form.js') }}></script>
    <script src={{ url('./assets/js/jquery.validate.min.js') }}></script>
    <script src={{ url('./assets/js/mail-script.js') }}></script>
    <script src={{ url('./assets/js/jquery.ajaxchimp.min.js') }}></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src={{ url('./assets/js/plugins.js') }}></script>
    <script src={{ url('./assets/js/main.js') }}></script>

</body>
