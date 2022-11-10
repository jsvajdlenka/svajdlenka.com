<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<?php
    const LANG_PARAM = "langID";
    const SLOVAK = "sk";
    const ENGLISH = "en";
    if (!isset($_GET[LANG_PARAM]))
        $lang = SLOVAK;
    else
        $lang = $_GET[LANG_PARAM];

    if (!file_exists('locale/'. $lang . '.php'))
        $lang = SLOVAK;

    $langArray = [];

    include('locale/'. $lang . '.php');
    $photosArray = [
            "2000-Croatia",
            "2000-Family",
            "2001-Wedding",
            "2001-Danube",
            "2002-Alps",
            "2003-Terchova",
            "2003-Nordkapp",
            "2004-Richard",
            "2004-Caverns",
            "2005-Austria",
            "2006-Tunisia",
            "2006-Robert",
            "2007-Croatia",
            "2008-Egypt",
            "2009-Benelux",
            "2010-Britain",
            "2011-Zuberec",
            "2012-Croatia",
            "2013-Denmark",
            "2014-CzechoSlovakia",
            "2015-Prague",
            "2015-Patrik",
            "2015-Slovakia",
            "2015-Italy",
            "2016-Bratislava",
            "2016-Okoc",
            "2017-Slovakia",
            "2018-Barcelona",
            "2019-Slovakia",
            "2020-Slovakia",
            "2021-Denmark",
            "2022-Netherland",
    ];


?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            rel="stylesheet"
            href="css/bootstrap.min.css"
    />
    <link
            rel="stylesheet"
            href="css/bootstrap-icons.css"
    />
    <link
            rel="stylesheet"
            href="css/main.css">
    <title><?php echo $langArray['title']; ?></title>
</head>
<body>
<header>
    <!--Main Navigation-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><?php echo $langArray['title']; ?></a>
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navmenu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#sec-basic" class="nav-link"><?php echo $langArray['menu-basic']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#sec-members" class="nav-link"><?php echo $langArray['menu-members']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#sec-images" class="nav-link"><?php echo $langArray['menu-images']; ?></a>
                    </li>
                    <li id="language" class="nav-item dropdown">
                        <?php if ($lang == SLOVAK) { ?>
                            <a class="nav-link dropdown-toggle" href="?langID=sk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/sk.png">&nbsp;<?php echo $langArray['slovak']; ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" aria-current="true" href="?langID=en"><img src="img/gb.png">&nbsp;<?php echo $langArray['english']; ?></a></li>
                                <li><a class="dropdown-item active" aria-current="true" href="?langID=sk"><img src="img/sk.png">&nbsp;<?php echo $langArray['slovak']; ?></a></li>
                            </ul>
                        <?php } else { ?>
                            <a class="nav-link dropdown-toggle" href="?langID=en" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/gb.png">&nbsp;<?php echo $langArray['english']; ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" aria-current="true" href="?langID=en"><img src="img/gb.png">&nbsp;<?php echo $langArray['english']; ?></a></li>
                                <li><a class="dropdown-item" href="?langID=sk"><img src="img/sk.png">&nbsp;<?php echo $langArray['slovak']; ?></a></li>
                            </ul>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Header image-->
<!--    <div class="bg-image bg-dark" style="-->
<!--              background: url(img/header.jpg) no-repeat center center fixed;-->
<!--              height: 500px;-->
<!--              ">-->
    <div class="bg-image bg-dark">
        <div class="container">
        <img class="img-fluid" src="img/header.jpg">
        </div>
    </div>
</header>

<section id="sec-basic" class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1><?php echo $langArray['menu-basic']; ?></h1>
                <p class="lead my-4">
                    <?php echo $langArray['basic-title']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Family members -->
<section id="sec-members" class="p-5">
    <div class="container">
        <h1><?php echo $langArray['menu-members']; ?></h1>
        <p class="lead my-4">
            <?php echo $langArray['members-title']; ?>
        </p>

        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/richard.jpg" class="img-fluid" alt=""/>
            </div>
            <div class="col-md p-5">
                <h2>Richard Švajdlenka</h2>
                <p class="lead">
                    <?php echo $langArray['richard-lead']; ?>
                </p>
                <p>
                    <?php echo $langArray['richard-desc']; ?>
                </p>
                <p>
                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </p>

                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i> Read More
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>Róbert Švajdlenka</h2>
                <p class="lead">
                    <?php echo $langArray['robert-lead']; ?>
                </p>
                <p>
                    <?php echo $langArray['robert-desc']; ?>
                </p>
                <p>
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-facebook text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i> Read More
                </a>
            </div>
            <div class="col-md">
                <img src="img/robert.jpg" class="img-fluid" alt=""/>
            </div>
        </div>
    </div>
</section>

<section class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/patrik.jpg" class="img-fluid" alt=""/>
            </div>
            <div class="col-md p-5">
                <h2>Patrik Švajdlenka</h2>
                <p class="lead">
                    <?php echo $langArray['patrik-lead']; ?>
                </p>
                <p>
                    <?php echo $langArray['patrik-desc']; ?>
                </p>
                <p>
                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </p>

                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i> Read More
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>Angelika Švajdlenková</h2>
                <p class="lead">
                    <?php echo $langArray['angelika-lead']; ?>
                </p>
                <p>
                    <?php echo $langArray['angelika-desc']; ?>
                </p>
                <p>
                    <a href="#"><i class="bi bi-twitter text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-facebook text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-white mx-1"></i></a>
                    <a href="#"><i class="bi bi-instagram text-white mx-1"></i></a>
                </p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i> Read More
                </a>
            </div>
            <div class="col-md">
                <img src="img/angelika.jpg" class="img-fluid" alt=""/>
            </div>
        </div>
    </div>
</section>

<section class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/juraj.jpg" class="img-fluid" alt=""/>
            </div>
            <div class="col-md p-5">
                <h2>Juraj Švajdlenka</h2>
                <p class="lead">
                    <?php echo $langArray['juraj-lead']; ?>
                </p>
                <p>
                    <?php echo $langArray['juraj-desc']; ?>
                </p>
                <p>
                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </p>

                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i> Read More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Images -->
<section id="sec-images" class="p-5 bg-dark text-light">
    <div id="yearsCarousel" class="carousel slide carousel-fade col-lg-9 mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
<?php foreach ($photosArray as $index => $label) { ?>
    <?php if ($index == 0) { ?>
        <button type="button" data-bs-target="#yearsCarousel" data-bs-slide-to="<?php echo $index; ?>" class="active" aria-current="true" aria-label="<?php echo $label; ?>"></button>
    <?php } else { ?>
        <button type="button" data-bs-target="#yearsCarousel" data-bs-slide-to="<?php echo $index; ?>" aria-label="<?php echo $label; ?>"></button>
    <?php } ?>
<?php } ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($photosArray as $index => $label) { ?>
                <?php if ($index == 0) { ?>
                    <div class="carousel-item active">
                <?php } else { ?>
                    <div class="carousel-item">
                <?php } ?>
                        <img src="img/years/<?php echo $label; ?>.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $langArray[$label.'-header']; ?></h5>
                            <p><?php echo $langArray[$label.'-desc']; ?></p>
                        </div>
                    </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#yearsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#yearsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copyright &copy; 2022 Juraj Švajdlenka</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>

<!--<footer>-->
    <!--Header image-->
<!--    <div class="bg-image bg-dark" style="-->
<!--              background: url(img/footer.jpg) no-repeat center center fixed;-->
<!--              height: 700px;-->
<!--              ">-->
<!--    </div>-->
<!--</footer>-->

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>