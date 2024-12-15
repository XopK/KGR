<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="page-title">Тесты</h4>
                <a href="{{ route('admin.tests.create') }}" class="btn btn-primary">Создать тест</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Список тестов</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th>Количество вопросов</th>
                                    <th>Дата создания</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Название теста 1</td>
                                    <td>Краткое описание теста 1</td>
                                    <td>10</td>
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
                                    <td>Название теста 2</td>
                                    <td>Краткое описание теста 2</td>
                                    <td>15</td>
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
                                    <td>Название теста 3</td>
                                    <td>Краткое описание теста 3</td>
                                    <td>20</td>
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
