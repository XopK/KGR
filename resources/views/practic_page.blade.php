<x-Layout>
    <!--================================
=            Page Title            =
=================================-->

    <section class="section page-title lesson-page mb-4"
             style="background-image: url('/storage/public/coursesImage/{{$course->image}}'); background-size: cover; background-position: center; position: relative;">
        <div class="background-overlay"></div> <!-- background dark -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <!-- Page Title -->
                    <h1 class="lesson-title">{{$course->title}}</h1>
                    <!-- Page Description -->
                    <p style="color: #dad6d6">{{$course->description}}</p>
                </div>
            </div>
        </div>
    </section>


    <!--====  End of Page Title  ====-->


    <!--==================================
    =            Career Promo            =
    ===================================-->
    <section class="section career-featured pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <!-- written-content -->
                        <div class="content">
                            <!-- Career heading -->
                            <h2>Инструкция по выполнению задания</h2>
                            <!-- Career Description -->
                        </div>
                        <!-- Promo Video -->
                        <div class="video">
                            <!-- Video Thumb -->
                            <img class="img-fluid shadow"
                                 src="{{$course->thumbnail_url}}"
                                 alt="video-thumbnail">
                            <!-- Video Button -->
                            <div class="video-button video-box">
                                <a href="{{$course->video_url}}"
                                   data-fancybox="video">
                                    <i class="ti-control-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Career Promo  ====-->

    <!--===============================
=            Fun Facts            =
===============================-->
    @if($course->instructions->isNotEmpty())
        <section class="company-fun-facts section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Шаги для выполнения задания:</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="instruction-text mt-4">
                            <ol style="font-size: 18px; line-height: 1.6;">
                                @foreach($course->instructions as $instruction)
                                    <li class="list-lesson">
                                        {{$instruction->instruction}}
                                    </li>
                                    <a href="/storage/public/InstructionImage/{{$instruction->image_instruction}}"
                                       data-fancybox>
                                        <img src="/storage/public/InstructionImage/{{$instruction->image_instruction}}"
                                             alt="{{$instruction->image_instruction}}"
                                             class="image-lesson-practic img-fluid mb-3">
                                    </a>
                                @endforeach

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="job-section section pt-0">
        <div class="container">
            <div class="row">
                <!-- Колонка с текстом и формой -->
                <div class="col-12">
                    <!-- Текст с информацией -->
                    <div class="text-center mb-4">
                        <h4>Загрузка работы</h4>
                        <p>Перетащите файлы сюда или нажмите для загрузки. Поддерживаемые форматы: JPG, PNG, JPEG.</p>
                    </div>

                    <!-- Форма для загрузки файла -->
                    <form id="file-upload-form" action="{{ route('upload', $course->id) }}" method="POST"
                          enctype="multipart/form-data" class="uploader">
                        @csrf
                        <label for="fileInput" id="dropzone" class="file-dropzone w-100">
                            <input type="file" id="fileInput" name="file" class="d-none" accept="image/*">
                            <div class="upload-icon">
                                <i class="ti-cloud-up"></i>
                            </div>
                            <p class="upload-text">Загрузить файл</p>
                            <span class="small text-muted">Перетащите файл сюда</span>
                            <div id="file-list" class="mt-3"></div>
                        </label>

                        <!-- Кнопка загрузки -->
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary" id="upload-button" disabled>Загрузить</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!--====  End of Fun Facts  ====-->
    @if($course->test)
        {{--======== Test section ========--}}
        <section class="test-info-section section pt-0">
            <div class="container">
                <div class="row align-items-center"> <!-- Выравниваем элементы по центру вертикально -->
                    <div class="col-12 col-lg-6">
                        <div class="block">
                            <div class="title">
                                <h2>{{$course->test->name}}</h2>
                            </div>

                            <!-- Test Description -->
                            <div class="test-description mb-4">
                                <p>{{$course->test->description}}</p>
                            </div>

                            <!-- Call to Action Button -->
                            <div class="mt-4">
                                <a href="{{ route('questions', $course->test->id) }}" class="btn btn-main-md"
                                   target="_blank">Перейти к
                                    тесту</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="col-12 col-lg-6">
                        <div class="test-image">
                            <img src="/storage/public/TestImage/{{$course->test->image}}" alt="{{$course->test->image}}"
                                 class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($course->works->isNotEmpty())
        <!--=============================
    =            Gallery            =
    ==============================-->
        <section class="section gallery pt-0" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">Галерея работ</h2>
                        <div class="gallery-slider owl-carousel owl-theme mt-3">
                            @foreach($course->works as $work)
                                <div class="item">
                                    <div class="image">
                                        <img data-fancybox="gallery" href="/storage/public/works/{{$work->works}}"
                                             class="img-fluid"
                                             src="/storage/public/works/{{$work->works}}" alt="{{$work->works}}"
                                             data-caption="Автор: {{$work->user->name}} {{$work->user->surname}}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--====  End of Gallery  ====-->
    @endif
</x-Layout>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dropzone = document.getElementById("dropzone");
        const fileInput = document.getElementById("fileInput");
        const fileList = document.getElementById("file-list");
        const uploadButton = document.getElementById("upload-button");

        // Drag-and-drop события
        dropzone.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropzone.classList.add("dragover");
        });

        dropzone.addEventListener("dragleave", () => {
            dropzone.classList.remove("dragover");
        });

        dropzone.addEventListener("drop", (e) => {
            e.preventDefault();
            dropzone.classList.remove("dragover");
            handleFiles(e.dataTransfer.files);
        });

        // Обработка input файлов
        fileInput.addEventListener("change", () => {
            handleFiles(fileInput.files);
        });

        // Функция обработки файлов
        function handleFiles(files) {
            fileList.innerHTML = ""; // Очищаем предыдущие результаты
            const file = files[0]; // Берём только первый файл
            if (file) {
                const listItem = document.createElement("div");
                listItem.textContent = `✔ ${file.name}`;
                fileList.appendChild(listItem);
                uploadButton.disabled = false; // Активировать кнопку
            } else {
                uploadButton.disabled = true; // Отключить кнопку
            }
        }
    });
</script>
