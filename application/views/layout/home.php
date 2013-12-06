<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- CHARTSET -->
    <meta charset=utf-8>
    <title><?= $this->template->title->default("Wishop") ?></title>
    <!-- METAS -->
    <meta name="robots" content="no-cache">
    <meta name="description" content="Wishop - Find your things">
    <meta name="keywords" content="wishop, social, network, sell, buy">
    <meta name="author" content="fmif">
    <?= $this->template->meta ?>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" media="screen" href="<?= asset_url('css/font.css') ?>">
    <link rel="stylesheet" media="screen" href="<?= asset_url('css/common.css') ?>">
    <?= $this->template->stylesheet ?>
    <!--[if lte IE 7]>
        <script src="js/lte-ie7.js"></script>
    <![endif]-->
</head>
<body id="home">

<div id="topbar" class="fixed">
    <div class="inner">
        <div id="logo" class="pull-left">
            <a href="">
                <div class="dandelion"></div>
            </a>
        </div>
        <?php if ($this->auth->loggedin()): ?>
            <div id="panel-user" class="pull-right">
                <div class="bubble">
                    <div>
                        <a href="">1</a>
                    </div>
                    <span class="caret caret-right"></span>
                    <span class="caret caret-right"></span>
                </div>
                <div class="avatar-frame">
                    <a href="">
                        <img src="<?= asset_url('img/template/no_avatar.png') ?>" style="width: 38px; height: 38px;">
                    </a>
                </div>
                <div id="user-dropdown" class="dropdown">
                    <a href="" class="btn-dropdown"><span class="caret"></span></a>
                    <div class="dropdown-content dropdown-right" style="display: none;">
                        <ul class="unstylled">
                            <li><a href=""><span aria-hidden="true" class="icon-eye-2"></span>Profil</a></li>
                            <li><a href=""><span aria-hidden="true" class="icon-cog"></span>Mon compte</a></li>
                            <li class="danger"><a href="<?= site_url("user/logout"); ?>"><span aria-hidden="true" class="icon-switch"></span>Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div id="login" class="pull-right">
                <form action="<?= site_url("user/login"); ?>" method="post" class="inline">
                    <div class="input">
                        <input type="text" name="username" placeholder="Pseudo">
                    </div>
                    <div class="input">
                        <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="btn btn-action">
                        <button type="submit">Connexion</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </div>
    <div class="top-divider stripes"></div>
</div>
<div id="main" class="container">
    <div id="main-col">
        <div class="top-divider"></div>
        <div id="animation">
            <div id="phase1">
                <div class="content">
                    <div class="background">

                    </div>
                </div>
                <img src="">
            </div>
            <div id="phase2">
                <div class="content">
                    <div class="background">

                    </div>
                </div>
                <img src="">
            </div>
            <div id="phase3">
                <div class="content">
                    <div class="background">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
</body>
</html>