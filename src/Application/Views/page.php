<?php


use App\Application\Actions\Page;
use App\Application\Database\DatabaseArticles;
use App\Application\Controllers\NewsControllerPage;

$id = new  NewsControllerPage();
$db = new DatabaseArticles();
$element = $db->findById($id->getId());
$article = new Page($element->text,$element->name_article);
/*<h1>This is </h1>

<h2>This is</h2>*/
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article page</title>
    <link rel="stylesheet" href="/src/Application/Views/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@400;700&display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/72e39ab0de.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="article article__page">
    <header class="header header__home">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo header__logo__home">Runo</div>
                <nav class="header__nav">
                    <a class="header__nav_link header__nav_link__home  active" href="/news">Articles</a>
                    <a class="header__nav_link header__nav_link__home" href="/login">Logout</a>
                </nav>
            </div>

        </div>
        <hr align="center" size="1" color="#E5E5E5"/>
    </header>
    <div class="article__block">
        <div class="article__title article__title_article"><?php $article->getTitle(); ?></div>
        <div class="article__text"> <?php $article->getText(); ?>
        </div>
    </div>
</section>

<section class="main_article">
    <div class="main_article__container">
        <div class="main_article__text">Seamlessly syndicate cutting-edge architectures rather than collaborative
            collaboration and idea-sharing. Proactively incubate visionary interfaces whereas premium benefits.
            Seamlessly negotiate ubiquitous leadership skills rather than parallel ideas. Dramatically visualize
            superior interfaces for best-of-breed alignments. Synergistically formulate performance based users through
            customized relationships. Interactively deliver cross-platform ROI via granular systems. Intrinsicly enhance
            effective initiatives vis-a-vis orthogonal outsourcing. Rapidiously monetize market-driven opportunities
            with multifunctional users. Collaboratively enhance visionary opportunities through revolutionary schemas.
            Progressively network just in time customer service without real-time scenarios.
        </div>
        <div class="main_article__text">Synergistically drive e-business leadership with unique synergy. Compellingly
            seize market positioning ROI
            and bricks-and-clicks e-markets. Proactively myocardinate timely platforms through distributed ideas.
            Professionally optimize enabled core competencies for leading-edge sources. Professionally enhance
            stand-alone leadership with innovative synergy. Rapidiously generate backend experiences vis-a-vis long-term
            high-impact relationships. Authoritatively supply market-driven mindshare and bricks-and-clicks
            opportunities. Holisticly create diverse innovation through adaptive communities. Efficiently empower
            seamless meta-services with impactful opportunities. Distinctively transition virtual outsourcing with
            focused e-tailers.
        </div>
        <div class="main_article__quote">“ Monotonectally seize superior mindshare rather than efficient technology. ”
        </div>
        <div class="main_article__text">Compellingly enhance seamless resources through competitive content. Continually
            actualize 24/365 alignments for resource-leveling platforms. Energistically enhance high standards in models
            and professional expertise. Intrinsicly iterate extensible metrics for prospective opportunities.
            Continually develop leading-edge experiences through quality e-services.
        </div>
        <div class="main_article__date">Created 08.08.2021</div>
        <div class="main_article__author">
            <div class="main_article__author__name">
                <ul>
                    <li>By Jennifer Lawrence</li>
                    <li class="main_article__prof"> Thinker & Designer</li>
                </ul>
            </div>
            <div>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                <a href="#"><i class="fa-brands fa-behance-square"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="post">
    <div class="container">
        <div class="post__title">Related Posts</div>
        <div class="post__related">
            <div class="post__article post__article__first">
                <div class="post__date">08.08.2021</div>
                <div class="post__name"><a href="/news/1"> Richird Norton photorealistic rendering as real photos</a></div>
                <div class="post__text">Progressively incentivize cooperative systems through technically sound
                    functionalities. The credibly productivate seamless data.
                </div>
            </div>
            <div class="post__article post__article__second">
                <div class="post__date">08.08.2021</div>
                <div class="post__name"><a href="/news/2">Richird Norton photorealistic rendering as real photos</a></div>
                <div class="post__text">Progressively incentivize cooperative systems through technically sound
                    functionalities. The credibly productivate seamless data.
                </div>
            </div>
            <div class="post__article post__article__third">
                <div class="post__date">08.08.2021</div>
                <div class="post__name"><a href="/news/3">Richird Norton photorealistic rendering as real photos</a></div>
                <div class="post__text">Progressively incentivize cooperative systems through technically sound
                    functionalities. The credibly productivate seamless data.
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__container">

            <div class="footer__block">
                <div class="footer__title">Contact the Publisher</div>
                <a class="footer__email" href="mailto:mike@runo.com">mike@runo.com</a>
                <br>
                <a class="footer__tel" href="tel:+944450904505">+944450904505</a>
            </div>
            <div class="footer__block">
                <div class="footer__title">Explorate</div>
                <ul>
                    <li class="footer__line">About</li>
                    <li class="footer__line">Partners</li>
                    <li class="footer__line">Job Opportunities</li>
                    <li class="footer__line">Advertise</li>
                    <li class="footer__line">Membership</li>
                </ul>
            </div>
            <div class="footer__block">
                <div class="footer__title">Headquarter</div>
                <div class="footer__address">191 Middleville Road,<br>
                    NY 1001, Sydney<br>
                    Australia
                </div>
            </div>
            <div class="footer__block">
                <div class="footer__title">Connections</div>
                <div class="footer__link">
                    <a class="footer__link" href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-pinterest"></i></a>
                    <a class="footer__link" href="#"><i class="fa-brands fa-behance-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__sub ">2021 | RUNO Publisher Studio</div>

</footer>

</body>
</html>




