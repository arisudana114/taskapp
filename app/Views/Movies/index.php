<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Movies<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1>Movies</h1>
<div class="row">
    <?php foreach ($movies as $movie) : ?>
        <div class="col-sm-3" style="margin-bottom: 50px; margin-top:50px">
            <img src="<?= base_url("images/" . $movie['image']) ?>" width="200px" height="300px">
            <h5><?= $movie['title'] ?></h5>
            <a href="<?= site_url("movies/show/" . $movie['id']) ?>" class="btn btn-primary">Detail</a>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>