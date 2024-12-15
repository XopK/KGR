<x-profile>
    <style>
        .post-photo {
            height: 200px;
            object-fit: cover;
            width: 100%;
            border-radius: 8px;
        }
    </style>
    <div class="col-md-8">
        <div class="container">
            <h2 class="mb-4">Понравившиеся посты</h2>
            <div class="row">
                @forelse(Auth::user()->likes as $like)
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <!-- Изображение поста -->
                            @if($like->post->photo)
                                <img src="/storage/public/photoPosts/{{ $like->post->photo }}"
                                     class="card-img-top p-3 post-photo"
                                     alt="{{ $like->post->photo ?? 'Без названия' }}">
                            @endif

                            <div class="card-body">
                                <!-- Заголовок поста -->
                                <h5 class="card-title">
                                    <a href="{{ route('forum_page', $like->post->id) }}">
                                        {{ $like->post->title ?? 'Без названия' }}
                                    </a>
                                </h5>
                                <!-- Автор поста -->
                                <p class="card-text small text-muted">
                                    Автор: {{ $like->post->user->name . ' ' . $like->post->user->surname ?? 'Неизвестный автор' }}
                                </p>
                                <!-- Кнопка перехода -->
                                <a href="{{ route('forum_page', $like->post->id) }}"
                                   class="btn btn-sm btn-primary mt-3 w-100">
                                    Перейти
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                            Вы ещё не лайкнули ни одного поста.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-profile>
