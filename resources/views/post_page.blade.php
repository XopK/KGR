<x-layout>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="forum-page mt-3">
            <div class="container">
                <div class="row">
                    <!-- Основная информация о посте -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <!-- Аватар пользователя -->
                                <img
                                        src="{{ $post->user->profile_img == 'default.png' ? '/images/icons/defaultProfile.png' : '/storage/public/userPhotos/' . $post->user->profile_img }}"
                                        alt="User Avatar"
                                        class="rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;">
                                <!-- Имя пользователя -->
                                <p class="mb-0 text-muted">{{ $post->user->name }} {{ $post->user->surname }}</p>
                                <!-- Дата создания, выравненная по правому краю -->
                                <p class="mb-0 text-muted ml-auto text-right"
                                   style="font-size: 15px">{{ $post->created_at->format('d.m.Y H:i') }}</p>
                            </div>
                            <div class="px-4 mt-4">
                                <h2 class="card-title">{{ $post->title }}</h2>
                                @if($post->photo)
                                    <!-- Добавление Fancybox для изображения -->
                                    <a href="/storage/public/photoPosts/{{$post->photo}}" data-fancybox>
                                        <img src="/storage/public/photoPosts/{{$post->photo}}" alt="Post Image"
                                             class="img-fluid custom-img">
                                    </a>
                                @endif
                            </div>
                            <div class="card-body">
                                {!! $post->content !!}
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <button data-post-id="{{ $post->id }}"
                                        data-check-like="{{ $post->like->isNotEmpty() ? true : false}}"
                                        class="btn {{ $post->like->isNotEmpty() ? 'btn-outline-danger' : 'btn-danger' }} rounded px-3 d-flex align-items-center justify-content-center"
                                        style="gap: 6px"
                                        id="likeButton">
                                    <i class="fa fa-heart" style="margin-bottom: 2px"></i>
                                    <span id="likeCount">{{$post->countLikes()}}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Блок с комментариями -->
                <div class="row mt-4">
                    <div class="col-md-12 mb-4">

                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Добавить комментарий</h5>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1 m-0">
                                    <div class="content-placeholder-wrapper">
                                        <div id="inputComment" contenteditable="true" data-post-id="{{ $post->id }}"
                                             class="form-control mb-3 auto-expand-input"
                                             style="min-height: 40px; overflow-y: hidden; white-space: pre-wrap;"></div>
                                        <div class="placeholder">Введите ваш комментарий...</div>
                                    </div>
                                </div>
                                <!-- Кнопка "Отправить" внизу справа -->
                                <button id="submitComment" class="btn btn-primary ml-auto">Отправить</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Комментарии</h5>
                            </div>
                            <div class="card-body">
                                <!-- Список комментариев -->
                                <div class="list-group">
                                    @forelse($comments as $comment)
                                        <div class="list-group-item mb-3">
                                            <div class="d-flex align-items-center   ">
                                                <img
                                                        src="{{ $comment->user->profile_img == 'default.png' ? '/images/icons/defaultProfile.png' : '/storage/public/userPhotos/' . $comment->user->profile_img }}"
                                                        alt="User Avatar"
                                                        class="rounded-circle"
                                                        style="width: 40px; height: 40px; margin-right: 10px;">
                                                <!-- Информация о пользователе и дата -->
                                                <div class="d-flex flex-grow-1">
                                                    <p class="mb-0">
                                                        <strong>{{ $comment->user->name }} {{ $comment->user->surname }}</strong>
                                                    </p>
                                                    <p class="mb-0 text-muted ml-auto"
                                                       style="font-size: 14px;">{{ $comment->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>

                                            <!-- Текст комментария под именем пользователя -->
                                            <p class="mt-2">{{ $comment->comment }}</p>
                                        </div>
                                    @empty
                                        <div class="alert alert-warning" role="alert">
                                            Комментарии отсуствуют.
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
<script src="/js/ajax.js">

</script>
<script>
    $(document).ready(function () {

        $('.auto-expand-input').on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

        $('.auto-expand-input').on('focus', function () {
            $(this).siblings('.placeholder').css('visibility', 'hidden');
        });

        $('.auto-expand-input').on('blur', function () {
            if ($(this).text().trim() === '') {
                $(this).siblings('.placeholder').css('visibility', 'visible');
            }
        });

    });

</script>
