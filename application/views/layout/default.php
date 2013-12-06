<!DOCTYPE html>
<html>
<head>
    <!-- CHARTSET -->
    <meta charset=utf-8>
    <!-- TITLE -->
    <title><?= $this->template->title->default("Wishop") ?></title>
    <!-- METAS -->
    <meta name="robots" content="no-cache">
    <meta name="description" content="<?= $this->template->description; ?>">
    <meta name="keywords" content="serveur, soul of warcraft, minecraft">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <?= $this->template->meta ?>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?= asset_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= asset_url('css/bootstrap-theme.min.css') ?>">
    <?= $this->template->stylesheet ?>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar-collapse -->
    <?= $this->session->flashdata('user') ?>
    <?= $this->template->content ?>
</nav>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?= asset_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>