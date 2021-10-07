<section title="Post">
    <h1><?= $data['name'] ?></h1>
    <div class="post-list">
        <?php foreach (catalogGetCategoryPost($data['category_id']) as $post) : ?>
            <div class="post">
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>">
                    <img src="/post-placeholder.png" alt="<?= $post['name'] ?>" width="200"/>
                </a>
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>"></a>
                <p><?= $post['description'] ?></p>
                <span><?= $post['author_name'] ?></span>
                <span><?= $post['date'] ?></span>
                <button type="button"><a href="/<?= $post['url'] ?>">Read more</a></button>
            </div>
        <?php endforeach; ?>
    </div>
</section>