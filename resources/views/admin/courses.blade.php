<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="page-title">Курсы</h4>
                <a href="{{ route('admin.courses.create') }}" class="btn btn-success">Создать курс</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Список курсов</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Название</th>
                                        <th>Описание</th>
                                        <th>Категория</th>
                                        <th>Кол-во просмотров</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($courses as $course)
                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td>{{ $course->title }}</td>
                                            <td class="text-truncate"
                                                style="max-width: 150px">{{ $course->description }}</td>
                                            <td>{{ $course->category->name_category }}</td>
                                            <td>{{ $course->count_views }}</td>
                                            <td class="d-flex flex-wrap" style="gap: 5px">
                                                <a href="{{ route('edit_course', $course->id) }}"
                                                   class="btn btn-sm btn-warning">Редактировать</a>
                                                <!-- Кнопка вызова общего модального окна -->
                                                <button class="btn btn-sm btn-danger"
                                                        data-toggle="modal"
                                                        data-target="#deleteModal"
                                                        data-id="{{ $course->id }}"
                                                        data-title="{{ $course->title }}">
                                                    Удалить
                                                </button>
                                                <a href="{{ route('lessons', $course->id) }}"
                                                   class="btn btn-sm btn-primary">Перейти к курсу</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Курсы отсутствуют</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Единое модальное окно -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Удаление курса</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Вы уверены, что хотите удалить курс <strong id="course-title"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <form id="delete-form" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Получаем модальное окно и форму
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('delete-form');
        const courseTitle = document.getElementById('course-title');

        // Обрабатываем событие открытия модального окна
        $('#deleteModal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget); // Кнопка, вызвавшая модальное окно
            const courseId = button.data('id'); // Получаем ID курса
            const courseName = button.data('title'); // Получаем название курса

            // Обновляем содержимое модального окна
            courseTitle.textContent = courseName;
            deleteForm.action = `/admin/courses/delete/${courseId}`;
        });
    });

</script>
