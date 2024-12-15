$(document).ready(function () {
    let instructionIndex = 1; // Индекс для инструкций

    // Кнопка добавления нового шага
    $('#add-instruction').on('click', function () {
        const template = $('#instruction-template').html();
        const newInstruction = $(template.replace(/INDEX/g, instructionIndex));
        newInstruction.hide().appendTo('#instructions-container').fadeIn(500);
        instructionIndex++;
    });

    // Удаление шага
    $('#instructions-container').on('click', '.remove-instruction', function () {
        // Анимация удаления
        $(this).closest('.instruction-item').fadeOut(500, function () {
            $(this).remove();
        });
    });

    $(document).on('change', '.custom-file-input', function () {
        let fileName = $(this).val().split('\\').pop(); // Получаем имя файла
        $(this).siblings('.custom-file-label').addClass('selected').html(fileName); // Устанавливаем имя файла
    });

    // Сброс имени файла при удалении динамически добавленного блока
    $(document).on('click', '.remove-instruction', function () {
        $(this).closest('.instruction-item').remove();
    });
});
