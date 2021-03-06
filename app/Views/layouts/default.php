<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection("title"); ?></title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css" integrity="sha256-O8SsQwDg1R10WnKJNyYgd9J3rlom+YSVcGbEF5RmfFk=" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/auto-complete.css') ?>">
    <link rel="stylesheet" href="<?= site_url('/css/mystyles.css') ?>">
</head>

<body>

    <nav class="navbar has-shadow is-white px-2">
        <!--  logo / brand -->
        <div class="navbar-brand">
            <a href="<?= site_url("/") ?>" class="navbar-item">
                <img src="<?= base_url("images/logo.png") ?>" alt="site logo" style="max-height: 70px" class="py-2 px-2">
            </a>
            <a class="navbar-burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="navbar-menu" id="nav-links">
            <div class="navbar-end">
                <?php if (current_user()) : ?>

                    <div class="navbar-item">Hello <?= esc(current_user()->name); ?></div>
                    <a class="navbar-item" href="<?= site_url("/profile/show") ?>">Profile</a>

                    <?php if (current_user()->is_admin) : ?>
                        <a href="<?= site_url("/admin/users") ?>">Users</a>
                    <?php endif; ?>

                    <a class="navbar-item" href="<?= site_url("/movies") ?>">Movies</a>
                    <a class="navbar-item" href="<?= site_url("/logout") ?>">Log out</a>

                <?php else : ?>

                    <a class="navbar-item" href="<?= site_url("/signup") ?>">Sign up</a>
                    <a class="navbar-item" href="<?= site_url("/login") ?>">Log in</a>

                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!--  breadcrumbs -->
    <div class="section pt-4 pb-0">
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="<?= site_url("/") ?>">Home</a></li>
                <li><a href="<?= site_url("/movies") ?>" aria-current="page">Movies</a></li>
            </ul>
        </nav>
    </div>

    <?php if (session()->has('warning')) : ?>

        <div class="notification is-warning is-light">
            <button class="delete"></button>
            <?= session('warning'); ?>
        </div>

    <?php endif ?>

    <?php if (session()->has('info')) : ?>

        <div class="notification is-info is-light">
            <button class="delete"></button>
            <?= session('info'); ?>
        </div>

    <?php endif ?>

    <?php if (session()->has('error')) : ?>

        <div class="notification is-danger is-light">
            <button class="delete"></button>
            <?= session('error'); ?>
        </div>

    <?php endif ?>

    <?= $this->renderSection("content"); ?>

    <script src="<?= site_url('/js/app.js') ?>"></script>
    <script src="<?= site_url('/js/display.js') ?>"></script>

</body>

</html>