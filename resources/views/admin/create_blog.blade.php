<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet"/>
<style>
    #title::placeholder {
        font-size: 16px;
    }

    #editor {
        font-family: 'nunito', sans-serif;
    }
</style>
<x-admin>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Создать пост</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Заголовок</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           placeholder="Введите заголовок">
                                </div>

                                <div class="form-group">
                                    <label for="image">Превью поста</label>
                                    <div class="custom-file">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="photo" name="photo_preview"
                                                   accept="image/*">
                                            <label class="custom-file-label" for="photo" data-browse="Обзор">Выберите
                                                файл</label>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Поддерживаемые форматы: jpg, png, jpeg</small>
                                </div>

                                <div class="form-group">
                                    <label for="description">Краткое описание</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                           placeholder="Введите краткое описание">
                                </div>

                                <div class="form-group">
                                    <label for="content">Содержание</label>
                                    <div id="editor" style="height: 400px"></div>
                                    <textarea name="content" id="content" style="display: none;"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary ml-2">Создать пост</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{'header': '1'}, {'header': '2'}],
                [{'list': 'ordered'}, {'list': 'bullet'}],
                ['bold', 'italic', 'underline'],
                ['link'],
                [{'align': []}],
                ['blockquote', 'code-block'],
                [{'direction': 'rtl'}],
                ['image', 'video']
            ]
        }
    });

    // Перед отправкой формы синхронизируем данные редактора с текстовым полем
    document.querySelector('form').onsubmit = function () {
        var content = quill.root.innerHTML; // Получаем HTML содержимое
        document.querySelector('#content').value = content;
    };
</script>
