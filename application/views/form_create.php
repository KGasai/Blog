<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <h2 class="text-center">Создать пост </h2>
        <form action="Admin/addPost" enctype="multipart/form-data" method="post" style="width:400px;" class="ms-auto me-auto">
            <div class="mb-3">
                <label for="form-control">Название поста:</label>
                <input type="text" name="title_post" id="form-control" class="form-control">
            </div>
            <div class="mb-3">
                <label for="form-control">Текст поста:</label>
                <input type="text" name="text_post" id="form-control" class="form-control">
            </div>
            <div class="mb-3">
                <label for="form-control">Тег поста:</label>
                <select name="id_tag" class="form-control">
                <?php foreach($tags as $tag): ?>
                        <option value="<?= $tag['id_tag'];?>"><?= $tag['title_tag'];?></option>
                    <?php endforeach; ?>
                </select>
               
            </div>

            <div class="mb-3">
                <label for="form-control">Изображение поста:</label>
                <input type="file" name="img_post" id="form-control" class="form-control"  accept="image/png, image/jpeg">
            </div>
            <button type="submit" class="btn btn-success">Войти</button> 
        </form>
    </div>
    <div class="col-1"></div>
</div>