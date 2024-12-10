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

<!--=============================
=            Sign Up            =
==============================-->

<section class="user-login section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <!-- Image -->
                    <div class="image align-self-center"><img class="img-fluid" src="/images/Login/signUp.jpg"
                                                              alt="desk-image">
                    </div>
                    <!-- Content -->
                    <div class="content text-center">
                        <div class="title-text">
                            <h3>Регистрация аккаунта</h3>
                        </div>
                        <form action="#">
                            <!-- Username -->
                            <input class="form-control main" type="text" placeholder="Имя" required>
                            <!-- Email -->
                            <input class="form-control main" type="email" placeholder="Почта" required>
                            <!-- Password -->
                            <input class="form-control main" type="password" placeholder="Пароль" required>
                            <!-- Submit Button -->
                            <button class="btn btn-main-md">Зарегистрироваться</button>
                        </form>
                        <div class="new-acount">
                            <p>Уже есть аккаунт? <a href="{{ route('sign_in') }}">Войти</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of Sign Up  ====-->


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
