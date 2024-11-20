<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Практикум по КГР</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/plugins/slick/slick.css">
    <link rel="stylesheet" href="/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/plugins/aos/aos.css">

    <!-- CUSTOM CSS -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" tabindex="-1" href="{{ route('index') }}"><img
                src="/images/logo2.png" alt="logo"><span
                class="gradient-text">Практикум по КГР</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item {{ Request::routeIs('index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('index') }}">Главная</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Практикум
                        <span><i class="ti-angle-down"></i></span>
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.html">Основы 3D-моделирования и анимации</a></li>
                        <li><a class="dropdown-item" href="homepage-2.html">Графика и анимация для веб-дизайна</a></li>
                        <li><a class="dropdown-item active3" href="homepage-3.html">Цифровая живопись и концепт-арт</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="about.html">Форум</a>
                </li>

                <li class="nav-item {{ Request::routeIs('blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog') }}">Статьи</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ Auth::check() ? route('account') : route('sign_in') }}">Личный
                        кабинет</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{ $slot }}


<!--============================
=            Footer            =
=============================-->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                    <div class="block">
                        <a href="index.html"><img src="images/logo-alt.png" alt="footer-logo"></a>
                        <!-- Social Site Icons -->
                        <ul class="social-icon list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Product</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="team.html">Teams</a></li>
                            <li><a href="blog.html">Blogs</a></li>
                            <li><a href="FAQ.html">FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Resources</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="sign-up.html">Singup</a></li>
                            <li><a href="sign-in.html">Login</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Company</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="career.html">Career</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="team.html">Investor</a></li>
                            <li><a href="privacy.html">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Company</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-dark py-4">
        <small class="text-secondary">Copyright &copy;
            <script>document.write(new Date().getFullYear())</script>
            . Designed &amp; Developed by <a
                href="https://themefisher.com/">Themefisher</a></small class="text-secondary">
    </div>

    <div class="text-center bg-dark py-1">
        <small><p>Distributed By <a href="https://themewagon.com/">Themewagon</a></p></small class="text-secondary">
    </div>
</footer>


<!-- To Top -->
<div class="scroll-top-to">
    <i class="ti-angle-up"></i>
</div>

<!-- JAVASCRIPTS -->
<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/plugins/slick/slick.min.js"></script>
<script src="/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="/plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="/plugins/aos/aos.js"></script>

<script src="/js/script.js"></script>
</body>

</html>
