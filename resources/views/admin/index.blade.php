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
    <link rel="stylesheet" href="/assets/css/demo.css">
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

                <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                    <div class="input-group">
                        <input type="text" placeholder="Поиск ..." class="form-control">
                        <div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <img src="/assets/img/defaultProfile.png" alt="user-img" width="36"
                                 class="img-circle"><span>Имя</span></span>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img src="/assets/img/defaultProfile.png" alt="user"></div>
                                    <div class="u-text">
                                        <h4>Имя</h4>
                                        <p class="text-muted">Почта</p></div>
                                </div>
                            </li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-user"></i> Мой профиль</a>
                            <a class="dropdown-item" href="#"><i class="ti-email"></i> Почта</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Настройки аккаунта</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Выйти</a>
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
                    <img src="/assets/img/defaultProfile.png">
                </div>
                <div class="info">
                    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Имя
									<span class="user-level">Администратор</span>
									<span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">Мой профиль</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Редактировать профиль</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="index.html">
                        <i class="la la-dashboard"></i>
                        <p>Главная</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="components.html">
                        <i class="la la-table"></i>
                        <p>Курсы</p>
                        <span class="badge badge-count">14</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forms.html">
                        <i class="la la-keyboard-o"></i>
                        <p>Статьи</p>
                        <span class="badge badge-count">50</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tables.html">
                        <i class="la la-user"></i>
                        <p>Пользователи</p>
                        <span class="badge badge-count">6</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="notifications.html">
                        <i class="la la-bell"></i>
                        <p>Уведомления</p>
                        <span class="badge badge-success">3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="typography.html">
                        <i class="la la-picture-o"></i>
                        <p>Работы пользователей</p>
                        <span class="badge badge-danger">25</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">Главная</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-stats card-warning">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-users"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Пользователей</p>
                                            <h4 class="card-title">1,294</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-success">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-bar-chart"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Новых пользователей</p>
                                            <h4 class="card-title">+ 1,345</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-danger">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-newspaper-o"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Постов на форуме</p>
                                            <h4 class="card-title">1303</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-primary">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Получено работ</p>
                                            <h4 class="card-title">576</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header ">
                                <h4 class="card-title">Таблица пользователей</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-head-bg-success table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Имя</th>
                                            <th scope="col">Фамилиия</th>
                                            <th scope="col">Почта</th>
                                            <th scope="col">Дата регистрации</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>2024-12-11 16:04:29</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>2024-12-11 16:04:29</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>2024-12-11 16:04:29</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>2024-12-11 16:04:29</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>2024-12-11 16:04:29</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>2024-12-11 16:04:29</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>2024-12-11 16:04:29</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-tasks px-3">
                            <div class="card-header ">
                                <h4 class="card-title">Курсы</h4>
                            </div>
                            <div class="card-body ">
                                <div class="table-full-width">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Курс</th>
                                            <th scope="col">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>Planning new project structure</td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>Update Fonts</td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>Add new Post
                                            </td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>Finalise the design proposal</td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <a href="" class="btn btn-primary btn-sm">Посмотреть все
                                        курсы</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-tasks px-3">
                            <div class="card-header ">
                                <h4 class="card-title">Курсы</h4>
                            </div>
                            <div class="card-body ">
                                <div class="table-full-width">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Курс</th>
                                            <th scope="col">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>Planning new project structure</td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>Update Fonts</td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>Add new Post
                                            </td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>Finalise the design proposal</td>
                                            <td class="td-actions text-right">
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Опубликовать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-arrow-circle-up"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Редактировать курс"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Страница курса"
                                                            class="btn btn-link <btn-simple-primary">
                                                        <i class="la la-link"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="Удалить"
                                                            class="btn btn-link btn-simple-danger">
                                                        <i class="la la-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <a href="" class="btn btn-primary btn-sm">Посмотреть все
                                        курсы</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/assets/js/ready.min.js"></script>
<script src="/assets/js/demo.js"></script>
</html>
