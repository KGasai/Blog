<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="text-center">
            <?php foreach ($post as $the_post): ?>
                
                <?php if ($the_post['path_img'] ): ?>
                    <img src="<?= $the_post['path_img']; ?>" alt="Изображение" class="img-thumbnail" style="width: 600px;">
                <?php endif; ?>
                <p><?= $the_post['title_post']; ?></p>
                <p><?= $the_post['text_post']; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-1"></div>
</div>