/*Лайки*/
$('#likeButton').click(function () {
    var postId = $(this).data('post-id');
    var likeCount = parseInt($('#likeCount').text());

    $.ajax({
        url: '/forum/' + postId + '/like', method: 'POST', headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, beforeSend: function () {
            $(this).addClass('disabled');
        }, success: function (response) {
            if (response.status) {
                if (response.minus) {
                    likeCount--;
                    $('#likeButton').removeClass('btn-outline-danger').addClass('btn-danger');
                } else {
                    likeCount++;
                    $('#likeButton').removeClass('btn-danger').addClass('btn-outline-danger');
                }
                $('#likeCount').text(likeCount);
            } else {
                console.log(response.message)
            }
        }, error: function (response) {
            console.log(response.message);
        }, complete: function () {
            $(this).removeClass('disabled');
        }
    })
});

/*Комментарии*/
$('#submitComment').click(function () {
    const input = $('#inputComment');
    const placeholder = input.siblings('.placeholder');

    var postId = input.data('post-id');
    var comment = input.text();

    $.ajax({
        url: '/forum/add_comment', method: 'POST', data: {
            post: postId, comment: comment,
        }, headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, beforeSend: function () {
            input.html('');
            placeholder.css('visibility', 'visible');
        }, success: function (response) {
            if (response.status) {
                const newComment = $(`
                    <div class="list-group-item mb-3 new-comment-hidden">
                        <div class="d-flex align-items-center">
                            <img
                                src="${response.comment.user.profile_img == 'default.png' ? '/images/icons/defaultProfile.png' : '/storage/public/userPhotos/' + response.comment.user.profile_img}"
                                alt="User Avatar"
                                class="rounded-circle"
                                style="width: 40px; height: 40px; margin-right: 10px;">
                            <div class="d-flex flex-grow-1">
                                <p class="mb-0">
                                    <strong>${response.comment.user.name} ${response.comment.user.surname}</strong>
                                </p>
                                <p class="mb-0 text-muted ml-auto" style="font-size: 14px;">Только что</p>
                            </div>
                        </div>
                        <p class="mt-2">${response.comment.comment}</p>
                    </div>
                `);

                // Удаляем предупреждение "Комментарии отсутствуют", если оно есть
                $('.alert.alert-warning').remove();

                // Добавляем новый комментарий и применяем анимацию
                $('.list-group').prepend(newComment);
                newComment.hide().slideDown(500);
            }

        }, error: function (response) {

        }, complete: function () {
            // Любые действия после завершения запроса
        }
    });
});



