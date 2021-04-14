<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Detail<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1>Movie</h1>

<h4><?= $movies['title']; ?></h4>
<div>
    <img src="<?= base_url("images/" . $movies['image']) ?>" alt="" height="300rem">
    <h4>Harga tiket: <?= $movies['price'] ?></h4>
</div>

<p>Pilih kursi</p>

<?= form_open(site_url("/movies/ticket_process/" . $movies['id'])); ?>

<?= $this->include("Movies/form"); ?>

<button class="btn btn-info">Beli</button>
<a href="<?= site_url("movies") ?>" class="btn btn-info">Kembali</a>

</form>

<!-- <a href="<?= site_url("/movies/ticket_process/" . $movies['id']) ?>" class="btn btn-info">Beli</a> -->

<?= $this->endSection(); ?>