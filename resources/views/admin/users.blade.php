<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="page-title">Пользователи</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Список пользователей</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Имя</th>
                                    <th>Email</th>
                                    <th>Роль</th>
                                    <th>Дата регистрации</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Иван Иванов</td>
                                    <td>ivan.ivanov@example.com</td>
                                    <td>Администратор</td>
                                    <td>2024-12-01</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">
                                            Удалить
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Петр Петров</td>
                                    <td>petr.petrov@example.com</td>
                                    <td>Пользователь</td>
                                    <td>2024-12-05</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">
                                            Удалить
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Анна Смирнова</td>
                                    <td>anna.smirnova@example.com</td>
                                    <td>Модератор</td>
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
