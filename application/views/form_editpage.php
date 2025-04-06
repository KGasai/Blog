<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <h2 class="text-center">Редактировать пост </h2>
        <form action="Admin/updatePost" enctype="multipart/form-data" method="post" style="width:400px;"
            class="ms-auto me-auto">
            <input type="hidden" name="id_post" value="<?= $id_post; ?>">
            <div class="mb-3">
                <label for="form-control">Название поста:</label>
                <input type="text" name="title_post" id="form-control" class="form-control">
            </div>
            <div class="mb-3">
                <label for="form-control">Текст поста:</label>
                <textarea name="text_post" id="form-control" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="form-control">Изображение поста:</label>
                <input type="file" name="img_post" id="form-control" class="form-control"
                    accept="image/png, image/jpeg">
            </div>
            <button type="submit" class="btn btn-success">Редактировать</button>
        </form>
    </div>
    <div class="col-1"></div>
</div>