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
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

<body class="page-question">


<div class="container page-test">
    <!-- Прогресс-бар сверху -->
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 0%" id="progressBar" aria-valuenow="0"
             aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <!-- Контейнер с тестом -->
    <div class="test-container">
        <div class="question-number mb-3">
            <h2>1 / 12</h2>
        </div>

        <div class="question-content">
            <img src="https://imgholder.ru/1920x1080" alt="Вопрос" id="questionImage" class="question-image">
            <h3 class="question" id="questionText">
            </h3>
        </div>
    </div>

    <!-- Блок для вариантов ответа -->
    <div class="answer-container">
        <div class="answer-buttons">
            <button class="btn btn-primary answer-button"></button>
            <button class="btn btn-primary answer-button"></button>
            <button class="btn btn-primary answer-button"></button>
            <button class="btn btn-primary answer-button"></button>
        </div>
    </div>
</div>

{{--Результат теста--}}
<div style="display: none;" id="resultModal">
    <div class="modal-cont">
        <h3 class="mb-3">Результаты теста</h3>

        <img src="/images/emoji/sad.png" alt="Результат" id="resultImage" class="result-image"/>

        <p id="resultText"></p>

        <button id="retryButton" class="retry-btn" onclick="window.location.href = '{{ url()->previous() }}';">Вернуться
            обратно
        </button>
    </div>
</div>


<!-- JAVASCRIPTS -->
<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/plugins/slick/slick.min.js"></script>
<script src="/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="/plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="/plugins/aos/aos.js"></script>

<!-- CUSTOM SCRIPTS -->
<script>
    const questions = @json($questions);
</script>
<script src="/js/script.js"></script>
<script src="/js/test.js"></script>
</body>

</html>
