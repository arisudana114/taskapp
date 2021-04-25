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
        <div class="ml-2 mt-4 mb-0">
            <a href="https://www.youtube.com/watch?v=wGsOsciMoG0&ab_channel=DaikuMediaAnime" target="_blank" class="button is-danger mt-4 mb-0">Tonton trailer</a>
        </div>
    </div>
    <div class="columns">
        <div class="column is-6 mb-6">
            <div class="tabs is-boxed">
                <ul>
                    <li class="is-active" data-target="23-april"><a>23 April 2020</a></li>
                    <li><a>24 April 2020</a></li>
                    <li><a>25 April 2020</a></li>
                    <li><a>26 April 2020</a></li>
                </ul>
            </div>
            <div class="px-2" id="tab-content">
                <div id="product-details">
                    <h3 class="is-size-5 title">23 April</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat alias atque distinctio? Vel aliquam ipsa corporis, quia possimus veniam. Sequi et perferendis iure pariatur! Quibusdam enim alias deleniti inventore.</p>
                </div>
                <div id="product-details">
                    <h3 class="is-size-5 title">24 April</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat alias atque distinctio? Vel aliquam ipsa corporis, quia possimus veniam. Sequi et perferendis iure pariatur! Quibusdam enim alias deleniti inventore.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</form>

<!-- <a href="<?= site_url("movies/detail2/" . $movies['id']) ?>" class="button is-danger is-small mt-4 mb-6">Lanjut</a> -->


<?= $this->endSection(); ?>