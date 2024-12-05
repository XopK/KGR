$(document).ready(function () {

    /*Массив с вопросами и ответами*/
    const questions = [{
        question: "Какой язык программирования используется для взаимодействия с браузером?",
        answers: ['C++', 'JavaScript', 'Python', 'GoLang'],
        correct: 'JavaScript',
    }, {
        question: "Что такое HTML?",
        answers: ["Язык программирования", "Язык разметки", "База данных", "Фреймворк"],
        correct: 'Язык разметки',
    }, {
        question: "Что такое CSS?",
        answers: ["Стиль для страниц", "Машинное обучение", "Язык программирования", "Фреймворк"],
        correct: 'Стиль для страниц',
    },];

    let counterQuestion = 0;
    let incorrectAnswers = 0;

    const questionText = $('#questionText');
    const progressBar = $('#progressBar');
    const answerButtons = $('.answer-button');
    const questionNumber = $('.question-number h2');

    /*Обновление впоросов*/
    function updateQuestion() {

        const current = questions[counterQuestion];
        questionText.text(current.question);
        questionNumber.text(`${counterQuestion + 1} / ${questions.length}`)

        answerButtons.each(function (index) {
            $(this).text(current.answers[index]);
        });

        const progress = (counterQuestion / questions.length) * 100;
        progressBar.css('width', `${progress}%`);
    }

    /*Обработка ответа*/
    $('.answer-button').click(function () {

        const selectedAnswer = $(this).text();
        const correctAnswer = questions[counterQuestion].correct;

        if (selectedAnswer === correctAnswer) {
            counterQuestion++;
            console.log('Правильный ответ!');
        } else {
            counterQuestion++;
            incorrectAnswers++;
            console.log('Ответ Неверный!');
        }

        if (counterQuestion < questions.length) {
            updateQuestion();
        } else {
            progressBar.css('width', '100%');
            console.log('Тест завершён!');
            const correctAnswers = questions.length - incorrectAnswers;
            const resultText = `Тест завершен!<br>Правильных ответов: ${correctAnswers}<br>Неверных ответов: ${incorrectAnswers}`;


        }
    });


    $.fancybox.open({
        src: '#resultModal', type: 'inline', opts: {
            animationEffect: "zoom-in-out",
        }
    });
    updateQuestion();

});
