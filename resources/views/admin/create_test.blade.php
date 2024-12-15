<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Новый тест</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.tests.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Название теста -->
                                <div class="form-group">
                                    <label for="name">Название теста</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Введите название теста">
                                </div>

                                <!-- Описание теста -->
                                <div class="form-group">
                                    <label for="description">Описание теста</label>
                                    <textarea name="description" id="description" class="form-control" rows="5"
                                              placeholder="Введите описание теста"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="categoryType">Курс</label>
                                    <select name="course_id" id="Course" class="form-control">
                                        <option value="" disabled selected>Выберите курс</option>
                                        @forelse($courses as $course)
                                            <option value="{{$course->id}}">{{$course->title}}</option>
                                        @empty
                                            <option>Курсы отсутсвуют</option>
                                        @endforelse

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="photo">Изображение теста</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image_test"
                                               accept="image/*">
                                        <label class="custom-file-label" data-browse="Обзор">Выберите
                                            файл</label>
                                    </div>
                                </div>

                                <!-- Вопросы -->
                                <div id="questions-container">
                                    <h5 class="mt-4">Вопросы</h5>
                                    <div class="question-item border p-3 mb-3" data-question-index="0">
                                        <div class="form-group">
                                            <label for="question-text">Текст вопроса</label>
                                            <textarea name="questions[0][text]" class="form-control question-text"
                                                      rows="3"
                                                      placeholder="Введите текст вопроса"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="photo">Изображение вопроса</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="questions[0][photo]"
                                                       accept="image/*">
                                                <label class="custom-file-label" data-browse="Обзор">Выберите
                                                    файл</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="answers-container">
                                                <h6>Ответы</h6>
                                                <div class="answer-item d-flex align-items-center mb-2"
                                                     data-answer-index="0">
                                                    <input type="text"
                                                           name="questions[0][answers][0][text]"
                                                           class="form-control mr-3" placeholder="Введите ответ">
                                                    <div class="form-check">
                                                        <input type="radio" name="questions[0][correct]"
                                                               class="form-check-input" value="0">
                                                        <label class="form-check-label">Правильный</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-primary add-answer">Добавить
                                                ответ
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" id="add-question" class="btn btn-primary mb-4">Добавить
                                        вопрос
                                    </button>
                                </div>

                                <!-- Кнопка отправки -->
                                <button type="submit" class="btn btn-success">Создать тест</button>
                                <a href="/admin/tests" class="btn btn-secondary">Отмена</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>

<script src="/assets/js/testCreate.js"></script>
