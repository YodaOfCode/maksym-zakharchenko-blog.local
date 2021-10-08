<section title="Recently Viewed Products">
    <h2>Recently Viewed Products</h2>
    <?php foreach (blogGetNewPost('date') as $newDate) : ?>
    <div class="product-list">
        <div class="post">
            <a href="/<?= $newDate['url'] ?>" title="<?= $newDate['name'] ?>">
                <img src="#" alt="<?= $newDate['name'] ?>" width="200"/>
            </a>
            <a href="/<?= $newDate['url'] ?>" title="Product 1"><?= $newDate['name'] ?></a>
            <span>Publicated: <?= $newDate['date'] ?> days ago</span>
            <button type="button"><a href="<?= $newDate['url'] ?>">Read more</a></button>
        </div>
</section>
    <?php endforeach; ?>
