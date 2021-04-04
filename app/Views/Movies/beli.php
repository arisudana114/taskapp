<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Beli<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1>Beli</h1>

<h4><?= $movies['title']; ?></h4>

<?= $this->endSection(); ?>