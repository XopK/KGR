<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet"/>
<style>
    #title::placeholder {
        font-size: 16px;
    }
</style>

<x-profile>
    <div class="col-md-8 fix-edit-block">
        <form method="POST" action="{{ route('update_post', $post->id) }}" enctype="multipart/form-data">
            @csrf
            <!-- Заголовок -->
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" required>
            </div>

            <!-- Категория -->
            <div class="mb-3">
                <label for="category" class="form-label">Категория</label>
                <select id="category" name="category" class="form-control" required>
                    @forelse($categories as $category)
                        <option
                            value="{{$category->id}}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{$category->name_category}}</option>
                    @empty
                        <option value="" disabled selected>Категории отсутсвуют</option>
                    @endforelse

                </select>
            </div>

            <!-- Текущее изображение и загрузка нового -->
            <div class="mb-3">
                <img id="current-photo" src="/storage/public/photoPosts/{{$post->photo}}" class="img-fluid mb-3"
                     style="max-height: 200px; border-radius: 5px;" alt="{{$post->photo}}">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/*">
                    <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите новый файл</label>
                </div>
                <small class="form-text text-muted">Поддерживаемые форматы: jpg, png, jpeg</small>
            </div>

            <!-- Quill.js Editor -->
            <div class="mb-3">
                <label for="editor" class="form-label">Содержимое поста</label>
                <div id="editor" style="height: 400px; border: 1px solid #ced4da; border-radius: 5px;">
                    {!! $post->content !!}
                </div>
            </div>

            <input type="hidden" name="content_post" id="content" value="">

            <!-- Кнопка сохранения -->
            <div class="text-center">
                <button type="submit" class="btn btn-success w-50">Сохранить изменения</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
</x-profile>
<script>
    // Инициализация редактора Quill с текущим содержимым
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote'],
                ['link'],
            ]
        }
    });

    // Обновление скрытого поля при отправке формы
    $('form').on('submit', function () {
        const content = quill.root.innerHTML;
        $('#content').val(content);
    });

    // Обновление имени файла и замена изображения
    $('#photo').on('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                $('#current-photo').attr('src', e.target.result); // Обновление изображения
            };

            reader.readAsDataURL(file); // Чтение файла как URL
            $(this).next('.custom-file-label').text(file.name); // Обновление имени файла
        } else {
            $('#current-photo').attr('src', '/images/example-image.jpg'); // Возврат к старому изображению
            $(this).next('.custom-file-label').text('Выберите новый файл');
        }
    });
</script>
