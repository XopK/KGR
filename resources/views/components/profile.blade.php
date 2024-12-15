<x-Layout>
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="personal-account flex-grow-1">
            <div class="container py-4">
                <div class="row">
                    <!-- Профиль пользователя -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center profile-header">
                                <img
                                    id="profile-img-preview"
                                    src="{{Auth::user()->profile_img == 'default.png' ? '/images/icons/defaultProfile.png' : '/storage/public/userPhotos/'.Auth::user()->profile_img}}"
                                    alt="Профиль пользователя"
                                    class="rounded-circle"
                                    width="150" height="150">
                                <h4 class="mt-3">{{Auth::user()->name}} {{Auth::user()->surname}}</h4>
                            </div>
                        </div>
                        <!-- Блок с кнопками навигации -->
                        <div class="btns mt-4">
                            <div class="btn-group-vertical w-100">
                                <a href="{{ route('my_profile') }}"
                                   class="custom-btn {{Request::routeIs('my_profile') ? 'active' : ''}}">
                                    <i class="ti-settings mr-2"></i> Настройки аккаунта
                                </a>
                                <a href="{{ route('my_portfolio') }}"
                                   class="custom-btn {{Request::routeIs('my_portfolio') ? 'active' : ''}}">
                                    <i class="ti-briefcase mr-2"></i> Мои работы
                                </a>

                                <a href="{{ route('my_posts') }}"
                                   class="custom-btn {{ Request::is('profile/my_posts*') ? 'active' : '' }}">
                                    <i class="ti-pencil-alt mr-2"></i> Мои посты
                                </a>

                                <a href="{{ route('complete_tests') }}"
                                   class="custom-btn {{Request::routeIs('complete_tests') ? 'active' : ''}}">
                                    <i class="ti-check-box mr-2"></i> Пройденные тесты
                                </a>

                                <a href="{{ route('my_liked') }}"
                                   class="custom-btn {{Request::routeIs('my_liked') ? 'active' : ''}}">
                                    <i class="ti-heart mr-2"></i> Понравившиеся посты
                                </a>

                                @if(Auth::user()->role_id == 1)
                                    <a href="{{ route('admin') }}"
                                       class="custom-btn">
                                        <i class="ti-dashboard mr-2"></i> Админ панель
                                    </a>
                                @endif


                                <a href="{{ route('logout') }}"
                                   class="custom-btn logout">
                                    <i class="ti-power-off mr-2"></i> Выйти
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- Информация пользователя -->
                    {{ $slot }}
                </div>
            </div>
        </section>
    </div>
</x-Layout>
