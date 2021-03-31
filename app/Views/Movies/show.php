<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Movies<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1>Movie</h1>

<h4><?= $movies['title']; ?></h4>
<div>
    <img src="<?= base_url("images/" . $movies['image']) ?>" alt="" height="300rem">
    <h2>Harga tiket: <?= $movies['price'] ?></h2>
</div>
<a href="<?= site_url("Movies/beli") ?>" class="btn btn-info">Beli</a>
<a href="<?= site_url("Movies") ?>" class="btn btn-info">Kembali</a>

<?= $this->endSection(); ?>