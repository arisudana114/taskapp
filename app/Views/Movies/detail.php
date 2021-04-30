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
                <strong class="is-size-2 mb-2"><?= $movies['title']; ?></strong>
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
            <a href="https://www.youtube.com/watch?v=wGsOsciMoG0&ab_channel=DaikuMediaAnime" target="_blank" class="button is-danger mt-4 mb-6">Tonton trailer</a>
        </div>
    </div>
    <div class="columns">
        <div class="column is-6 mb-6">
            <div class="tabs is-boxed">
                <ul>
                    <?php $counter = 0 ?>
                    <?php foreach ($movies2->getResult() as $movie) : ?>
                        <?php if ($movie->title == $movies['title']) : ?>
                            <li class="<?= $counter > 0 ? "no" : "is-active"; ?>" data-target="<?= $movie->show_date; ?>"><a><?= $movie->show_date; ?></a></li>
                            <?php $counter++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <!-- <li class="is-active" data-target="23-april"><a>23 April 2020</a></li>
                    <li data-target="24-april"><a>24 April 2020</a></li>
                    <li data-target="25-april"><a>25 April 2020</a></li>
                    <li data-target="26-april"><a>26 April 2020</a></li> -->
                </ul>
            </div>
            <div class="px-2" id="tab-content">
                <?php $counter2 = 0 ?>
                <?php foreach ($movies2->getResult() as $movie) : ?>
                    <?php if ($movie->title == $movies['title']) : ?>
                        <div id="<?= $movie->show_date; ?>" class="<?= $counter2 > 0 ? "is-hidden" : "no"; ?>">
                            <h3 class="is-size-5 title"><?= $movie->cinema_name; ?></h3>
                            <a href="#" id="show-time" class="button is-danger is-outlined mr-4"><?= $movie->show_time; ?></a>
                        </div>
                        <?php $counter2++; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                <!-- <div id="23-april">
                    <h3 class="is-size-5 title">Grand Indonesia</h3>
                    <a href="#" id="show-time" class="button is-danger is-outlined mr-4">11:45</a>
                    <a href="#" class="button is-danger is-outlined mr-4 ">13:25</a>
                    <a href="#" class="button is-danger is-outlined mr-4">15:55</a>
                </div>
                <div id="24-april" class="is-hidden">
                    <h3 class="is-size-5 title">Central Park</h3>
                    <a href="#" class="button is-danger is-outlined mr-4">11:45</a>
                    <a href="#" class="button is-danger is-outlined mr-4 ">13:25</a>
                    <a href="#" class="button is-danger is-outlined mr-4">15:55</a>
                </div>
                <div id="25-april" class="is-hidden">
                    <h3 class="is-size-5 title">AEON Jakarta Garden City</h3>
                    <a href="#" class="button is-danger is-outlined mr-4">11:45</a>
                    <a href="#" class="button is-danger is-outlined mr-4 ">13:25</a>
                    <a href="#" class="button is-danger is-outlined mr-4">15:55</a>
                </div>
                <div id="26-april" class="is-hidden">
                    <h3 class="is-size-5 title">Sunter Mall</h3>
                    <a href="#" class="button is-danger is-outlined mr-4">11:45</a>
                    <a href="#" class="button is-danger is-outlined mr-4 ">13:25</a>
                    <a href="#" class="button is-danger is-outlined mr-4">15:55</a> -->
            </div>
        </div>
    </div>
</div>
</div>

</form>

<!-- modal -->
<div class="modal">
    <div class="modal-background py-5 px-5"></div>
    <div class="modal-content has-background-white py-5 px-5">
        <div class="columns">
            <div class="column is-11 box mb-5"></div>
        </div>
        <div class="columns">
            <div class="column is-8 box mr-4 mb-0">
                <div class="columns">
                    <div class="column is-8 box mx-5 mt-5 has-background-danger">
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-8 mx-5 mt-5">

                    </div>
                </div>
                <div class="columns">
                    <div class="column is-8 box mx-5 my-5">
                        <?= form_open(site_url("/movies/ticket_process/" . $movies['id'])); ?>
                        <?= $this->include("Movies/form"); ?>
                    </div>
                </div>
            </div>
            <div class="column is-3 box">
                <div class="columns">
                    <div class="column is-3">
                        <img src="<?= base_url("images/" . $movies['image']) ?>">
                    </div>
                    <div class="column is-8">
                        <strong class="is-size-5"><?= $movies['title']; ?></strong>
                        <p>Cinema: Aeon JGC</p>
                        <p>Date & Time: 25 April 14:30</p>
                        <p>Studio: Studio 4</p>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <b>Seat number</b>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <div class="seat-number"></div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <b class="seat-amount is-size-6">0 Seats selected</b>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <div><b class="price is-size-6"></b></div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <button class="button is-danger">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</form>
<!-- <a href="<?= site_url("movies/detail2/" . $movies['id']) ?>" class="button is-danger is-small mt-4 mb-6">Lanjut</a> -->

<?= $this->endSection(); ?>