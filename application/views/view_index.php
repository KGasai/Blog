<h2 class="text-center">Главная</h2>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="row d-flex align-items-center">
            <?php foreach ($posts as $post): ?>
                <div class="col-4">
                    <a href="Main/pagePost?id_post=<?=$post['id_post'];?>" >
                        <img src="<?=$post['path_img'];?>" alt="Изображение" class="img-thumbnail">
                        <p class="text-center"><?= $post['title_post']; ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-1"></div>
</div>