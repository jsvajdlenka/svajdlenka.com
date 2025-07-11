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
            "1969-Parents",
            "1971-Child",
            "1978-BasicSchool",
            "1979-Bukova",
            "1986-SPS",
            "1992-University",
            "1997-Norway",
            "1998-Iceland",
            "1999-GreatBritain",
            "2000-CroatiaVodice",
            "2001-Wedding",
            "2001-DanubePassau",
            "2002-ITRegata",
            "2003-Nordkapp",
            "2004-Paris",
            "2004-Richard",
            "2004-SlovakiaCaverns",
            "2005-Neusiedler",
            "2006-Tunisia",
            "2006-Robert",
            "2007-CroatiaOmis",
            "2008-Egypt",
            "2009-Benelux",
            "2010-Ireland",
            "2011-GoralskyDvor",
            "2012-CroatiaNin",
            "2013-Denmark",
            "2014-Caverns",
            "2015-Praha",
            "2015-Patrik",
            "2015-Italy",
            "2016-Dubnik",
            "2017-Sladkovicovo",
            "2018-Kremnica",
            "2019-Birthday",
            "2020-Stiavnica",
            "2021-Denmark",
            "2022-Netherland",
            "2023-Finland",
            "2024-Montenegro",
    ];


?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            rel="stylesheet"
            href="https://svajdlenka.com/css/bootstrap.min.css"
    />
    <link
            rel="stylesheet"
            href="css/bootstrap-icons.css"
    />
    <link
            rel="stylesheet"
            href="https://svajdlenka.com/css/main.css">
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
                        <a href="http://svajdlenka.com/?langID=<?php echo $lang; ?>" class="nav-link"><?php echo $langArray['menu-home']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#sec-basic" class="nav-link"><?php echo $langArray['menu-basic']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#sec-cv" class="nav-link"><?php echo $langArray['menu-cv']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#sec-images" class="nav-link"><?php echo $langArray['menu-images']; ?></a>
                    </li>
                    <li id="language" class="nav-item dropdown">
                        <?php if ($lang == SLOVAK) { ?>
                            <a class="nav-link dropdown-toggle" href="?langID=sk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://svajdlenka.com/img/sk.png">&nbsp;<?php echo $langArray['slovak']; ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" aria-current="true" href="?langID=en"><img src="https://svajdlenka.com/img/gb.png">&nbsp;<?php echo $langArray['english']; ?></a></li>
                                <li><a class="dropdown-item active" aria-current="true" href="?langID=sk"><img src="https://svajdlenka.com/img/sk.png">&nbsp;<?php echo $langArray['slovak']; ?></a></li>
                            </ul>
                        <?php } else { ?>
                            <a class="nav-link dropdown-toggle" href="?langID=en" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://svajdlenka.com/img/gb.png">&nbsp;<?php echo $langArray['english']; ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" aria-current="true" href="?langID=en"><img src="https://svajdlenka.com/img/gb.png">&nbsp;<?php echo $langArray['english']; ?></a></li>
                                <li><a class="dropdown-item" href="?langID=sk"><img src="https://svajdlenka.com/img/sk.png">&nbsp;<?php echo $langArray['slovak']; ?></a></li>
                            </ul>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Header image-->
    <div class="bg-image bg-dark">
        <div class="container">
        <img class="img-fluid" src="img/jsheader.jpg">
        </div>
    </div>
</header>

<section id="sec-basic" class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1><?php echo $langArray['basic-title']; ?></h1>
                <hr>
                <p class="lead my-4">
                    <?php echo $langArray['basic-desc']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CV -->
<section id="sec-cv" class="p-5">
    <div class="container">
        <h1><?php echo $langArray['cv-title']; ?></h1>
        <hr>
        <div class="container my-5">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-4">
                    <h3>Senior Developer</h3>
                    <hr>
                    <h5><?php echo $langArray['cv-contact']; ?></h5>
                    <div class="container">
                      <div class="row mb-2">
                        <div class="col-4 fw-bold">Email:</div>
                        <div class="col-8">svajdlenka@gmail.com</div>
                      </div>
                      <div class="row mb-2">
                        <div class="col-4 fw-bold">LinkedIn:</div>
                        <div class="col-8">
                          <a href="https://www.linkedin.com/in/jurajsvajdlenka/" target="_blank">
                            linkedin.com/in/jurajsvajdlenka
                          </a>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <div class="col-4 fw-bold">Location:</div>
                        <div class="col-8">Slovakia</div>
                      </div>
                    </div>
                    <hr>
                
                
                    <h5><?php echo $langArray['cv-skills']; ?></h5>
                    <p><?php echo $langArray['cv-skills-desc']; ?></p>
                    <!-- Frameworks -->
                    <h6><?php echo $langArray['cv-skills-frameworks']; ?></h6>
                    <p>
                        Spring Boot, Spring MVC, WordPress
                    </p>
    
                    <!-- Programming Languages -->
                    <h6><?php echo $langArray['cv-skills-planguages']; ?></h6>
                    <p>
                        Java, Thymeleaf, JSP, HTML, Javascript, jQuery, SQL, PHP, Python, C/C++, PL/SQL, Basic
                    </p>

                    <!-- Databases -->
                    <h6><?php echo $langArray['cv-skills-databases']; ?></h6>
                    <p>
                        Oracle, MySQL, MariaDB, MaxDB, DB2, Clipper
                    </p>

                    <!-- Operating Systems -->
                    <h6><?php echo $langArray['cv-skills-os']; ?></h6>
                    <p>
                        Windows, Linux, Android, OS/2, DOS
                    </p>

                    <!-- IDE, Development Tools -->
                    <h6><?php echo $langArray['cv-skills-ide']; ?></h6>
                    <p>
                        IntelliJ IDEA, Eclipse, Netbeans, Visual Studio, Oracle Developer/2000, OpenShift, Docker, Tomcat, Apache
                    </p>

                    <!-- Others -->
                    <h6><?php echo $langArray['cv-skills-others']; ?></h6>
                    <p>
                        CSS, Bootstrap Twitter, Git, Maven, XML, JSON
                    </p>

                    <hr>
                    <h5><?php echo $langArray['cv-languages']; ?></h5>
                    <ul>
                      <li>Slovak – Native</li>
                      <li>English – Advanced</li>
                      <li>German – Basic</li>
                    </ul>
                
              </div>
              <!-- Main Content -->
              <div class="col-md-8">
                <h4><?php echo $langArray['cv-profile']; ?></h4>
                <p>
                  <?php echo $langArray['cv-profile-desc']; ?>
                </p>
                <hr>
                <h4><?php echo $langArray['cv-experience']; ?></h4>
        
                <div class="mb-3">
                  <h5>National Bank of Slovakia</h5>
                  <strong><?php echo $langArray['cv-exp-technologies']; ?>:</strong> Java, Oracle, C++, Spring MVC, Spring Boot, HTML, JavaScript, CSS
                  <p><strong><?php echo $langArray['cv-exp-period']; ?>:</strong> May 2007 - Present</p>
                </div>
        
                <div class="mb-3">
                  <h5>Tempest</h5>
                  <strong><?php echo $langArray['cv-exp-technologies']; ?>:</strong> Java, Oracle, MaxDB, Windows NT, Windows XP
                  <p><strong><?php echo $langArray['cv-exp-period']; ?>:</strong> Oct 2006 - May 2007</p>
                </div>
        
                <div class="mb-3">
                  <h5>Login</h5>
                  <strong><?php echo $langArray['cv-exp-technologies']; ?>:</strong> Java, Oracle, MaxDB, OS/2, Oracle Developer, C++, Windows NT, Windows XP
                  <p><strong><?php echo $langArray['cv-exp-period']; ?>:</strong> Apr 1995 - Sep 2006</p>
                </div>
        
                <div class="mb-3">
                  <h5>HTC Slovakia</h5>
                  <strong><?php echo $langArray['cv-exp-technologies']; ?>:</strong> C++, DB/2, OS/2
                  <p><strong><?php echo $langArray['cv-exp-period']; ?>:</strong> Nov 1994 - Mar 1995</p>
                </div>
        
                <div class="mb-3">
                  <h5>SPP Slovakia</h5>
                  <strong><?php echo $langArray['cv-exp-technologies']; ?>:</strong> Clipper
                  <p><strong><?php echo $langArray['cv-exp-period']; ?>:</strong> Nov 1992 - Oct 1993</p>
                </div>
        
                <div class="mb-3">
                  <h5>VU LIKO Bratislava</h5>
                  <strong><?php echo $langArray['cv-exp-technologies']; ?>:</strong> C, C++
                  <p><strong><?php echo $langArray['cv-exp-period']; ?>:</strong> Aug 1992 - Oct 1992</p>
                </div>
        
                <hr>
                <h4><?php echo $langArray['cv-education']; ?></h4>
        
                <div class="mb-3">
                  <h5><?php echo $langArray['cv-edu-university']; ?></h5>
                  <strong><?php echo $langArray['cv-edu-university-title']; ?></strong>
                  <p><strong><?php echo $langArray['cv-edu-period']; ?>:</strong> 1987 - 1992</p>
                </div>
    
                <div class="mb-3">
                  <h5><?php echo $langArray['cv-edu-high']; ?></h5>
                  <strong><?php echo $langArray['cv-edu-high-title']; ?></strong>
                  <p><strong><?php echo $langArray['cv-edu-period']; ?>:</strong> 1983 - 1987</p>
                </div>

              </div>
        
              </div>
          </div>
        <hr>  
    </div>
</section>


<!-- Images -->
<section id="sec-images" class="p-5 bg-dark text-light">
    <div id="yearsCarousel" class="carousel slide carousel-fade col-lg-9 mx-auto" data-bs-ride="carousel">
        <h1><?php echo $langArray['images-title']; ?></h1>
        <hr>
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

<script src="https://svajdlenka.com/js/bootstrap.bundle.min.js"></script>
</body>
</html>	