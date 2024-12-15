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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">


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
                aria-controls="navbarNav" aria-expanded="false" style="margin-right: 20px"
                aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item {{ Request::routeIs('index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('index') }}">Главная</a>
                </li>

                <li class="nav-item dropdown {{ Request::is('courses*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Практикум
                        <span><i class="ti-angle-down"></i></span>
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('courses') }}">Все уроки</a></li>
                        @forelse($categories_courses_header as $header)
                            <li><a class="dropdown-item" href="{{ route('courses') }}">{{ $header->name_category }}</a>
                            </li>
                    @empty
                    @endforelse
                </li>
            </ul>
            </li>

            <li class="nav-item {{ Request::is('forum*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('forum') }}">Форум</a>
            </li>

            <li class="nav-item {{ Request::routeIs('blog') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blog') }}">Статьи</a>
            </li>
            @auth
                <li class="nav-item {{ Request::is('profile*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('my_profile') }}">Личный
                        кабинет</a>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" style="cursor: pointer;" data-toggle="modal" data-target="#authModal">Личный
                        кабинет</a>
                </li>
                @endguest
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
                        <a class="navbar-brand d-flex align-items-center mb-4" tabindex="-1"
                           href="{{ route('index') }}"><img
                                src="/images/logo2.png" alt="logo"><span
                                style="color: white">Практикум по КГР</span></a>
                        <!-- Social Site Icons -->
                        <ul class="social-icon list-inline">
                            <li class="list-inline-item">
                                <a href="https://vk.com/"><i class="fab fa-vk"></i></a> <!-- Иконка VK -->
                            </li>
                            <li class="list-inline-item">
                                <a href="https://web.telegram.org/"><i class="fab fa-telegram-plane"></i></a>
                                <!-- Иконка Telegram -->
                            </li>
                            <li class="list-inline-item">
                                <a href="https://rutube.ru/"><i class="fas fa-video"></i></a> <!-- Иконка видео -->
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Практикум</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="team.html">Уроки</a></li>
                            <li><a href="blog.html">Галерея</a></li>
                            <li><a href="FAQ.html">Тесты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Личный кабинет</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="sign-up.html">Регистрация</a></li>
                            <li><a href="sign-in.html">Авторизация</a></li>
                            <li><a href="blog.html">Профиль</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Форум</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="career.html">Форум</a></li>
                            <li><a href="contact.html">Правила</a></li>
                            <li><a href="team.html">Создать тему</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Статьи</h6>
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
            Практикум по КГР </small>
    </div>
</footer>

<x-auth/>
<x-alerts/>

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
