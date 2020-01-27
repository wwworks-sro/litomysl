
<!DOCTYPE html>

    <?php  include("layouts/_head.php");  ?>

    <body class="index-page">
        <?php  include('layouts/_header.php');  ?>
        <div id="title-banner">
            <img src="img-system/title/banner.jpg" alt="Letecký pohled - Litomyšl">
            <h2>moderní historické město</h2>
                 <div class="title-heart">
                     <div class="heart-popup" style="top:50%;left:30%;">
                         <a href="https://www.litomysl.cz/?id_str=1311055287097"><strong>Klášterní zahrady</strong></a>
                         <a href="http://litomysl.pano3d.eu//index.html?startscene=0"><img src="img-system/title/3d.png" alt="Virtuální prohlídka Lorem ipsum dolor"></a>
                         <a href="https://www.litomysl.cz/?id_str=1311055287097"><img src="img-system/title/gallery.png" alt="Fotogalerie Lorem ipsum dolor"></a>
                     </div>
                     <div class="heart-popup" style="top:50%;left:30%;">
                         <a href="https://www.litomysl.cz/?id_str=1311055259565"><strong>Smetanovo náměstí</strong></a>
                         <a href="http://litomysl.pano3d.eu//index.html?startscene=5"><img src="img-system/title/3d.png" alt="Virtuální prohlídka Lorem ipsum dolor"></a>
                         <a href="https://www.litomysl.cz/?id_str=1311055259565"><img src="img-system/title/gallery.png" alt="Fotogalerie Lorem ipsum dolor"></a>
                     </div>
                 </div>
        </div>


        <section id="title-news-calendar">
            <div class="wrap-main">
                <div id="news-header">
                    <ul id="news-tabs">
                        <li> <a href="#">z města</a> </li>
                        <li> <a href="#">z kultury</a> </li>
                        <li> <a href="#">ze sportu</a> </li>
                    </ul>
                    <form class="fulltext-form" method="post" action="#">
                        <input type="text" name="search">
                        <input type="submit" name="vyhledat" value="vyhledat">
                    </form>
                </div>
                <div id="news-wrap">
                    <div id="news-top">
                        <a href="" id="news-primary">
                            <img src="img-system/title/news-lorem-ipsum-l.jpg" alt="Lorem ipsum dolor">
                            <div class="news-cover"> </div>
                            <div class="news-text">
                                <h2>Aktualita 1 dolor sit amet consectetuer adip</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                            </div>
                        </a>
                        <a href="" class="news-secondary">
                            <img src="img-system/title/news-lorem-ipsum-m.jpg" alt="Lorem ipsum dolor">
                            <div class="news-cover"> </div>
                            <div class="news-text">
                                <h2>Aktualita 1 dolor sit amet consectetuer adip</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                            </div>
                        </a>
                        <a href="" class="news-secondary">
                            <img src="img-system/title/news-lorem-ipsum-m.jpg" alt="Lorem ipsum dolor">
                            <div class="news-cover"> </div>
                            <div class="news-text">
                                <h2>Aktualita 1 dolor sit amet consectetuer adip</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                            </div>
                        </a>
                    </div>
                    <div id="news-other">
                        <a href="" class="news-mini">
                            <img src="img-system/title/news-amet-dolor-s.jpg" alt="Lorem ipsum dolor">
                            <div class="news-text">
                                <h2>Aktualita 1 dolor sit amet consectetuer adip</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                            </div>
                        </a>
                        <a href="" class="news-mini">
                            <img src="img-system/title/news-consectetur-s.jpg" alt="Lorem ipsum dolor">
                            <div class="news-text">
                                <h2>Aktualita 1 dolor sit amet consectetuer adip</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                            </div>
                        </a>
                        <a class="news-mini">
                            <img src="img-system/title/news-dolor-sit-2-s.jpg" alt="Lorem ipsum dolor">
                            <div class="news-text">
                                <h2>Aktualita 1 dolor sit amet consectetuer adip</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                            </div>
                        </a>
                        <a href="" class="news-mini">
                            <img src="img-system/title/news-lore-ipsum-s.jpg" alt="Lorem ipsum dolor">
                            <div class="news-text">
                                <h2>Aktualita 1 dolor sit amet consectetuer adip</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                            </div>
                        </a>
                        <a href="" id="more-news-mini" href="https://www.litomysl.cz/aktuality">
                            <div class="more-news-mini">
                                <img src="img-system/title/dots.png" alt="Lorem ipsum dolor">
                            </div>
                            <div class="news-text">
                                Další aktuality
                            </div>
                        </a>
                    </div>
                </div>
                <nav id='news-footer-nav'>
                    <ul class="selected-menu-group">
                        <li> <a href=""> <img src="img-system/title/dots.png" alt="Městský měsíčník Lilie"> lilie</a> </li>
                        <li> <a href="">úřad</a> </li>
                        <li> <a href="">lidé</a> </li>
                        <li> <a href="">vzdělávání</a> </li>
                        <li> <a href="">kontakty</a> </li>
                    </ul>
                </nav>

            </div>
            <div class="wrap-side">

            </div>
        </section>


        <?php  include("layouts/_meta.php");  ?>
    </body>
</html>