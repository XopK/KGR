<x-layout>
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="forum-page mt-3">
            <div class="container">
                <div class="row">
                    <!-- Основная информация о посте -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Заголовок Поста</h2>
                                <p class="text-muted">ывоаытлао</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Блок с комментариями -->
                <div class="row mt-4">
                    <div class="col-md-12 mb-4">

                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Добавить комментарий</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    @csrf
                                    <textarea class="form-control mb-3" rows="3"
                                              placeholder="Введите ваш комментарий..."></textarea>
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5>Комментарии</h5>
                            </div>
                            <div class="card-body">
                                <!-- Список комментариев -->
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <p><strong>Имя пользователя</strong></p>
                                        <p>Комментарий к посту...</p>
                                    </div>
                                    <div class="list-group-item">
                                        <p><strong>Имя пользователя</strong></p>
                                        <p>Комментарий к посту...</p>
                                    </div>
                                    <!-- Дополнительные комментарии могут быть здесь -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
