<?php
    $id = (isset($_GET['id']) ? $_GET['id'] : null);
    $json = file_get_contents('http://localhost:8000/php/projects.php?id='.$id);
    $project = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A portfolio library displaying the web design &amp; development work of Thomas Alderson, a honours degree graduate Web Designer &amp; Developer based in Fareham, Hampshire.">
    <meta name="author" content="Thomas Alderson">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <title><?php echo $project['name']; ?> &raquo; <?php echo $project['type']; ?> designed and developed by Thomas Alderson.</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-mfizz.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-inverse portfolio-navigation" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header portfolio-navigation__header">
                <button type="button" class="navbar-toggle portfolio-navigation__toggle" data-toggle="collapse" data-target="#portfolio-navigation__toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php">
                    <img src="img/navigation-logo.png" alt="Thomas Alderson Portfolio Logo" class="logo portfolio-navigation__logo">
                </a>
            </div>
            <div class="collapse navbar-collapse portfolio-navigation__collapse" id="portfolio-navigation__toggle">
                <ul class="nav navbar-nav portfolio-navigation__links">
                    <li class="portfolio-navigation__item">
                        <a href="index.php"><i class="fa fa-home fa-lg portfolio-navigation__icon"> </i>Home</a>
                    </li>
                    <li class="portfolio-navigation__item">
                        <a href="#about"><i class="fa fa-question-circle fa-lg portfolio-navigation__icon"> </i>About <?php echo $project['name']; ?></a>
                    </li>
                    <li class="portfolio-navigation__item">
                        <a href="#design"><i class="fa fa-paint-brush fa-lg portfolio-navigation__icon"> </i>Design</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row" id="home">
            <div class="portfolio-banner col-lg-12 text-center">
                <div class="portfolio-banner__content">
                    <div class="portfolio-banner__photo"></div>
                    <img src="img/banner-logo.png" alt="Thomas Alderson's Portfolio Logo" class="portfolio-banner__logo">
                </div>
            </div>
        </div>

        <div class="row" id="about">
            <div class="project-about col-lg-12 text-center">
                <div class="project-about__inner">
                    <div class="project-icon">
                        <div class="project-icon__symbol"><i class="fa fa-globe"></i></div>
                        <div class="project-icon__information">
                            <div class="project-icon__name"><?php echo $project['name']; ?></div>
                            <div class="project-icon__type"><?php echo $project['type']; ?></div>
                        </div>
                    </div>
                    <div class="project-details">
                        <div class="project-details__rating">
                            <div class="project-details__heading">Difficulty Rating</div>
                            <ul class="project-details__stars">
                                <?php
                                    $n = 0;
                                    for ($i=0; $i < $project['rating']; $i++) {
                                        $n++;
                                        if($n < 5) {
                                            echo'<li class="project-details__star">';
                                                echo'<i class="fa fa-star"></i>';
                                            echo'</li>';
                                        }
                                    }
                                    for ($a=$n; $a < 5; $a++) {
                                        echo'<li class="project-details__star">';
                                            echo'<i class="fa fa-star-o"></i>';
                                        echo'</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                        <ul class="project-details__languages">
                            <?php
                                foreach ($project['languages'] as $language) {
                                    echo'<li class="project-details__language project-details__language--'.$language.'"></li>';
                                }
                            ?>
                        </ul>
                        <div class="project-details__link">
                            <a href="<?php echo $project['url']; ?>" target="_blank" rel="noopener noreferrer">VISIT <?php echo $project['type']; ?></a>
                        </div>
                    </div>
                    <div class="project-about__content">
                        <p><?php echo $project['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="design">
            <div class="project-design col-lg-12 text-center">
                <div class="project-design__title">Design</div>
                <div class="project-design__inner">
                    <div class="project-design__photo">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['name']; ?> Design" class="project-design__image">
                    </div>
                </div>
            </div>
        </div>

        <footer class="row portfolio-footer">
            <div class="portfolio-footer__image">
                <a href="index.html">
                    <img src="img/footer-logo.png" alt="Thomas Alderson Portfolio Logo" class="logo portfolio-footer__logo">
                </a>
            </div>
            <div class="portfolio-footer__developer">
                Developed by Thomas Alderson
            </div>
        </footer>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/template.js"></script>

</body>

</html>
