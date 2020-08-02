<main role="main">
<div class="container">
    <h1 class="mt-5"><?= esc($title); ?></h1>

    <?php if (! empty($blog) && is_array($blog)) : ?>

        <?php foreach ($blog as $blog_item): ?>

            <h3><?= esc($blog_item['title']); ?></h3> <tt><?= esc($blog_item['published']); ?></tt>

            <div class="main">
                <?php echo(substr($blog_item['body'], 0, 250)).'...'; ?>
            </div>
            <p><a href="/blog/<?= esc($blog_item['slug'], 'url'); ?>">View article</a></p>

        <?php endforeach; ?>

        <?= $pager->simpleLinks() ?>

    <?php else : ?>

        <h3>No News</h3>

        <p>Unable to find any news for you.</p>

    <?php endif ?>
</div>
</main>