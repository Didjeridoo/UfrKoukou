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
    <link rel="stylesheet" media="screen" href="<?= asset_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" media="screen" href="<?= asset_url('css/font.css') ?>">
    <link rel="stylesheet" media="screen" href="<?= asset_url('css/common.css') ?>">
    <!--<link rel="stylesheet" media="screen" href="<?= asset_url('css/theme.css') ?>">-->
    <?= $this->template->stylesheet ?>
    <!--[if lte IE 7]>
        <script src="js/lte-ie7.js"></script>
    <![endif]-->
</head>
<body>
    <div id="topbar" class="fixed">
        <div class="inner">
            <div id="logo" class="pull-left">
                <a href="">
                    <div class="dandelion"></div>
                </a>
            </div>
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
        </div>
        <div class="top-divider stripes"></div>
    </div>
    <div id="main" class="container">
        <div id="left-col">
            <a id="left-close-top" class="col-btn top-divider" href="">
                <div class="arrows-right">
                    <div class="arrow"></div><div class="arrow"></div><div class="arrow"></div>
                </div>
            </a>
            <nav id="nav">
                <ul class="unstylled">
                    <li style="width: 100%;"><a class="active" href=""><span aria-hidden="true" class="icon-home"></span><span>Accueil</span></a></li>
                    <li style="width: 100%;">
                        <a href=""><span aria-hidden="true" class="icon-menu-2"></span><span>Rubriques</span><span class="caret"></span></a>
                        <div class="menu-bloc menu-close" style="left: -200px; width: 200px;">
                            <ul class="unstylled">
                                <li><a href=""><span><span class="link-circle"></span></span>Test</a></li>
                                <li><a href=""><span><span class="link-circle"></span></span>Test</a></li>
                                <li><a href=""><span><span class="link-circle"></span></span>Test</a></li>
                            </ul>
                        </div>
                    </li>
                    <li style="width: 100%;">
                        <a href=""><span aria-hidden="true" class="icon-stats"></span><span>Statistiques</span><span class="caret"></span></a>
                        <div class="menu-bloc menu-close" style="left: -200px; width: 200px;">
                            <ul class="unstylled">
                                <li><a href=""><span><span class="link-circle"></span></span>Utilisateurs</a></li>
                                <li><a href=""><span><span class="link-circle"></span></span>Tchats</a></li>
                            </ul>
                        </div>
                    </li>
                    <li style="width: 100%;">
                        <div class="search-bloc">
                            <span aria-hidden="true" class="icon-search"></span>
                            <input type="text" id="friends_name" name="friends_name" placeholder="Rechercher ...">
                        </div>
                    </li>
                    <li style="width: 100%;"><a href=""><span aria-hidden="true" class="icon-home"></span><span>Lien</span></a></li>
                </ul>
            </nav>
        </div>
        <div id="main-col">
            <div class="top-divider"></div>
            <div class="inner">
                <?= $this->session->flashdata('user') ?>
                <?= $this->template->content ?>
            </div>
        </div>
        <div id="right-col">
            <div class="top-divider"></div>

        </div>
    </div>
    <script type="text/javascript" src="<?= asset_url('js/jquery-1.9.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?= asset_url('js/jquery.cookie.js') ?>"></script>
    <script type="text/javascript" src="<?= asset_url('js/main.js') ?>"></script>
</body>
</html>