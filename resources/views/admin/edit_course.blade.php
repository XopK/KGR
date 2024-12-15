<x-admin>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Редактировать курс</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update_course', $course->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <!-- Название курса -->
                                <div class="form-group">
                                    <label for="title">Название курса</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           value="{{ $course->title }}" required>
                                </div>

                                <!-- Описание курса -->
                                <div class="form-group">
                                    <label for="description">Описание курса</label>
                                    <textarea name="description" id="description" class="form-control" rows="1"
                                              required>{{ $course->description }}</textarea>
                                </div>

                                <!-- Категория курса -->
                                <div class="form-group">
                                    <label for="category_id">Категория курса</label>
                                    <select name="category_id" id="category_id" class="form-control" required>
                                        <option value="" disabled>Выберите категорию</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $course->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name_category }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Изображение курса -->
                                <!-- Изображение курса -->
                                <div class="form-group">
                                    <label for="photo">Изображение курса</label>
                                    <div class="mb-2">
                                        @if($course->image)
                                            <img id="current-photo"
                                                 src="/storage/public/coursesImage/{{ $course->image }}"
                                                 alt="Изображение курса"
                                                 class="img-fluid mb-2" style="max-height: 200px; border-radius: 5px;">
                                        @endif
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="photo" name="photo"
                                               accept="image/*">
                                        <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите
                                            файл</label>
                                    </div>
                                    <small class="form-text text-muted">Поддерживаемые форматы: jpg, png, jpeg</small>
                                </div>


                                <!-- Ссылка на видео -->
                                <div class="form-group">
                                    <label for="video_url">Ссылка на видео с инструкцией</label>
                                    <input type="url" name="video_url" id="video_url" class="form-control"
                                           value="{{ $course->video_url }}">
                                </div>

                                <!-- Список шагов -->
                                <div id="instructions-container">
                                    <h5 class="mt-4">Шаги для выполнения задания</h5>
                                    @foreach($course->instructions as $index => $instruction)
                                        <div class="instruction-item border p-3 mb-3">
                                            <div class="form-group">
                                                <label>Описание шага</label>
                                                <textarea name="instructions[{{ $index }}][text]" class="form-control"
                                                          rows="3"
                                                          required>{{ $instruction->instruction }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="instruction_image_{{ $index }}">Изображение для шага</label>
                                                <div class="mb-2">
                                                    @if($instruction->image_instruction)
                                                        <img id="instruction-photo-{{ $index }}"
                                                             src="/storage/public/InstructionImage/{{ $instruction->image_instruction }}"
                                                             alt="Изображение шага"
                                                             class="img-fluid mb-2"
                                                             style="max-height: 100px; border-radius: 5px;">
                                                    @endif
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input instruction-image-input"
                                                           id="instruction_image_{{ $index }}"
                                                           name="instructions[{{ $index }}][image]" accept="image/*"
                                                           data-preview="#instruction-photo-{{ $index }}">
                                                    <label class="custom-file-label"
                                                           for="instruction_image_{{ $index }}" data-browse="Обзор">Выберите
                                                        файл</label>
                                                </div>
                                                <small class="form-text text-muted">Поддерживаемые форматы: jpg, png,
                                                    jpeg</small>
                                            </div>
                                            <button data-id="{{ $instruction->id }}" type="button"
                                                    class="btn btn-danger btn-sm remove-instruction ml-2">
                                                Удалить шаг
                                            </button>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" id="add-instruction" class="btn btn-primary mb-4">Добавить
                                        шаг
                                    </button>
                                </div>

                                <!-- Кнопка отправки -->
                                <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">Отмена</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <template id="instruction-template">
        <div class="instruction-item border p-3 mb-3">
            <div class="form-group">
                <label>Описание шага</label>
                <textarea name="instructions[INDEX][text]" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="instruction_image">Изображение для шага</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="instruction_image"
                           name="instructions[INDEX][image]" accept="image/*">
                    <label class="custom-file-label" for="instruction_image" data-browse="Обзор">Выберите файл</label>
                </div>
                <small class="form-text text-muted">Поддерживаемые форматы: jpg, png, jpeg</small>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove-instruction ml-2">Удалить шаг</button>
        </div>
    </template>
</x-admin>
<script>
    let instructionIndex = {{ count($course->instructions) }}; // Индекс для инструкций
</script>
<script src="/assets/js/delete.js"></script>
<script src="/assets/js/courses.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Обрабатываем загрузку изображения для курса
        const courseImageInput = document.getElementById('photo'); // Поле для загрузки изображения курса
        const courseImagePreview = document.getElementById('current-photo'); // Превью изображения курса

        if (courseImageInput) {
            courseImageInput.addEventListener('change', function (event) {
                const file = event.target.files[0]; // Получаем выбранный файл

                if (file) {
                    const reader = new FileReader(); // Создаём FileReader для предварительного просмотра

                    reader.onload = function (e) {
                        if (courseImagePreview) {
                            // Если превью существует, обновляем его src
                            courseImagePreview.src = e.target.result;
                        } else {
                            // Если превью нет, создаём новый элемент img
                            const img = document.createElement('img');
                            img.id = 'current-photo';
                            img.src = e.target.result;
                            img.alt = 'Изображение курса';
                            img.classList.add('img-fluid', 'mb-2');
                            img.style.maxHeight = '200px';
                            img.style.borderRadius = '5px';
                            courseImageInput.closest('.form-group').insertBefore(img, courseImageInput.closest('.form-group').firstChild);
                        }
                    };

                    reader.readAsDataURL(file); // Читаем файл как DataURL
                }
            });
        }

        // Обрабатываем все input для шагов
        const instructionImageInputs = document.querySelectorAll('.instruction-image-input');

        instructionImageInputs.forEach(input => {
            input.addEventListener('change', function (event) {
                const file = event.target.files[0]; // Получаем выбранный файл
                const previewSelector = event.target.getAttribute('data-preview'); // Получаем ID для превью

                if (file) {
                    const reader = new FileReader(); // Создаём FileReader для предварительного просмотра

                    reader.onload = function (e) {
                        const previewElement = document.querySelector(previewSelector);
                        if (previewElement) {
                            // Если элемент для предварительного просмотра существует, обновляем его src
                            previewElement.src = e.target.result;
                        } else {
                            // Если элемента нет, создаём новый
                            const img = document.createElement('img');
                            img.id = previewSelector.replace('#', ''); // Убираем "#" из ID
                            img.src = e.target.result;
                            img.alt = 'Изображение шага';
                            img.classList.add('img-fluid', 'mb-2');
                            img.style.maxHeight = '100px';
                            img.style.borderRadius = '5px';
                            event.target.closest('.form-group').insertBefore(img, event.target.closest('.form-group').firstChild);
                        }
                    };

                    reader.readAsDataURL(file); // Читаем файл как DataURL
                }
            });
        });

        // Автоматическое изменение высоты для textarea
        const textarea = document.getElementById('description');

        // Функция подстройки высоты
        function autoResizeTextarea(element) {
            element.style.height = 'auto'; // Сбрасываем высоту
            element.style.height = element.scrollHeight + 'px'; // Устанавливаем высоту на основе содержимого
        }

        // Подстройка при загрузке страницы
        if (textarea) {
            autoResizeTextarea(textarea);

            // Подстройка при вводе текста
            textarea.addEventListener('input', function () {
                autoResizeTextarea(textarea);
            });
        }
    });

</script>
