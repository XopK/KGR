<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="page-title">Категории</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categories">
                    Добавить категорию
                </button>
            </div>

            <div class="row">
                <!-- Таблица категорий постов -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Категории постов</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->name_category}}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                            <form
                                                action="{{ route('delete_category') }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="category_id" value="{{$post->id}}">
                                                <input type="hidden" name="type" value="post">
                                                <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Таблица категорий курсов -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Категории курсов</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($courses as $course)
                                    <tr>
                                        <td>{{$course->id}}</td>
                                        <td>{{$course->name_category}}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">Редактировать</a>
                                            <form
                                                action="{{ route('delete_category') }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="category_id" value="{{$course->id}}">
                                                <input type="hidden" name="type" value="course">
                                                <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
                                            </form>
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
</x-admin>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="categories" tabindex="-1" aria-labelledby="categoriesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoriesModalLabel">Добавить категорию</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addCategoryForm" action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Название категории -->
                    <div class="form-group">
                        <label for="categoryName">Название категории</label>
                        <input type="text" name="name_category" id="categoryName" class="form-control"
                               placeholder="Введите название категории" required>
                    </div>

                    <!-- Тип категории -->
                    <div class="form-group">
                        <label for="categoryType">Тип категории</label>
                        <select name="type" id="categoryType" class="form-control" required>
                            <option value="" disabled selected>Выберите тип</option>
                            <option value="post">Для постов</option>
                            <option value="course">Для курсов</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>

