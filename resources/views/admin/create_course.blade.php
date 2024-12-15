<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Новый курс</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.courses.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <!-- Название курса -->
                                <div class="form-group">
                                    <label for="title">Название курса</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                           placeholder="Введите название курса">
                                </div>

                                <!-- Описание курса -->
                                <div class="form-group">
                                    <label for="description">Описание курса</label>
                                    <textarea name="description" id="description" class="form-control" rows="5"
                                              placeholder="Введите описание курса"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="categoryType">Категория курса</label>
                                    <select name="category_id" id="categoryCourse" class="form-control">
                                        <option value="" disabled selected>Выберите категорию</option>
                                        @forelse($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name_category}}</option>
                                        @empty
                                            <option>Категории отсутсвуют</option>
                                        @endforelse

                                    </select>
                                </div>

                                <!-- Изображение курса -->
                                <div class="form-group">
                                    <label for="image">Изображение курса</label>
                                    <div class="custom-file">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="photo" name="photo"
                                                   accept="image/*">
                                            <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите
                                                файл</label>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Поддерживаемые форматы: jpg, png, jpeg</small>
                                </div>

                                <!-- Ссылка на видео -->
                                <div class="form-group">
                                    <label for="video_url">Ссылка на видео с инструкцией</label>
                                    <input type="url" name="video_url" id="video_url" class="form-control"
                                           placeholder="Введите URL видео">
                                </div>

                                <div id="instructions-container">
                                    <h5 class="mt-4">Шаги для выполнения задания</h5>
                                    <div class="instruction-item border p-3 mb-3">
                                        <div class="form-group">
                                            <label>Описание шага</label>
                                            <textarea name="instructions[0][text]" class="form-control" rows="3"
                                                      placeholder="Введите описание шага"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Изображение для шага</label>
                                            <div class="custom-file">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="photo"
                                                           name="instructions[0][image]"
                                                           accept="image/*">
                                                    <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите
                                                        файл</label>
                                                </div>
                                            </div>
                                            <small class="form-text text-muted">Поддерживаемые форматы: jpg, png,
                                                jpeg</small>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" id="add-instruction" class="btn btn-primary mb-4">Добавить шаг
                                    </button>
                                </div>

                                <!-- Кнопка отправки -->
                                <button type="submit" class="btn btn-success">Создать курс</button>
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
                <textarea name="instructions[INDEX][text]" class="form-control" rows="3"
                          placeholder="Введите описание шага"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Изображение для шага</label>
                <div class="custom-file">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="instructions[INDEX][image]"
                               accept="image/*">
                        <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите
                            файл</label>
                    </div>
                </div>
                <small class="form-text text-muted">Поддерживаемые форматы: jpg, png,
                    jpeg</small>
            </div>
            <button type="button" class="btn btn-danger btn-sm remove-instruction ml-2">Удалить шаг</button>
        </div>
    </template>

</x-admin>
<script>
    let instructionIndex = 1; // Индекс для инструкций
</script>
<script src="/assets/js/courses.js"></script>
