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
            <h2 class="mb-4">Мои посты</h2>
            <div class="row">
                @forelse(Auth::user()->posts as $post)
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <!-- Изображение поста -->
                            @if($post->photo)
                                <img src="/storage/public/photoPosts/{{ $post->photo }}"
                                     class="card-img-top p-3 post-photo"
                                     alt="{{ $post->title ?? 'Пост без названия' }}">
                            @endif

                            <div class="card-body">
                                <!-- Заголовок поста -->
                                <h5 class="card-title">
                                    <a href="{{ route('forum_page', $post->id) }}">
                                        {{ $post->title ?? 'Без названия' }}
                                    </a>
                                </h5>
                                <!-- Дата публикации -->
                                <p class="card-text small text-muted">
                                    Опубликовано: {{ $post->created_at->format('d.m.Y H:i') }}
                                </p>
                                <!-- Кнопки на одной строке -->
                                <div class="d-flex mt-3 flex-wrap" style="gap: 10px">
                                    <a href="{{ route('forum_page', $post->id) }}"
                                       class="btn btn-sm btn-primary flex-fill mb-2 mb-md-0 mr-md-2">
                                        Перейти
                                    </a>
                                    <a href="{{ route('edit_post', $post->id) }}"
                                       class="btn btn-sm btn-warning flex-fill mb-2 mb-md-0 mr-md-2">
                                        Редактировать
                                    </a>

                                    <a data-fancybox data-src="#delete-confirmation-{{ $post->id }}"
                                       class="btn btn-sm btn-danger flex-fill mb-2 mb-md-0 mr-md-2">
                                        Удалить
                                    </a>

                                    <div style="display: none;" id="delete-confirmation-{{ $post->id }}">
                                        <div class="text-center">
                                            <h5>Вы уверены, что хотите удалить пост?</h5>
                                            <p style="font-size: 15px">{{ $post->title }}</p>
                                            <form action="{{ route('delete_post', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mt-3 mr-1">Удалить
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary mt-3 ml-1"
                                                        data-fancybox-close>
                                                    Отмена
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                            У вас ещё нет опубликованных постов.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>


</x-profile>



