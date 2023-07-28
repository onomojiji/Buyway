<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BuyWay - @yield("title")</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- theme style switch -->
    <meta name="theme-style-mode" content="1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/backtotop.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/nouislider.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/elegant-icon.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- body wrapper start -->

<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader preloader-1">
                <div class="tp-preloader">
                    <div class="tp-preloader">
                        <div class="tp-preloader">
                            <div class="tp-preloader">
                                <div class="tp-preloader">
                                    <div class="tp-preloader">
                                        <div class="tp-preloader">
                                            <div class="tp-preloader">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- preloader style 2 -->
            <div class="tp-preloader-2">
                <svg width="180" height="180" viewBox="0 0 100 100">
                    <polyline class="line-cornered stroke-still" points="0,0 100,0 100,100" stroke-width="10" fill="none"></polyline>
                    <polyline class="line-cornered stroke-still" points="0,0 0,100 100,100" stroke-width="10" fill="none"></polyline>
                    <polyline class="line-cornered stroke-animation" points="0,0 100,0 100,100" stroke-width="10" fill="none"></polyline>
                    <polyline class="line-cornered stroke-animation" points="0,0 0,100 100,100" stroke-width="10" fill="none"></polyline>
                </svg>
            </div>

            <!-- prealoader style 3 -->
            <div class="tp-preloader-3">
                <div class="loader loader-1">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

@include("layouts.topbar")

<!-- theme settings area start -->
<div class="theme__settings transition-3">
    <div class="theme__settings-btn">
        <button type="button" class="theme__settings-expand" id="theme-setting-toggle"><i class="fa-solid fa-gear"></i></button>
        <button type="button" class="theme__settings-close" id="theme-setting-close"><i class="fa-regular fa-xmark"></i></button>
    </div>
    <div class="theme__settings-wrapper text-center">

        <div class="theme__switch mb-30">
            <h4 class="theme__settings-title">Select your desired theme</h4>
            <!-- light dark moode switcher start -->
            <div class="my_switcher setting-option">
                <ul>
                    <li>
                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark theme__switcher-btn">
                            <i class="fa-light fa-moon"></i> Dark
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" data-theme="light" class="setColor light theme__switcher-btn">
                            <i class="fa-light fa-brightness-low"></i> Light
                        </a>
                    </li>
                </ul>
            </div>
            <!-- light dark moode switcher end -->
        </div>

        <div class="theme__settings-color">
            <h4 class="theme__settings-title">Select your favorite color</h4>

            <div class="theme__settings-color-input">
                <input type="color" data-color="color" value="#3771FE">
            </div>
        </div>
    </div>
</div>
<!-- theme settings area end -->

<!-- offcanvas area start -->
<div class="offcanvas__area">
    <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo-black.png" alt="logo">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offcanvasmodal">
                                    <i class="fal fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="offcanvas__search mb-25">
                            <form action="#">
                                <input type="text" placeholder="What are you searching for?">
                                <button type="submit" ><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="mobile-menu fix mb-40"></div>
                        <div class="offcanvas__compte mb-25 d-sm-none">
                            <a href="compte.html" class="offcanvas__compte-btn">
                                <svg viewBox="0 0 19 16">
                                    <path d="M17.5 5.83333V10.1667C17.5 13.5 15.9 14.5 13.5 14.5H5.5C2.5 14.5 1.5 13 1.5 10.1667V5.83333C1.5 3 2.5 2 4.852 1.552C5.06 1.51733 5.276 1.5 5.5 1.5H13.5C13.708 1.5 13.908 1.50866 14.1 1.54332C16.5 2 17.5 3 17.5 5.83333Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5.03314H5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.2998 5.75061H14.8998C14.0198 5.75061 13.2998 6.65061 13.2998 7.75061C13.2998 8.85061 14.0198 9.75061 14.8998 9.75061H17.2998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                compte
                            </a>
                        </div>
                        <div class="offcanvas__notification d-sm-none d-flex align-items-center mb-25">
                            <div class="offcanvas__notification-icon mr-25">
                                <a href="historique.html">
                                    <i class="fa-light fa-bell"></i>
                                    <span class="notification-count">8</span>
                                </a>
                            </div>
                            <div class="offcanvas__notification-text">
                                <p>You have <span class="notification-number">8</span> notifications <a href="historique.html">view</a></p>
                            </div>
                        </div>
                        <div class="offcanvas__text d-none d-lg-block">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore</p>
                        </div>
                        <div class="offcanvas__map d-none d-lg-block mb-15">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
                        </div>
                        <div class="offcanvas__contact mt-30 mb-20">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A, Mirnada City Tower, NYC</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:support@gmail.com">088889797697</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+012-345-6789">support@mail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas__social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas area end -->
<div class="body-overlay"></div>
<!-- offcanvas area end -->

<main>

    @yield("content")

</main>

@include("layouts.footer")

<!-- JS here -->
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/waypoints.js"></script>
<script src="assets/js/bootstrap-bundle.js"></script>
<script src="assets/js/cookie.js"></script>
<script src="assets/js/style-switcher.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/swiper-bundle.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/magnific-popup.js"></script>
<script src="assets/js/parallax.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/nice-select.js"></script>
<script src="assets/js/counterup.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/isotope-pkgd.js"></script>
<script src="assets/js/imagesloaded-pkgd.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/nouislider.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- metamask -->
<script src="assets/js/web3.js"></script>
<script src="assets/js/maralis.js"></script>
<script src="assets/js/connect.js"></script>
</body>
</html>
