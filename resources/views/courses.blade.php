<x-Layout>
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="allCourses mt-3">
            <div class="container">
                <!-- Фильтры -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-4" style="font-size: 15px">
                        <!-- Карточка с фильтром -->
                        <div class="card shadow-sm">
                            <div class="card-header text-white" style="background-color: #3981ef">
                                <h5 class="mb-0" style="color: #FFFFFF">

                                    <!-- Кнопка для мобильных устройств -->
                                    <button style="text-decoration: none" class="btn btn-link text-white p-0 d-md-none"
                                            type="button"
                                            data-toggle="collapse" data-target="#filterCollapse" aria-expanded="false"
                                            aria-controls="filterCollapse">
                                        <i class="fas fa-sliders-h mr-2"></i> Фильтр
                                    </button>

                                    <!-- Текст с иконкой для десктопных устройств -->
                                    <span class="d-none d-md-inline" style="font-size: 16px;"><i
                                            class="fas fa-sliders-h mr-2"></i> Фильтр</span>
                                </h5>
                            </div>

                            <!-- На мобильной версии фильтр будет скрыт, на ПК-версии — открыт -->
                            <div id="filterCollapse" class="collapse d-md-block">
                                <div class="card-body">
                                    <form method="GET" action="">

                                        <!-- Поиск -->
                                        <div class="mb-3">
                                            <label for="search" class="form-label mb-2">Поиск</label>
                                            <div class="input-group">
                                                <input type="text" name="search" id="search" class="form-control"
                                                       placeholder="Поиск по курсу">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Категория -->
                                        <div class="mb-3">
                                            <label for="category" class="form-label mb-2">Категория</label>
                                            <select name="category" id="category" class="form-control custom-select"
                                                    style="font-size: 15px; font-weight: normal">
                                                <option value="">Все категории</option>
                                                <option value="programming">Программирование</option>
                                                <option value="design">Дизайн</option>
                                                <option value="marketing">Маркетинг</option>
                                            </select>
                                        </div>

                                        <!-- Сортировка -->
                                        <div class="mb-3">
                                            <label class="form-label mb-2">Сортировка по</label>
                                            <div class="btn-group-vertical w-100">
                                                <a href="?sort=newest"
                                                   class="btn btn-outline-primary btn-block mb-2 text-left">
                                                    <i class="ti ti-time mr-2"></i> Новизне
                                                </a>
                                                <a href="?sort=rating"
                                                   class="btn btn-outline-primary btn-block mb-2 text-left">
                                                    <i class="ti ti-star mr-2"></i> Рейтингу
                                                </a>
                                                <a href="?sort=alphabetical"
                                                   class="btn btn-outline-primary btn-block mb-2 text-left">
                                                    <i class="ti ti-bookmark-alt mr-2"></i> Алфавиту
                                                </a>
                                                <a href="?sort=oldest"
                                                   class="btn btn-outline-primary btn-block mb-2 text-left">
                                                    <i class="ti ti-calendar mr-2"></i> Старым урокам
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Список курсов -->
                    <div class="col-md-9">
                        <h2>Все уроки</h2>
                        <div class="row">
                            @forelse($courses as $course)
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100 p-3 rounded-lg">
                                        <a href="{{ route('lessons', $course->id) }}">
                                            <img src="/storage/public/coursesImage/{{ $course->image }}"
                                                 alt="{{ $course->image }}"
                                                 class="card-img-top img-fluid">
                                        </a>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $course->title }}</h5>
                                            <p class="card-text mb-3"
                                               style="max-height: 100px; overflow: hidden; text-overflow: ellipsis;">
                                                {{ $course->description }}
                                            </p>
                                            <a href="{{ route('lessons', $course->id) }}"
                                               class="btn btn-outline-primary mt-auto">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <div class="col-12 mt-4">
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
            </div>
        </section>
    </div>
</x-Layout>
