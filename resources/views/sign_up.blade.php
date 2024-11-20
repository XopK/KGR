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
                    <div class="image align-self-center"><img class="img-fluid" src="images/Login/sign-up.jpg"
                                                              alt="desk-image">
                    </div>
                    <!-- Content -->
                    <div class="content text-center">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="title-text">
                            <h3>Sign Up for New Account</h3>
                        </div>
                        <form action="#">
                            <!-- Username -->
                            <input class="form-control main" type="text" placeholder="Your Name" required>
                            <!-- Email -->
                            <input class="form-control main" type="email" placeholder="Email Address" required>
                            <!-- Password -->
                            <input class="form-control main" type="password" placeholder="Password" required>
                            <!-- Submit Button -->
                            <button class="btn btn-main-md">sign up</button>
                        </form>
                        <div class="new-acount">
                            <p>By clicking “Sign Up” I agree to <a href="privacy-policy.html">Terms of Conditions.</a>
                            </p>
                            <p>Anready have an account? <a href="{{ route('sign_in') }}">SIGN IN</a></p>
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
