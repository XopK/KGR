<x-layout>
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="forum mt-3">
            <div class="container">
                <h2>Форум</h2>

                <!-- Поиск и сортировка -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <form method="GET" action="" class="d-flex justify-content-between">
                            <!-- Поиск -->
                            <div class="input-group w-100" style="height: 45px">
                                <input type="text" name="search" id="search" class="form-control h-100"
                                       placeholder="Поиск по постам">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-8 mt-3">
                        <span class="mr-2">Сортировать по</span>
                        <div class="btn-group d-flex flex-wrap mt-2" style="gap: 10px">
                            <a href="?sort=newest" class="btn btn-outline-primary btn-sm">
                                <i class="ti ti-time mr-2"></i>Новизне
                            </a>
                            <a href="?sort=rating" class="btn btn-outline-primary btn-sm">
                                <i class="ti ti-star mr-2"></i>Рейтингу
                            </a>
                            <a href="?sort=alphabetical" class="btn btn-outline-primary btn-sm">
                                <i class="ti ti-bookmark-alt mr-2"></i>Алфавиту
                            </a>
                        </div>
                    </div>


                    <div class="col-md-4 mt-3 d-flex justify-content-md-end justify-content-start align-items-end">
                        <a href="{{ route('create_post') }}" class="btn btn-primary">
                            <i class="ti ti-pencil-alt mr-2"></i> Создать пост
                        </a>
                    </div>

                </div>

                <!-- Список постов -->
                <div class="row">
                    <!-- Пример поста -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 p-3 rounded-lg d-flex flex-column">
                            <a href="">
                                <h5 class="card-title">Как изучать программирование?</h5>
                            </a>
                            <p class="card-text mb-3">Обсуждаем лучшие ресурсы для изучения программирования...</p>
                            <div class="mt-auto">
                                <span class="text-muted">Автор: Иван Иванов</span>
                                <div class="text-muted">Рейтинг: 4.5</div> <!-- Рейтинг на новой строке -->
                            </div>
                            <!-- Кнопка для перехода к посту -->
                            <a href="" class="btn btn-primary mt-3">Перейти к посту</a>
                        </div>
                    </div>

                    <!-- Пример поста -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 p-3 rounded-lg d-flex flex-column">
                            <a href="">
                                <h5 class="card-title">Дизайн для начинающих</h5>
                            </a>
                            <p class="card-text mb-3">Как начать карьеру в дизайне и какие курсы выбрать...</p>
                            <div class="mt-auto">
                                <span class="text-muted">Автор: Мария Петрова</span>
                                <div class="text-muted">Рейтинг: 4.2</div> <!-- Рейтинг на новой строке -->
                            </div>
                            <!-- Кнопка для перехода к посту -->
                            <a href="" class="btn btn-primary mt-3">Перейти к посту</a>
                        </div>
                    </div>

                    <!-- Пример поста -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 p-3 rounded-lg d-flex flex-column">
                            <a href="">
                                <h5 class="card-title">Маркетинг в 2024 году</h5>
                            </a>
                            <p class="card-text mb-3">Актуальные тренды и инструменты маркетинга на текущий год...</p>
                            <div class="mt-auto">
                                <span class="text-muted">Автор: Алексей Смирнов</span>
                                <div class="text-muted">Рейтинг: 4.7</div> <!-- Рейтинг на новой строке -->
                            </div>
                            <!-- Кнопка для перехода к посту -->
                            <a href="" class="btn btn-primary mt-3">Перейти к посту</a>
                        </div>
                    </div>
                    <!-- Повторить для других постов -->
                </div>

                <!-- Пагинация -->
                <div class="col-12">
                    <nav class="pagination-nav">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="ti-angle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
</x-layout>
