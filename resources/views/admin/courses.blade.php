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
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                                <button class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Вы уверены?')">
                                                    Удалить
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
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
</x-admin>
