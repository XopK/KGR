<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet"/>
<style>
    #title::placeholder {
        font-size: 16px;
    }
</style>
<x-Layout>
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="addPost mt-3">
            <div class="container">
                <h2>Создать новый пост</h2>
                <form method="POST" action="{{ route('add_post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Напишите заголовок поста" required>
                    </div>

                    <!-- Кнопка для выбора категории -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Категория</label>
                        <select id="category" name="category" class="form-control" required>
                            @forelse($categories as $category )
                                <option value="{{$category->id}}">{{$category->name_category}}</option>
                            @empty
                                <option>Категории отсутствуют</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Выберите изображение</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/*">
                            <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите файл</label>
                        </div>
                        <small class="form-text text-muted">Поддерживаемые форматы: jpg, png, jpeg</small>
                    </div>

                    <!-- Quill.js Editor -->
                    <div class="mb-3">
                        <label for="editor" class="form-label">Содержимое поста</label>
                        <div id="editor" style="height: 300px;">
                            <p>Напишите здесь что-нибудь</p>
                        </div>
                    </div>

                    <input type="hidden" name="content_post" id="content">

                    <!-- Кнопка для отправки формы -->
                    <button type="submit" class="btn btn-primary">Создать пост</button>
                </form>
            </div>
        </section>
    </div>
</x-Layout>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>

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

    document.getElementById('photo').addEventListener('change', function (e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : 'Выберите файл';
        e.target.nextElementSibling.innerText = fileName;
    });

    document.querySelector('form').onsubmit = function () {
        const content = quill.root.innerHTML;

        document.getElementById('content').value = content;
    };


</script>
