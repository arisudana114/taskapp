<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Bulma<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<div class="columns">
    <div class="column">
        <p>First column</p>
        <p>First column</p>
        <p>First column</p>
        <p>First column</p>
        <p>First column</p>
        <p>First column</p>
    </div>
    <div class=" column">
        Second column
    </div>
    <div class="column">
        Third column
    </div>
    <div class="column">
        Fourth column
    </div>
</div>

<?= $this->endSection(); ?>