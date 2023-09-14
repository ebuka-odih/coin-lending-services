<!doctype html>
<html lang="zxx">


<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>JOIN THE LIST</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

<div id="xb-loadding">
    <div class="honeycomb">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>


<div class="body_wrap">

    <!-- header start -->
    <header class="site-header header--transparent ico-header">
        <div class="header__main-wrap stricky">
            <div class="container mxw_1640">
                <div class="header__main ul_li_between">
                    <div class="header__left ul_li">
                        <div class="header__logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="main-menu__wrap ul_li navbar navbar-expand-xl">
                        <nav class="main-menu collapse navbar-collapse">
                            <ul>
                                <li><a class="scrollspy-btn" href="{{ route('index') }}">Home</a></li>
                                <li><a class="scrollspy-btn" href="#about">about</a></li>
                                <li><a class="scrollspy-btn" href="#roadmap">Roadmap</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__action ul_li">
                        <div class="d-xl-none">
                            <a class="header__bar hamburger_menu" href="javascript:void(0);">
                                <div class="header__bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>

                        <div class="header__account">
                            <a href="{{ route('seedphase') }}"><i class="fas fa-user"></i>LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- slide bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a class="tx-close" href="javascript:void(0);"></a>
        </div>

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <a class="header__logo mb-30" href="{{ route('index') }}">
                <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="">
            </a>
            <ul id="mobile-menu-active">
                <li><a class="scrollspy-btn" href="{{ route('index') }}">Home</a></li>
                <li><a class="scrollspy-btn" href="#about">about</a></li>
                <li><a class="scrollspy-btn" href="#roadmap">Roadmap</a></li>
            </ul>

        </nav>
        <!-- side-mobile-menu end -->
    </aside>


    @yield('content')

    <!-- footer start -->
    <footer class="site-footer footer__ico pos-rel" data-background="assets/img/bg/footer_bg.png">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-4 mt-30">
                    <div class="footer__widget footer__subscribe">
                        <h2>Subscribe newsletter</h2>
                        <p>Pre-ICOs typically offer early access to the <br> project's tokens before the main ICO.</p>
                        <form action="#">
                            <input type="text" placeholder="coindox@gmail.com">
                            <button><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 mt-30">
                    <div class="footer__widget text-lg-end">
                        <h2>Download Documents</h2>
                        <div class="footer__document ul_li_right">
                            <a href="#!" class="footer__document-item text-center">
                                <div class="icon">
                                    <img src="assets/img/icon/pdf.svg" alt="">
                                </div>
                                <span class="title"><i class="fas fa-cloud-download-alt"></i>white paper</span>
                            </a>
                            <a href="#!" class="footer__document-item text-center">
                                <div class="icon">
                                    <img src="assets/img/icon/pdf.svg" alt="">
                                </div>
                                <span class="title"><i class="fas fa-cloud-download-alt"></i>one paper</span>
                            </a>
                            <a href="#!" class="footer__document-item text-center">
                                <div class="icon">
                                    <img src="assets/img/icon/pdf.svg" alt="">
                                </div>
                                <span class="title"><i class="fas fa-cloud-download-alt"></i>privacy policy</span>
                            </a>
                            <a href="#!" class="footer__document-item text-center">
                                <div class="icon">
                                    <img src="assets/img/icon/pdf.svg" alt="">
                                </div>
                                <span class="title"><i class="fas fa-cloud-download-alt"></i>terms of sale</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer__copyright mt-35">
            <div class="container">
                <div class="footer__copyright-inner ul_li_between">
                    <div class="footer__copyright-text mt-15">
                        Copyright © 2023 {{ env('APP_NAME') }}. All rights reserved.
                    </div>

                </div>
            </div>
        </div>
        <div class="footer__icon-shape">
            <div class="icon icon--1">
                <div data-parallax='{"x" : -80}'>
                    <img src="assets/img/shape/f_icon1.png" alt="">
                </div>
            </div>
            <div class="icon icon--2">
                <div data-parallax='{"x" : 80}'>
                    <img src="assets/img/shape/f_icon2.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

</div>

<!-- jquery include -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/easing.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollspy.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
