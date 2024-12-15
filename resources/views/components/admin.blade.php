<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Панель администратора - Практикум КГР</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assets/css/ready.css">
    <style>
        .alert-container {
            padding: 20px;
            position: fixed;
            top: 20px;
            right: 0px;
            z-index: 1055;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <div class="logo-header">
            <a href="{{ route('admin') }}" class="logo">
                Админ панель
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
        </div>
        <nav class="navbar navbar-header navbar-expand-lg">
            <div class="container-fluid">
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <img
                                    src="{{Auth::user()->profile_img == 'default.png' ? '/images/icons/defaultProfile.png' : '/storage/public/userPhotos/'.Auth::user()->profile_img}}"
                                    alt="user-img" width="36"
                                    class="img-circle"><span>{{ Auth::user()->name }} {{ Auth::user()->surname }}</span></span>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img
                                                src="{{Auth::user()->profile_img == 'default.png' ? '/images/icons/defaultProfile.png' : '/storage/public/userPhotos/'.Auth::user()->profile_img}}"
                                                alt="user"></div>
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h4>
                                        <p class="text-muted">{{ Auth::user()->email }}</p></div>
                                </div>
                            </li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('my_profile') }}"><i class="ti-user"></i> Мой
                                профиль</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('my_profile') }}"><i class="ti-settings"></i>
                                Настройки аккаунта</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Выйти</a>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="sidebar">
        <div class="scrollbar-inner sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img
                            src="{{Auth::user()->profile_img == 'default.png' ? '/images/icons/defaultProfile.png' : '/storage/public/userPhotos/'.Auth::user()->profile_img}}">
                </div>
                <div class="info">
                    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ Auth::user()->name }} {{ Auth::user()->surname }}
									<span class="user-level">Администратор</span>
									<span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('my_profile') }}">
                                    <span class="link-collapse">Мой профиль</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('my_profile') }}">
                                    <span class="link-collapse">Редактировать профиль</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item {{ Request::routeIs('admin') ? 'active' : '' }}">
                    <a href="{{ route('admin') }}">
                        <i class="la la-dashboard"></i>
                        <p>Главная</p>

                    </a>
                </li>
                <li class="nav-item {{ Request::Is('admin/courses*') ? 'active' : '' }}">
                    <a href="{{ route('admin.courses') }}">
                        <i class="la la-table"></i>
                        <p>Курсы</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::routeIs('admin.categories') ? 'active' : '' }}">
                    <a href="{{ route('admin.categories') }}">
                        <i class="la la-try"></i>
                        <p>Категории</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::routeIs('admin.blogs') ? 'active' : '' }}">
                    <a href="{{ route('admin.blogs') }}">
                        <i class="la la-keyboard-o"></i>
                        <p>Статьи</p>

                    </a>
                </li>
                <li class="nav-item {{ Request::Is('admin/tests*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tests') }}">
                        <i class="la la-list"></i>
                        <p>Тесты</p>

                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('admin.users') ? 'active' : '' }}">
                    <a href="{{ route('admin.users') }}">
                        <i class="la la-user"></i>
                        <p>Пользователи</p>

                    </a>
                </li>
                <li class="nav-item {{ Request::routeIs('admin.userWorks') ? 'active' : '' }}">
                    <a href="{{ route('admin.userWorks') }}">
                        <i class="la la-picture-o"></i>
                        <p>Работы пользователей</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        {{$slot}}
    </div>
</div>
<x-alerts/>
</body>
<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
</html>
