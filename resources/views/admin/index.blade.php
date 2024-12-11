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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-tasks">
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
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Task</h4>
                                <p class="card-category">Complete</p>
                            </div>
                            <div class="card-body">
                                <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                            </div>
                            <div class="card-footer">
                                <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">World Map</h4>
                                <p class="card-category">
                                    Map of the distribution of users around the world</p>
                            </div>
                            <div class="card-body">
                                <div class="mapcontainer">
                                    <div class="map">
                                        <span>Alternative content for the map</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-card-no-pd">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <p class="fw-bold mt-1">My Balance</p>
                                <h4><b>$ 3,018</b></h4>
                                <a href="#" class="btn btn-primary btn-full text-left mt-3 mb-3"><i
                                        class="la la-plus"></i> Add Balance</a>
                            </div>
                            <div class="card-footer">
                                <ul class="nav">
                                    <li class="nav-item"><a class="btn btn-default btn-link" href="#"><i
                                                class="la la-history"></i> History</a></li>
                                    <li class="nav-item ml-auto"><a class="btn btn-default btn-link" href="#"><i
                                                class="la la-refresh"></i> Refresh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">Profit</span>
                                        <span class="text-muted fw-bold"> $3K</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 7px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%"
                                             aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"
                                             data-toggle="tooltip" data-placement="top" title="78%"></div>
                                    </div>
                                </div>
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">Orders</span>
                                        <span class="text-muted fw-bold"> 576</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 7px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 65%"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             data-toggle="tooltip" data-placement="top" title="65%"></div>
                                    </div>
                                </div>
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">Tasks Complete</span>
                                        <span class="text-muted fw-bold"> 70%</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 7px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                             data-toggle="tooltip" data-placement="top" title="70%"></div>
                                    </div>
                                </div>
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">Open Rate</span>
                                        <span class="text-muted fw-bold"> 60%</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 7px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             data-toggle="tooltip" data-placement="top" title="60%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats">
                            <div class="card-body">
                                <p class="fw-bold mt-1">Statistic</p>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="la la-pie-chart text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Number</p>
                                            <h4 class="card-title">150GB</h4>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="la la-heart-o text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Followers</p>
                                            <h4 class="card-title">+45K</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                <p>
                    <b>We'll let you know when it's done</b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/js/ready.min.js"></script>
<script src="../assets/js/demo.js"></script>
</html>
