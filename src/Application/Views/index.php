<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="/src/Application/Views/css/style.css">
    <link rel="stylesheet" href="/src/Application/Views/css/bootstrap.css">
    <script async src="/src/Application/Views/bootstrap/js/bootstrap.bundle.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Roboto:wght@400;700&display=swap"
          rel="stylesheet">

    <script src="https://kit.fontawesome.com/72e39ab0de.js" crossorigin="anonymous"></script>

</head>
<body>

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
</header>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 bg-secondary" style="height: 100vh; width:100vw;" src="/src/Application/Views/img/news/first.png" alt="">
            <div class="carousel-caption d-none d-md-block">
                <div align="left" class="slid__title">Richird Norton photorealistic rendering as real photos</div>
            </div>
        </div>
        <div class="carousel-item">

            <img class="d-block w-100 bg-secondary" style="height: 100vh; width:100vw;" src="/src/Application/Views/img/news/second.png" alt="">
            <div class="carousel-caption d-none d-md-block">
                <div align="left" class="slid__title">Richird Norton photorealistic rendering as real photos</div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 bg-secondary" style="height: 100vh; width:100vw;" src="/src/Application/Views/img/news/third.png" alt="">


            <div class="carousel-caption d-none d-md-block">
                <div align="left" class="slid__title">Richird Norton photorealistic rendering as real photos</div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="news">
    <div class="container">
        <div class="news__label">
            <div class="news__title">News</div>
            <a class="news__view" href="/news">View All</a>
        </div>
        <div class="news__block">
            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img1.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/1"> Dream destinations to visit this
                        year in Paris</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>
            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img2.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/2">Breathtaking first-person photos
                        around Europe</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>

            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img3.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/3">What collectors need to know about
                        authenticity</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>

            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img4.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/4">Instagram artists with great
                        photography skills</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>

            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img5.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/5">Thins to know before visiting
                        Cave in Germany</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>

            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img6.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/6">Nina Smith vibrant work collab
                        with Nike Dunk</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>


            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img7.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/7">Richard Norton photorealistic
                        rendering as real photos</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>

            <div class="news__container">
                <img class="news__img" src="/src/Application/Views/img/news/img8.jpg" alt="">
                <div class="news__date">08.08.2021</div>
                <div class="news__name"><a href="/news/8">25 quality collectors toys inspired
                        by famous films</a>
                </div>
                <div class="news__text">Progressively incentivize cooperative systems through
                    technically sound functionalities. Credibly productivate
                    seamless data with flexible schemas.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="article">

    <div class="article__block">
        <div class="article__title">Richird Norton photorealistic<br> rendering as real photos</div>
        <div class="article__text">Progressively incentivize cooperative systems through technically sound
            <br> functionalities. The credibly productivate seamless data.
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
                <div  class="footer__link">
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