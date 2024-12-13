<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="content text-center auth">
                <!-- Кнопки переключения авторизации и регистрации -->
                <div class="d-flex justify-content-center my-3" style="gap: 5px;">
                    <span id="authBtn" class="badge btnAuth badge-success">Авторизация</span>
                    <span id="regBtn" class="badge btnAuth badge-primary">Создать аккаунт</span>
                </div>

                <!-- Форма авторизации -->
                <div id="authForm" class="form-container">
                    <h3 class="mb-4">Добро пожаловать! <br> Войдите в аккаунт</h3>
                    <form action="{{ route('login') }}" method="post" class="mb-3">
                        @csrf
                        <!-- Username -->
                        <input class="form-control main" type="email" value="{{old('email')}}" name="email"
                               placeholder="Почта" required>
                        <!-- Password -->
                        <input class="form-control main" type="password" name="password" placeholder="Пароль" required>

                        <div class="form-check mb-3">
                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Запомнить меня
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button style="width: 100%;" class="btn btn-main-sm">Войти</button>
                    </form>
                    <div class="new-acount">
                        <a href="contact.html" style="font-size: 15px">Забыли пароль?</a>
                        <p style="font-size: 15px">Нет аккаунта? <a id="showRegister" style="cursor: pointer">Регистрация</a>
                        </p>
                    </div>
                </div>

                <!-- Форма регистрации -->
                <div id="regForm" class="form-container d-none">
                    <h3 class="mb-4">Создайте новый аккаунт</h3>
                    <form action="{{ route('register') }}" class="mb-3" method="post">
                        @csrf
                        <!-- Username -->
                        <input class="form-control main" type="text" value="{{old('name')}}" name="name" placeholder="Имя" required>

                        <input class="form-control main" type="text" value="{{old('surname')}}" name="surname" placeholder="Фамилия" required>
                        <!-- Email -->
                        <input class="form-control main" type="email" value="{{old('email')}}" name="email" placeholder="Почта" required>
                        <!-- Password -->
                        <input class="form-control main" type="password" name="password" placeholder="Пароль" required>

                        <input class="form-control main" type="password" name="password_confirmation"
                               placeholder="Подтвердите пароль" required>
                        <!-- Submit Button -->
                        <button style="width: 100%;" class="btn btn-main-md">Зарегистрироваться</button>
                    </form>
                    <div class="new-acount">
                        <p style="font-size: 15px">Есть аккаунт? <a id="showAuth" style="cursor: pointer">Войти</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
