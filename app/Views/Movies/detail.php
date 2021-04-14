<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Detail<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<div class="container mt-6">
    <div class="columns">
        <div class="column is-3">
            <img src="<?= base_url("images/" . $movies['image']) ?>">
        </div>
        <div class="column is-5">
            <h1>
                <strong><?= $movies['title']; ?></strong>
                <p class="mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et laudantium corporis ipsam officiis tenetur laboriosam soluta. Itaque dicta adipisci nam facilis ex aspernatur cupiditate voluptate earum reprehenderit. Quod, ab quae!
                    Aut velit minus non consequatur voluptate facilis accusantium adipisci ut itaque? Voluptate numquam, tempore quia tenetur, nisi ea rerum perferendis, culpa eum aut earum. Excepturi earum ex doloribus non officiis.
                </p>
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="columns">
        <div class="ml-2 mt-4 mb-5">
            <h1 class="has-background-danger has-text-white px-2 py-2">Pilih kursi</h1>
        </div>
    </div>
    <div class="columns">
        <div class="column is-8 box ml-2">
            <?= form_open(site_url("/movies/ticket_process/" . $movies['id'])); ?>
            <?= $this->include("Movies/form"); ?>
        </div>
    </div>
    <div>
        <button class="button is-danger is-small mt-4">Beli</button>
        <a href="<?= site_url("movies") ?>" class="button is-danger is-small mb-6 mt-4">Kembali</a>
    </div>
</div>


</form>

<?= $this->endSection(); ?>