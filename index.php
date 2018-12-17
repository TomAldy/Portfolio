<?php
    session_start();
    $json = file_get_contents('http://tomaldy.com/php/projects.php');
    $projects = json_decode($json, true);
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

    <title>Thomas Alderson &raquo; Web Design &amp; Developer based in Fareham, Hampshire</title>

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

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-1263240325581067",
              enable_page_level_ads: true
         });
    </script>

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
                        <a href="#aboutme"><i class="fa fa-question-circle fa-lg portfolio-navigation__icon"> </i>About Me</a>
                    </li>
                    <li class="portfolio-navigation__item">
                        <a href="#portfolio"><i class="fa fa-folder fa-lg portfolio-navigation__icon"> </i>Portfolio</a>
                    </li>
                    <li class="portfolio-navigation__item">
                        <a href="#qualifications"><i class="fa fa-graduation-cap fa-lg portfolio-navigation__icon"> </i>Qualifications</a>
                    </li>
                    <li class="portfolio-navigation__item">
                        <a href="#messageme"><i class="fa fa-envelope fa-lg portfolio-navigation__icon"> </i>Message Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row" id="home">
            <div class="portfolio-banner portfolio-banner--overlay col-lg-12 text-center">
                <div class="portfolio-banner__content">
                    <div class="portfolio-banner__photo"></div>
                    <img src="img/banner-logo.png" alt="Thomas Alderson's Portfolio Logo" class="portfolio-banner__logo">
                </div>
            </div>
        </div>

        <div class="row" id="aboutme">
            <div class="portfolio-about col-lg-12 text-center">
                <div class="portfolio-icon">
                    <div class="portfolio-icon__symbol">?</div>
                    <div class="portfolio-icon__label">Who am I?</div>
                </div>
                <div class="portfolio-about__content">
                    <p>I am a hardworking 24 year old Graduate Web Developer, based in Fareham, Hampshire, UK, who enjoys learning new skills and experiences. I have created websites using <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript (Vanilla &amp; jQuery)</strong>, <strong>PHP (Laravel)</strong>, <strong>Ruby (Ruby on Rails)</strong>, <strong>SQL</strong>, <strong>Git Version Control</strong> and <strong>Asp.NET</strong>. I also have experience in creating software packages with <strong>C#</strong>. I'm consistently on the lookout for new projects and challenges to tackle, whether big or small.</p>
                </div>
            </div>
        </div>

        <div class="row" id="portfolio">
            <div class="portfolio-collection col-lg-12 text-center">
                <div class="portfolio-collection__title">Portfolio</div>
                <div class="portfolio-collection__inner">
                    <ul class="portfolio-collection__group">
                        <?php
                            $i = -1;
                            foreach ($projects as $project) {
                                $i++;
                                echo'<a href="project.php?id='.$i.'" class="portfolio-collection__link" data-id="'.$i.'">';
                                    echo'<li class="portfolio-collection__item">';
                                        echo'<img src="'.$project['image'].'" alt="'.$project['name'].'" class="portfolio-collection__image">';
                                    echo'</li>';
                                echo'</a>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="qualifications">
            <div class="portfolio-qualifications col-lg-12 text-center">
                <div class="portfolio-icon">
                    <div class="portfolio-icon__symbol"><i class="fa fa-graduation-cap"></i></div>
                    <div class="portfolio-icon__label">Qualifications</div>
                </div>
                <div class="portfolio-qualifications__inner">
                    <ul class="portfolio-qualifications__group">
                        <hr class="portfolio-qualifications__seperator">
                        <li class="portfolio-qualifications__item">
                            <div class="portfolio-qualifications__result portfolio-qualifications__result--achieved portfolio-qualifications__result--uni">1:1</div>
                            <div class="portfolio-qualifications__content">
                                <div class="portfolio-qualifications__course">BSc (Hons) Web Design &amp; Development</div>
                                <div class="portfolio-qualifications__term">September 2013 - May 2016</div>
                                <div class="portfolio-qualifications__description">Within this degree course, I learnt all about the design aspect within the Web industry, thanks to my previous experience in the Web Development sector, this became an advantage over anything else, whilst improving my design skills through university, I could develop my development skills in my spare time at home. </div>
                            </div>
                        </li>
                        <hr class="portfolio-qualifications__seperator">
                        <li class="portfolio-qualifications__item">
                            <div class="portfolio-qualifications__result portfolio-qualifications__result--achieved">D* D* D*</div>
                            <div class="portfolio-qualifications__content">
                                <div class="portfolio-qualifications__course">IT National Extended Diploma (Multimedia)</div>
                                <div class="portfolio-qualifications__term">September 2011 - July 2013</div>
                                <div class="portfolio-qualifications__description">Throughout the IT specific college course, I developed my basic computing skills, ranging from animation techniques to beginner programming skills, such as object oriented programming and gaming development. </div>
                            </div>
                        </li>
                        <hr class="portfolio-qualifications__seperator">
                        <li class="portfolio-qualifications__item">
                            <div class="portfolio-qualifications__result portfolio-qualifications__result--achieved">Merit</div>
                            <div class="portfolio-qualifications__content">
                                <div class="portfolio-qualifications__course">BTEC Vocational IT Certificiate (Advanced)</div>
                                <div class="portfolio-qualifications__term">September 2009 - June 2010</div>
                                <div class="portfolio-qualifications__description">IT level skills at school level, with added advanced options due to taking a choice of optional added qualification, this allowed me to learn animation, manual database development using Microsoft Excel and many more basic computing techniques.</div>
                            </div>
                        </li>
                        <hr class="portfolio-qualifications__seperator">
                        <li class="portfolio-qualifications__item">
                            <div class="portfolio-qualifications__result portfolio-qualifications__result--achieved">Merit</div>
                            <div class="portfolio-qualifications__content">
                                <div class="portfolio-qualifications__course">BTEC IT Certificate</div>
                                <div class="portfolio-qualifications__term">September 2009 - June 2010</div>
                                <div class="portfolio-qualifications__description">Starting level of IT qualifications, following from personal experience learnt in my home, I was able to develop my IT skills at a basic school level such as Microsoft Word and design analysis.</div>
                            </div>
                        </li>
                        <hr class="portfolio-qualifications__seperator">
                    </ul>
                </div>
                <div class="portfolio-qualifications__linkedin">
                    <p>Learn more about my professional background…</p>
                    <div class="portfolio-qualifications__profile">
                        <script src="https://platform.linkedin.com/in.js" type="text/javascript"></script>
                        <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/tomaldy" data-format="inline" data-related="false"></script>
                        <noscript>
                            <a href="https://uk.linkedin.com/in/tomaldy" target="_blank" rel="noopener noreferrer">
                                <img src="img/linkedin.png" alt="Thomas Alderson LinkedIn Profile Button">
                            </a>
                        </noscript>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="messageme">
            <div class="portfolio-message col-lg-12 text-center">
                <div class="portfolio-message__title">Message Me</div>
                <form action="php/message.php" method="POST" class="portfolio-message__details-form">
                    <div class="portfolio-message__inner" id="form-result">
                        <?php
                            $result = (isset($_SESSION['flash']) ? $_SESSION['flash'] : null);
                            if ($result == 0001){
                                echo'<div class="portfolio-message__result portfolio-message__result--error">';
                                    echo'<i class="fa fa-exclamation-triangle"></i> - ';
                                    echo'You left a field blank.';
                                echo'</div>';
                                session_destroy();
                            }elseif ($result == 0002) {
                                echo'<div class="portfolio-message__result portfolio-message__result--error">';
                                    echo'<i class="fa fa-exclamation-triangle"></i> - ';
                                    echo'Invalid Email Address.';
                                echo'</div>';
                                session_destroy();
                            }elseif ($result == 0003) {
                                echo'<div class="portfolio-message__result portfolio-message__result--success">';
                                    echo'<i class="fa fa-check"></i> - ';
                                    echo'Message sent successfully.';
                                echo'</div>';
                                session_destroy();
                            }
                        ?>
                    </div>
                    <div class="portfolio-message__inner">
                        <div class="portfolio-message__form" action="php/message.php" method="POST">
                            <div class="portfolio-message__half">
                                <label class="portfolio-message__label" for="name">Name</label>
                                <div class="portfolio-message__element portfolio-message__element--name">
                                    <span class="portfolio-message__container">
                                        <input type="text" name="name" placeholder="Name..." class="portfolio-message__input">
                                    </span>
                                </div>
                                <label class="portfolio-message__label" for="email">Email Address</label>
                                <div class="portfolio-message__element portfolio-message__element--email">
                                    <span class="portfolio-message__container">
                                        <input type="text" name="email" placeholder="Email Address..." class="portfolio-message__input">
                                    </span>
                                </div>
                                <label class="portfolio-message__label" for="subject">Subject</label>
                                <div class="portfolio-message__element portfolio-message__element--subject">
                                    <span class="portfolio-message__container">
                                        <select name="subject" class="portfolio-message__input">
                                            <option value="Project Enquiry" class="portfolio-message__input">Project Enquiry</option>
                                            <option value="Feedback" class="portfolio-message__input">Feedback</option>
                                            <option value="Other" class="portfolio-message__input">Other</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="portfolio-message__half portfolio-message__half--right">
                                <label class="portfolio-message__label" for="message">Message</label>
                                <div class="portfolio-message__element portfolio-message__element--message">
                                    <textarea placeholder="Your Message..." class="portfolio-message__message" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-message__inner text-center">
                        <div class="g-recaptcha" data-sitekey="6LcUg4EUAAAAAEp54K1sIQ5LLKB6QHME3dIWy1hi"></div>
                    </div>
                    <div class="portfolio-message__inner text-center">
                        <div class="portfolio-message__buttons">
                            <button type="submit" class="button button--messageme">Send</button>
                        </div>
                    </div>
                </form>
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
