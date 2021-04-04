<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Beli<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1>Beli</h1>

<?= form_open("/movies/ticket_process/" . $movies['id']); ?>

<div>
    <label for="movies_id">Nama</label>
    <input type="text" name="nama" id="nama" value="">
</div>

<button>Save</button>
<a href="<?= site_url("/movies") ?>">Batal</a>

</form>



<?= $this->endSection(); ?>