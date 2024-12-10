<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="content text-center auth">
                <!-- Кнопки переключения авторизации и регистрации -->
                <div class="d-flex justify-content-center my-3" style="gap: 5px;">
                    <span id="authBtn" class="badge badge-success p-2">Авторизация</span>
                    <span id="regBtn" class="badge badge-primary p-2">Создать аккаунт</span>
                </div>

                <!-- Форма авторизации -->
                <div id="authForm" class="form-container">
                    <h3 class="mb-4">Добро пожаловать! <br> Войдите в аккаунт</h3>
                    <form action="#" class="mb-3">
                        <!-- Username -->
                        <input class="form-control main" type="text" placeholder="Имя" required>
                        <!-- Password -->
                        <input class="form-control main" type="password" placeholder="Пароль" required>
                        <!-- Submit Button -->
                        <button class="btn btn-main-sm">Войти</button>
                    </form>
                    <div class="new-acount">
                        <a href="contact.html">Забыли пароль?</a>
                        <p>Нет аккаунта? <a id="showRegister">Регистрация</a></p>
                    </div>
                </div>

                <!-- Форма регистрации -->
                <div id="regForm" class="form-container d-none">
                    <h3 class="mb-4">Создайте новый аккаунт</h3>
                    <form action="#" class="mb-3">
                        <!-- Username -->
                        <input class="form-control main" type="text" placeholder="Имя" required>
                        <!-- Email -->
                        <input class="form-control main" type="email" placeholder="Почта" required>
                        <!-- Password -->
                        <input class="form-control main" type="password" placeholder="Пароль" required>
                        <!-- Submit Button -->
                        <button class="btn btn-main-md">Зарегистрироваться</button>
                    </form>
                    <div class="new-acount">
                        <p>Есть аккаунт? <a id="showAuth">Войти</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
