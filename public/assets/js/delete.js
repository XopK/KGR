$(document).ready(function () {
    // Обработка события нажатия на кнопку "Удалить шаг"
    $('.remove-instruction').each(function () {
        $(this).on('click', function () {
            const instructionId = $(this).data('id'); // Получаем ID инструкции
            $.ajax({
                url: `/admin/courses/delete_instruction/${instructionId}`, method: 'DELETE', data: {
                    instructionId: instructionId, _token: $('meta[name="csrf-token"]').attr('content')
                }, success: function (data) {
                    if (data.status) {
                        console.log(data.message)
                    } else {
                        console.log(data.message)
                    }
                }, error: function (xhr, status, error) {
                    console.error('Ошибка:', error);
                }
            });

        });
    });
});
