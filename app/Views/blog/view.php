<main role="main">
<div class="container">
<h1 class="mt-5"><?= esc($blog['title']); ?></h1>
<?= esc($blog['body'], 'raw'); ?>
<br />
<a href="/blog" class="btn btn-secondary">Back To Blog</a>
</div>
</main>