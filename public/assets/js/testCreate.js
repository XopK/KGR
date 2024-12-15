$(document).ready(function () {

    let questionIndex = 1;  // Начальный индекс для вопросов
    let answerIndex = [1];  // Начальный индекс для каждого вопроса

    // Добавление нового вопроса
    $('#add-question').on('click', function () {
        const questionHtml = `
            <div class="question-item border p-3 mb-3" data-question-index="${questionIndex}">
                <div class="form-group">
                    <label for="question-text">Текст вопроса</label>
                    <textarea name="questions[${questionIndex}][text]" class="form-control question-text" rows="3" placeholder="Введите текст вопроса"></textarea>
                </div>

                <div class="form-group">
                    <label for="photo">Изображение вопроса</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="questions[${questionIndex}][photo]" accept="image/*">
                        <label class="custom-file-label" data-browse="Обзор">Выберите файл</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="answers-container">
                        <h6>Ответы</h6>
                        <div class="answer-item d-flex align-items-center mb-2" data-answer-index="0">
                            <input type="text" name="questions[${questionIndex}][answers][0][text]" class="form-control mr-3" placeholder="Введите ответ">
                            <div class="form-check">
                                <input type="radio" name="questions[${questionIndex}][correct]" class="form-check-input" value="0">
                                <label class="form-check-label">Правильный</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary add-answer">Добавить ответ</button>
                </div>
            </div>
        `;

        $('#questions-container').append(questionHtml);
        questionIndex++;  // Увеличиваем индекс для следующего вопроса
        answerIndex.push(1); // Сохраняем индекс для следующего ответа
    });

    // Добавление нового ответа
    $(document).on('click', '.add-answer', function () {
        const questionBlock = $(this).closest('.question-item');
        const currentQuestionIndex = questionBlock.data('question-index');
        const currentAnswerIndex = answerIndex[currentQuestionIndex]; // Правильный индекс ответа для текущего вопроса

        const answerHtml = `
            <div class="answer-item d-flex align-items-center mb-2" data-answer-index="${currentAnswerIndex}">
                <input type="text" name="questions[${currentQuestionIndex}][answers][${currentAnswerIndex}][text]" class="form-control mr-3" placeholder="Введите ответ">
                <div class="form-check">
                    <input type="radio" name="questions[${currentQuestionIndex}][correct]" class="form-check-input" value="${currentAnswerIndex}">
                    <label class="form-check-label">Правильный</label>
                </div>
            </div>
        `;

        questionBlock.find('.answers-container').append(answerHtml);
        answerIndex[currentQuestionIndex]++;  // Увеличиваем индекс для следующего ответа
    });

    // Обновление имени файла при выборе
    $(document).on('change', '.custom-file-input', function () {
        const fileName = $(this).val().split('\\').pop();
        $(this).siblings('.custom-file-label').addClass('selected').html(fileName);
    });

});
