<x-profile>
    <div class="col-md-8">
        <!-- Настройки аккаунта -->
        <div id="account-settings" class="card">
            <div class="card-header">
                <h5 class="m-0">Настройки аккаунта</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('update_profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Имя</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Фамилия</label>
                        <input type="text" class="form-control" name="surname" id="surname"
                               value="{{Auth::user()->surname}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Почта</label>
                        <input type="email" class="form-control" name="email" id="email"
                               value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="photo">Фото</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/*">
                            <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите файл</label>
                        </div>
                        <small class="form-text text-muted">Поддерживаемые форматы: jpg, png, jpeg</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </form>
            </div>
        </div>

        <!-- Подтверждение почты -->
        <div id="email-confirmation" class="card mt-4">
            <div class="card-header">
                <h5 class="m-0">Подтверждение почты</h5>
            </div>
            <div class="card-body">
                <p>Ваша почта: <strong>{{ Auth::user()->email }}</strong></p>
                @if(!Auth::user()->hasVerifiedEmail())
                    <form action="{{ route('send_code') }}" method="post">
                        @csrf
                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                        <button type="submit" class="btn btn-primary mt-3">Отправить подтверждение</button>
                    </form>
                @else
                    <p class="text-success">Ваша почта уже подтверждена.</p>
                @endif
            </div>
        </div>

        <div id="password-reset" class="card mt-4">
            <div class="card-header">
                <h5 class="m-0">Сброс пароля</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('reset_password') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="current_password">Текущий пароль</label>
                        <input type="password" class="form-control" name="current_password" id="current_password"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Новый пароль</label>
                        <input type="password" class="form-control" name="new_password" id="new_password" required>
                    </div>
                    <div class="form-group">
                        <label for="new_password_confirmation">Подтверждение нового пароля</label>
                        <input type="password" class="form-control" name="new_password_confirmation"
                               id="new_password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Сбросить пароль</button>
                </form>
            </div>
        </div>
    </div>
</x-profile>

<script>
    $(document).ready(function () {

        /*обновление фотографии*/
        $('#photo').on('change', function () {
            var file = this.files[0];

            var fileName = file ? file.name : 'Выберите файл';
            $(this).next('.custom-file-label').text(fileName);

            if (file && file.type.startsWith('image/')) {
                var reader = new FileReader();
                reader.onload = function (e) {

                    $('#profile-img-preview').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

    });
</script>
