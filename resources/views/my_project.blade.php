<x-profile>
    <div class="col-md-8">
        <div class="container">
            <h2 class="mb-4">Мои работы</h2>
            <div class="row">
                @foreach(Auth::user()->works as $work)
                    <div class="col-md-6 mb-4"> <!-- Увеличение колонки -->
                        <a data-fancybox="gallery" href="/storage/public/works/{{ $work->works }}">
                            <img src="/storage/public/works/{{ $work->works }}" class="img-fluid bigger-image"
                                 alt="Работа пользователя">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-profile>
