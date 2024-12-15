<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="page-title">Статьи</h4>
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Создать статью</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Список статей</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Заголовок</th>
                                    <th>Описание</th>
                                    <th>Автор</th>
                                    <th>Дата создания</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Название статьи 1</td>
                                    <td>Краткое описание статьи 1</td>
                                    <td>Автор 1</td>
                                    <td>2024-12-14</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">
                                            Удалить
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Название статьи 2</td>
                                    <td>Краткое описание статьи 2</td>
                                    <td>Автор 2</td>
                                    <td>2024-12-12</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">
                                            Удалить
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Название статьи 3</td>
                                    <td>Краткое описание статьи 3</td>
                                    <td>Автор 3</td>
                                    <td>2024-12-10</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">
                                            Удалить
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
