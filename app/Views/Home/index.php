<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Home<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<div class="columns">
    <?php foreach ($movies as $movie) : ?>
        <div class="column is-3">
            <img src="<?= base_url("images/" . $movie['image']) ?>" width="200px" height="300px">
            <h5><?= $movie['title'] ?></h5>
            <a href="<?= site_url("movies/detail/" . $movie['id']) ?>" class="btn btn-primary">Detail</a>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>