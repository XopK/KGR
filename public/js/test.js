$(document).ready(function () {
    /*Массив с вопросами и ответами*/
    /*const questions = [{
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
    },];*/

    let counterQuestion = 0;
    let incorrectAnswers = 0;

    const questionText = $('#questionText');
    const imageQuestion = $('#questionImage')
    const progressBar = $('#progressBar');
    const answerButtons = $('.answer-button');
    const questionNumber = $('.question-number h2');

    const sadImage = '/images/emoji/sad.png';
    const happyImage = '/images/emoji/happy.png';

    const checkComplete = false;

    /*Обновление впоросов*/
    function updateQuestion() {
        const current = questions[counterQuestion];
        questionText.text(current.question);
        questionNumber.text(`${counterQuestion + 1} / ${questions.length}`)

        answerButtons.each(function (index) {
            $(this).text(current.answers[index]);
        });

        if (current.photo) {
            imageQuestion.attr('src', '/storage/public/QuestionsImage/' + current.photo);
            imageQuestion.show();
        } else {
            imageQuestion.hide();
        }

        const progress = (counterQuestion / questions.length) * 100;
        progressBar.css('width', `${progress}%`);
    }

    /*Обработка ответа*/
    $('.answer-button').click(function () {

        const selectedAnswer = $(this).text();
        const correctAnswer = questions[counterQuestion].correct;

        if (selectedAnswer === correctAnswer) {
            counterQuestion++;
        } else {
            counterQuestion++;
            incorrectAnswers++;
        }

        if (counterQuestion < questions.length) {
            updateQuestion();
        } else {
            progressBar.css('width', '100%');
            const correctAnswers = questions.length - incorrectAnswers;

            let resultImage = correctAnswers >= (questions.length / 2) ? happyImage : sadImage;
            $('#resultImage').attr('src', resultImage);
            $('#resultText').text(`Вы ответили правильно на: ${correctAnswers} / ${counterQuestion} вопросов`)

            $.ajax({
                url: '/complete_test/send', // Укажите правильный URL на сервере
                type: 'POST', data: {
                    correctAnswers: correctAnswers,
                    totalQuestions: counterQuestion,
                    incorrectAnswers: incorrectAnswers,
                    test_id: questions[0].test_id,
                    _token: $('meta[name="csrf-token"]').attr('content')
                }, success: function (response) {
                }, error: function (xhr, status, error) {
                }
            });

            $.fancybox.open({
                src: '#resultModal', type: 'inline', opts: {
                    animationEffect: "zoom-in-out",
                }
            });

        }
    });

    updateQuestion();

});
