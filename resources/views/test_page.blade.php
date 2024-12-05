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
            <img src="https://imgholder.ru/1920x1080" alt="Вопрос" class="question-image">
            <h3 class="question" id="questionText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque
                autem commodi cumque debitis dolor et
                <!doctype html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport"
                          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Document</title>
                </head>
                <body>

                </body>
                </html>
            </h3>
        </div>
    </div>

    <!-- Блок для вариантов ответа -->
    <div class="answer-container">
        <div class="answer-buttons">
            <button class="btn btn-primary answer-button">C++</button>
            <button class="btn btn-primary answer-button">JavaScript</button>
            <button class="btn btn-primary answer-button">Python</button>
            <button class="btn btn-primary answer-button">Java</button>
        </div>
    </div>
</div>


<div style="display: none;" id="resultModal">
    <div class="modal-cont">
        <h3 class="mb-3">Результаты теста</h3>

        <img src="/images/emoji/sad.png" alt="Результат" class="result-image"/>

        <p id="resultText">Вы ответили правильно на: 0 / 3 вопросов</p>

        <button id="retryButton" class="retry-btn">Пройти тест снова</button>
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
<script src="/js/script.js"></script>
<script src="/js/test.js"></script>
</body>

</html>
