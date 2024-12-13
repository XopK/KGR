<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.2.7/css/froala_editor.pkgd.min.css" rel="stylesheet">

<x-layout>
    <div class="d-flex flex-column min-vh-100 mt-2">
        <section class="addPost mt-3">
            <div class="container ">
                <h2>Создать новый пост</h2>
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title" required
                               placeholder="Введите заголовок поста">
                    </div>

                    <!-- Кнопка для выбора категории -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Категория</label>
                        <select id="category" name="category" class="form-control" required>
                            <option value="programming">Программирование</option>
                            <option value="design">Дизайн</option>
                            <option value="marketing">Маркетинг</option>
                        </select>
                    </div>

                    <!-- Quill.js Editor -->
                    <div class="mb-3">
                        <label for="content" class="form-label">Содержимое поста</label>
                        <textarea id="content" name="content"></textarea>
                    </div>

                    <!-- Кнопка для отправки формы -->
                    <button type="submit" class="btn btn-primary">Создать пост</button>
                </form>
            </div>

        </section>
    </div>
</x-layout>

<script src="https://cdn.jsdelivr.net/npm/froala-editor@3.2.7/js/froala_editor.pkgd.min.js"></script>


<script>
    new FroalaEditor('#content', {
        toolbarButtons: ['bold', 'italic', 'underline', 'formatOL', 'formatUL', 'insertLink']
    });
</script>
