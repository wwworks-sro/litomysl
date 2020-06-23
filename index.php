
<!DOCTYPE html>

    <?php  include("layouts/_head.php");  ?>

    <body class="index-page multiple-line-page">
        <?php  include('layouts/_header.php');  ?>

<!--  -----------------------------------Banner-----------------------------------------------  -->

        <div id="title-banner">
            <img class="title-banner-img" src="img/img-system/title/banner.jpg" alt="Letecký pohled - Litomyšl">
            <div class="pad-main-left banner-text">
                <h2>moderní <br>historické <br>město</h2>
            </div>
            <div class="title-heart" style="top:40%;left:60%;">
                 <img src="img/img-system/title/heart.png" alt="Klášterní zahrady">
                 <div class="heart-popup">
                     <a href="https://www.litomysl.cz/?id_str=1311055287097"><strong>Klášterní zahrady</strong></a>
                     <a href="http://litomysl.pano3d.eu//index.html?startscene=0"><img src="img/img-system/title/3d.png" alt="Virtuální prohlídka Lorem ipsum dolor"></a>
                     <a href="https://www.litomysl.cz/?id_str=1311055287097"><img src="img/img-system/title/gallery.png" alt="Fotogalerie Lorem ipsum dolor"></a>
                 </div>
            </div>
            <div class="title-heart" style="top:75%;left:30%;">
                <img src="img/img-system/title/heart.png" alt="Smetanovo náměstí">
                <div class="heart-popup">
                    <a href="https://www.litomysl.cz/?id_str=1311055259565"><strong>Smetanovo náměstí</strong></a>
                    <a href="http://litomysl.pano3d.eu//index.html?startscene=5"><img src="img/img-system/title/3d.png" alt="Virtuální prohlídka Lorem ipsum dolor"></a>
                    <a href="https://www.litomysl.cz/?id_str=1311055259565"><img src="img/img-system/title/gallery.png" alt="Fotogalerie Lorem ipsum dolor"></a>
                </div>
            </div>

            <div id="mobile-title-links">
                <a class="selected-mobile-menu" href="#"><strong>občan / radnice</strong></a>
                <a href="turista.php">turista / volný čas</a>
            </div>
            <div class="cleaner"></div>
        </div>

        
<!--  -----------------------------------Novinky a kalendář-----------------------------------------------  -->
        
        
        <section id="novinky-kalendar" class="red-layout">
            <div class="wrap-main">
                <div class="pad-main-left">

                    <div class="mobile-news-header">
                        <h3>Aktuality</h3>
                        <a href="kalendar.php">kalendář akcí</a>
                    </div>

                    <div id="news-header">
                        <ul id="news-tabs-simple">
                            <li news="all" class="tab-selected">vše</li>
                            <li news="town">z města</li>
                            <li news="culture">z kultury</li>
                            <li news="sport">ze sportu</li>
                        </ul>
                        <form class="fulltext-form" method="post" action="#">
                            <input class="search-text" type="text" name="search">
                            <input class="submit search-submit" type="submit" name="vyhledat" value="">
                        </form>
                        <div class="cleaner"></div>
                    </div>
                    <div id="news-wrap">
                        <div class="news-top">
                            <a href="" class="news-title news-primary">
                                <img src="img/img-articles/L/news-lorem-ipsum-l.jpg" alt="Lorem ipsum dolor">
                                <div class="news-cover"> </div>
                                <div class="news-text">
                                    <h4>Aktualita 1 dolor sit amet consectetuer adip</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                                </div>
                            </a>
                            <a href="" class="news-title news-secondary news-secondary-first">
                                <img src="img/img-articles/M/news-lorem-ipsum-m.jpg" alt="Lorem ipsum dolor">
                                <div class="news-cover"> </div>
                                <div class="news-text">
                                    <h5>Aktualita 1 dolor sit amet consectetuer adip</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                                </div>
                            </a>
                            <a href="" class="news-title news-secondary">
                                <img src="img/img-articles/M/news-lorem-ipsum-m.jpg" alt="Lorem ipsum dolor">
                                <div class="news-cover"> </div>
                                <div class="news-text">
                                    <h5>Aktualita 1 dolor sit amet consectetuer adip</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                                </div>
                            </a>
                            <div class="cleaner"></div>
                        </div>
                        <div class="news-other">
                            <a href="" class="news-title news-mini">
                                <img src="img/img-articles/S/news-amet-dolor-s.jpg" alt="Lorem ipsum dolor">
                                <div class="news-text">
                                    <h6>Aktualita 1 dolor sit amet consectetuer adip</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                                </div>
                                <div class="cleaner"></div>
                            </a>
                            <a href="" class="news-title news-mini">
                                <img src="img/img-articles/S/news-consectetur-s.jpg" alt="Lorem ipsum dolor">
                                <div class="news-text">
                                    <h6>Aktualita 1 dolor sit amet consectetuer adip</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                                </div>
                                <div class="cleaner"></div>
                            </a>
                            <a class="news-title news-mini">
                                <img src="img/img-articles/S/news-dolor-sit-2-s.jpg" alt="Lorem ipsum dolor">
                                <div class="news-text">
                                    <h6>Aktualita 1 dolor sit amet consectetuer adip</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                                </div>
                                <div class="cleaner"></div>
                            </a>
                            <a href="" class="news-title news-mini">
                                <img src="img/img-articles/S/news-lore-ipsum-s.jpg" alt="Lorem ipsum dolor">
                                <div class="news-text">
                                    <h6>Aktualita 1 dolor sit amet consectetuer adip</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero </p>
                                </div>
                                <div class="cleaner"></div>
                            </a>
                            <a href="" id="more-news-mini" href="https://www.litomysl.cz/aktuality">
                                <div class="more-news-mini">
                                    <img src="img/img-system/title/dots.png" alt="Lorem ipsum dolor">
                                </div>
                                <div class="news-text">
                                    Další aktuality
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="cleaner"></div>
                    <nav id='news-footer-nav'>
                        <ul>
                            <li> <a href=""><img src="img/img-system/title/newspaper.2.3.1.png" alt="Městský měsíčník Lilie"> lilie</a> </li>
                            <li> <a href=""><img src="img/img-system/title/video camera 1.2.3.1.png" alt="video reportáž"> video reportáž</a> </li>
                            <li> <a href=""><img src="img/img-system/title/presentation.png" alt="úřední deska"> úřední deska</a> </li>
                            <li> <a href=""><img src="img/img-system/title/stamp.5.3.1.png" alt="potřebuji zařídit"> potřebuji zařídit</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="wrap-side bg-red">
                <div class="pad-main-right">


                    <h2 class="today-events-title">KAM DNES?</h2>
                    <a class="calendar-title-link" href="">kalendář akcí</a>

                    <div id="calendar-title">
                        <a href="">
                            <img src="img/img-system/title/event-drama.png" alt="divadlo">
                            <div>
                                <h6>Lorem ipsum dolor smet, lo ipsum dolor sit amet</h6>
                                <p>8.00 / Smetanovo náměstí</p>
                            </div>
                        </a>
                        <a href="">
                            <img src="img/img-system/title/event-music.png" alt="koncert">
                            <div>
                                <h6>Lorem ipsum dolor smet, lo ipsum dolor sit amet</h6>
                                <p>8.00 / Smetanovo náměstí</p>
                            </div>
                        </a>

                        <div class="separator-long-term-events">&nbsp;</div>
                        <div class="separator-long-term-events-text">PROBÍHAJÍCÍ AKCE</div>
    
                        <a href="">
                            <img src="img/img-system/title/event-discussion.png" alt="přednáška">
                            <div>
                                <h6>Lorem ipsum dolor smet, lo ipsum dolor sit amet</h6>
                                <p>8.00 / Smetanovo náměstí</p>
                            </div>
                        </a>
                    </div>
    
                    <div class="calendar-title-links">
                        <a class="link-tommorrow" href="">kam zítra</a>
                        <a class="top-events" href="">TOP akce</a>
                    </div>
                </div>
                <div class="cleaner"></div>
            </div>
            <div class="cleaner"></div>
        </section>

        
<!--  -------------------------------------Služby---------------------------------------------  -->
        
        
        <section id="sluzby" class="gray-layout">
            <div class="wrap-main">
                <div class="pad-main-left">
                    <h2>Služby</h2>
                    <a class="but but-section-top but-red-empty float-right" href="">Hlášení závad</a>

                    <nav id='service-nav-icons'>
                        <ul class="col-md-4">
                            <li><a href=""><img src="img/img-system/services/house.png" alt="Bydlení"><span>Bydlení</span></a></li>
                            <li><a href=""><img src="img/img-system/services/road straight.3.3.1.png" alt="Doprava"><span>Doprava</span></a></li>
                            <li><a href=""><img src="img/img-system/services/briefcase.3.3.1.png" alt="Práce"><span>Práce</span></a></li>
                            <li><a href=""><img src="img/img-system/services/wedding.png" alt="Svatby"><span>Svatby</span></a></li>
                            <li><a href=""><img src="img/img-system/services/grave.png" alt="Hřbitov"><span>Hřbitov</span></a></li>
                            <li><a href=""><img src="img/img-system/services/coins 2.3.3.1.png" alt="Dotace města"><span>Dotace města</span></a></li>
                        </ul>
    
                        <ul class="col-md-4 service-nav-icons-red">
                            <li><a href=""><img src="img/img-system/services/plus.png" alt="Zdravotnictví"><span>Zdravotnictví</span></a></li>
                            <li><a href=""><img src="img/img-system/services/police officer.3.3.1.png" alt="Městská policie"><span>Městská policie</span></a></li>
                            <li><a href=""><img src="img/img-system/services/heart care.3.3.1.png" alt="Sociální péče"><span>Sociální péče</span></a></li>
                            <li><a href=""><img src="img/img-system/services/fire.3.3.1.png" alt="Hasiči"><span>Hasiči</span></a></li>
                        </ul>
    
                        <ul class="col-md-4">
                            <li><a href=""><img src="img/img-system/services/bin 1.3.3.1.png" alt="Odpady"><span>Odpady</span></a></li>
                            <li><a href=""><img src="img/img-system/services/water drop.3.3.1.png" alt="Voda a kanalizace"><span>Voda a kanalizace</span></a></li>
                            <li class="hint-list-trigger">
                                <a href=""><img src="img/img-system/services/gis.png" alt="GIS portál"><span>GIS portál</span></a>
                                <div class="hint-list">
                                    <div class="pad">
                                        1. letecké snímky<br />
                                        2. části obcí<br />
                                        3. katastrální území<br />
                                        4. katastrální mapa<br />
                                        5. parcely v majetku města<br />
                                        6. silnice<br />
                                        7. ulice<br />
                                        8. budovy<br />
                                        9. čísla popisná<br />
                                        10. technická mapa - polohopis<br />
                                        11. technická mapa - sítě<br />
                                        12. sečené plochy<br />
                                        13. stromy<br />
                                        14. požární ochrana - hydranty<br />
                                        15. kontejnery na odpad<br />
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><img src="img/img-system/services/search.3.3.1.png" alt="Ztráty a nálezy"><span>Ztráty a nálezy</span></a></li>
                        </ul>
                    </nav>
    
                    <div id='service-nav-bottom'>
    
                        <h3>Potřebuji si zařídit</h3>
                        <nav>
                            <ul class="col-md-3">
                                <li><a href="">Doprava</a></li>
                                <li><a href="">Majetek města</a></li>
                                <li><a href="">Podnikání</a></li>
                            </ul>
    
                            <ul class="col-md-3">
                                <li><a href="">Poplatky</a></li>
                                <li><a href="">Radnice</a></li>
                                <li><a href="">Sociální záležitosti</a></li>
                            </ul>
    
                            <ul class="col-md-3">
                                <li><a href="">Správní agendy</a></li>
                                <li><a href="">Stavební úřad</a></li>
                                <li><a href="">Školství a sport</a></li>
                            </ul>
    
                            <ul class="col-md-3">
                                <li><a href="">Kultura</a></li>
                                <li><a href="">Životní prostředí</a></li>
                            </ul>
                            <div class="cleaner"></div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="wrap-side ">
                <div class="pad-main-right">
                    <a class="but but-section-top but-red-empty but-emergency" href="">
                        <strong>Pohotovosti </strong>
                        <span>Rozpis služeb</span>
                    </a>
    
                    <nav id='service-nav-right'>
                        <ul>
                            <li><a href="">Strategický a akční plán</a></li>
                            <li><a href="">Územní plánování</a></li>
                            <li><a href="">Developerské projekty</a></li>
                            <li><a href="">Výběrová řízení</a></li>
                            <li><a href="">Profil zadavatele</a></li>
                            <li><a href="">Prostory k pronajmutí</a></li>
                            <li><a href="">Objekty na prodej</a></li>
                            <li><a href="">Pozemky na prodej</a></li>
                            <li><a href="">Městské služby Litomyšl s.r.o.</a></li>
                            <li><a href="">Městské lesy</a></li>
                            <li><a href="">Katalog firem a podnikatelů</a></li>
                            <li><a href="">Živnostenský úřad</a></li>
                        </ul><div class="cleaner"></div>
                    </nav>

                    <nav id='service-tourists'>
                        <ul>
                            <li><a href=""><img src="img/img-system/services/bed single.3.3.1.png" alt="Ubytování"><span>Ubytování</span></a></li>
                            <li><a href=""><img src="img/img-system/services/fork knife.3.3.1.png" alt="Stravování"><span>Stravování</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="cleaner"></div>
        </section>


<!--  -------------------------------------Městský úřad---------------------------------------------  -->


        <section id="mestsky-urad" class="red-layout">
            <img class="lilly" src="img/img-system/office/lilly.png" alt="Lilie">
            <div class="wrap-main">
                <div class="pad-main-left">
                    <div class="col-md-3 col-tb-12">
                        <h2 class="col-tb-12">Městský úřad</h2>
                    </div>
                    <div class="col-md-9 col-tb-12">
                        <div class="col-md-11 col-tb-12 bubble bubble-red">
                            <div class="pad">
                                <h3>Upozornění lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero tempore. Lorem ipsum dolor sit amet. <a href="">Více...</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 office-links">
                            <div class="col-md-2">
                                <img src="img/img-system/office/Elipsa 684.png" alt="Základní informace">
                            </div>
                            <nav class="col-md-10">
                                <h3>Základní informace</h3>
                                <ul>
                                    <li><a href="">Základní informace</a></li>
                                    <li><a href="">Provozní doba</a></li>
                                    <li><a href="">Organizační struktura</a></li>
                                    <li><a href="">Kontakty</a></li>
                                </ul>
                            </nav>
    
                            <div class="col-md-2">
                                <img src="img/img-system/office/circle people.2.3.1.png" alt="Organizace a zařízení">
                            </div>
                            <nav class="col-md-10">
                                <h3>Organizace a zařízení</h3>
                                <ul>
                                    <li><a href="">Organizace a zařízení</a></li>
                                    <li><a href="">Církve a církevní zařízení</a></li>
                                    <li><a href="">Spolky</a></li>
                                </ul>
                            </nav>
    
                            <div class="col-md-2">
                                <img src="img/img-system/office/map 1.2.3.1.png" alt="Územní plánování">
                            </div>
                            <nav class="col-md-10">
                                <h3>Územní plánování</h3>
                                <ul>
                                    <li><a href="">Územní plánování</a></li>
                                    <li><a href="">Technická mapa</a></li>
                                    <li><a href="">Digitální povodňový plán</a></li>
                                </ul>
                            </nav>
    
                            <div class="col-md-2">
                                <img src="img/img-system/office/presentation timeout.2.3.1.png" alt="Projekty">
                            </div>
                            <nav class="col-md-10">
                                <h3>Projekty</h3>
                                <ul>
                                    <li><a href="">Projekty podpořené z dotací</a></li>
                                    <li><a href="">Proměna nábřeží řeky Loučné</a></li>
                                    <li><a href="">Sbírka na živé zvony</a></li>
                                </ul>
                            </nav>
    
                            <div class="col-md-2">
                                <img src="img/img-system/office/stamp.5.3.1.png" alt="">
                            </div>
                            <nav class="col-md-10">
                                <h3>Rozhodnutí</h3>
                                <ul>
                                    <li><a href="">Úřední deska</a></li>
                                    <li><a href="">Krizové řízení</a></li>
                                    <li><a href="">Vyhlášky a nařízení města</a></li>
                                </ul>
                            </nav>
                            <div class="cleaner"></div>
                        </div>
                        <div class="col-md-6 office-links">
    
                            <div class="col-md-2">
                                <img src="img/img-system/office/new document layer.2.3.1.png" alt="Žádosti a formuláře">
                            </div>
                            <nav class="col-md-10">
                                <h3>Žádosti a formuláře</h3>
                                <ul>
                                    <li><a href="">Potřebuji si vyřídit</a></li>
                                    <li><a href="">Elektronická podatelna</a></li>
                                    <li><a href="">Formuláře MěÚ</a></li>
                                    <li><a href="">Poskytování informací</a></li>
                                    <li><a href="">Dotace z rozpočtu města</a></li>
                                </ul>
                            </nav>
    
                            <div class="col-md-2">
                                <img src="img/img-system/office/certificate 1.2.3.1.png" alt="Směrnice">
                            </div>
                            <nav class="col-md-10">
                                <h3>Směrnice</h3>
                                <ul>
                                    <li><a href="">GDPR</a></li>
                                    <li><a href="">Povinně zveřejňované informace</a></li>
                                    <li><a href="">Úsekové měření</a></li>
                                    <li><a href="">Politika kvality</a></li>
                                    <li><a href="">Politika bezpečnosti</a></li>
                                </ul>
                            </nav>
    
                            <div class="col-md-2">
                                <img src="img/img-system/office/graph pie 2.2.3.1.png" alt="Finance">
                            </div>
                            <nav class="col-md-10">
                                <h3>Finance</h3>
                                <ul>
                                    <li><a href="">Hospodaření města</a></li>
                                    <li><a href="">Veřejné zakázky</a></li>
                                </ul>
                            </nav>
    
                            <div class="col-md-2">&nbsp;
                            </div>
                            <nav class="col-md-10">
                                <h3>Jiné</h3>
                                <ul>
                                    <li><a href="">Volby.cz</a></li>
                                    <li><a href="">Partnerská města</a></li>
                                    <li><a href="">Volná pracovní místa</a></li>
                                    <li><a href="">Pardubický kraj</a></li>
                                </ul>
                            </nav>
                            <div class="cleaner"></div>
                        </div>
                    </div>
                </div>
                <div class="cleaner"></div>
            </div>
            <div class="wrap-side bg-red office-side">
                <div class="pad-main-right">
                    <h3>Otevírací doba MÚ</h3>
    
                    <table>
                        <tr><th>Po</th><td>8:00 - 11:30</td><td>12:30 - 17:00</td></tr>
                        <tr><th>Út</th><td>8:00 - 11:30</td><td>12:30 - 14:00*</td></tr>
                        <tr><th>St</th><td>8:00 - 11:30</td><td>12:30 - 17:00</td></tr>
                        <tr><th>Čt</th><td>8:00 - 11:30</td><td>12:30 - 14:00*</td></tr>
                        <tr><th>Pá</th><td>8:00 - 11:30</td><td>12:30 - 14:00*</td></tr>
                    </table>
                    <p>(* V tyto dny mohou být pracovníci služebně mimo pracoviště)</p>
                    <a href="" class="but but-white-empty">Otevírací doba</a>

                    <h3 class="mar-top-30">Rychlý kontakt</h3>
                    <p>
                        info@loremispum.cz<br />
                        722 569 489
                    </p>
                    <a href="" class="but but-white-empty">Všechny kontakty</a>
                </div> <div class="cleaner"></div>
            </div>
            <div class="cleaner"></div>
        </section>


<!--  --------------------------------------Lidé--------------------------------------------  -->


        <section id="lide" class="gray-layout">
            <div class="wrap-main">
                <div class="pad-main-left">
                    <h2>Lidé</h2>
                    <div class="cleaner"></div>
                    <div class="col-md-6 col-mob-12 float-right">
                        <div class="bubble bubble-white">
                            <div class="pad">
                                <h3>Starostova odpovědna</h3>
                                <article>
                                    <h4><span>Upozornění lorem ipsum dolor</span> / 25.7.2019</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero tempore. Lorem ipsum dolor sit amet. <a href="">Více...</a></p>
                                </article>
                                <article>
                                    <h4><span>Upozornění lorem ipsum dolor</span> / 25.7.2019</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero tempore. Lorem ipsum dolor sit amet. <a href="">Více...</a></p>
                                </article>
                                <a class="more-answers" href="">Další odpověďi</a>
                                <div class="cleaner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-mob-12 ">
                        <div class="col-md-1 major-left-pad">&nbsp;</div>
                        <div class="col-md-3">
                            <div class="people-circles people-major"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><h3>Místostarosta</h3><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                        </div>
                        <div class="col-md-2 col-horizontal-line">
                            <img class="horizontal-line" src="img/img-system/people/horizontal.png" alt="Linka">
                        </div>
                        <div class="col-md-4">
                            <div class="people-circles  people-wisemajor"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><h3>Starosta</h3><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                        </div>
                    </div>

                    <div class="col-md-7 vertical-line-separator vertical-line-separator-1">
                        <img class="vertical-line" src="img/img-system/people/vertical.png" alt="Linka">
                    </div>
                    <div class="cleaner"></div>
                    <div class="col-md-1">&nbsp;</div>
                    <div class="col-md-7 people-col-mid">
                        <div class="people-wrap">
                            <div class="people-circles people-mid people-first"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-mid"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-mid"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>

                            <div class="people-circles people-mid people-second"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-mid"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-mid"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-mid"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                        </div>
                    </div>
                    <nav class="col-md-4 people-links">
                        <h3>Rada</h3>
                        <ul>
                            <li><a href="">Usnesení rady</a></li>
                            <li><a href="">Členové</a></li>
                            <li><a href="">Komise a pracovní skupiny</a></li>
                        </ul>
                    </nav>
                    <div class="col-md-7 vertical-line-separator">
                        <img class="vertical-line" src="img/img-system/people/vertical.png" alt="Linka">
                    </div>


                    <div class="col-md-8 people-col-small">
                        <div class="people-wrap">
                            <div class="people-circles people-small people-first"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>

                            <div class="people-circles people-small people-second"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>

                            <div class="people-circles people-small people-second"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                            <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                        </div>
                    </div>
                    <nav class="col-md-4 people-links">
                        <h3>Zastupitelstvo</h3>
                        <ul>
                            <li><a href="">Usnesení zastupitelstva</a></li>
                            <li><a href="">Členové</a></li>
                            <li><a href="">Programové prohlášení</a></li>
                            <li><a href="">Výbory</a></li>
                        </ul>
                    </nav>
                    <div class="col-md-7 vertical-line-separator">
                        <img class="vertical-line" src="img/img-system/people/vertical.png" alt="Linka">
                        <a class="but but-red" href="">Více o organizační struktuře</a>

                    </div>

                </div>
            </div>
            <div class="wrap-side">
                <div class="pad-main-right">
                    <h3>Městský úřad</h3>
                    <div class="people-line">
                        <div class="people-circles people-small"><img src="img/img-people/martin-novak.png" alt="Martin Novák"><h3>Tajemník</h3><div><p><strong>Martin Novák</strong><br />(KDU-ČSL)<br /><span>789 456 416<br />petr.novak@litomysl.cz</span></p></div></div>
                        <a href=""><span>Odbor správní</span></a>
                        <a href=""><span>O. finanční</span></a>
                        <a href=""><span>O. místního a silničního hosp.</span></a>
                        <a href=""><span>O. výstavby a územního plánování</span></a>
                        <a href=""><span>O. rozvoje a investic</span></a>
                        <a href=""><span>O. kultury a cestovního ruchu</span></a>
                        <a href=""><span>O. školství a sociální péče</span></a>
                        <a href=""><span>O. životního prostředí</span></a>
                        <a href=""><span>O. živnostenského úřadu</span></a>
                        <a href=""><span>O. kanceláře vedení MU</span></a>
                        <a href=""><span>O. dopravy</span></a>
                        <a href=""><span>O. městských lesů</span></a>
                        <a href=""><span>Městská policie</span></a>
                        <a href=""><span>Tiskový mluvčí</span></a>
                    </div>
                    <a href="" class="but but-red-empty">Volná pracovní místa</a>
                </div>
            </div>
            <div class="cleaner"></div>
        </section>


<!--  -----------------------------------Vzdělávání-----------------------------------------------  -->


        <section id="vzdelavani" class="red-layout">
            <div class="wrap-main">
                <div class="pad-main-left">
                    <h2>Vzdělávání</h2>
                    <div class="cleaner"></div>
                    <nav class="col-md-3">
                        <img class="big-circle" src="img/img-system/education/ms.png" alt="Mateřské školy">
                        <ul>
                            <li><a href="">I. mateřská škola</a></li>
                            <li><a href="">II. mateřská škola</a></li>
                            <li><a href="">III. mateřská škola</a></li>
                            <li><a href="">Miniškolka</a></li>
                        </ul>
                    </nav>
                    <nav class="col-md-3">
                        <img class="big-circle" src="img/img-system/education/zs.png" alt="Základní školy">
                        <ul>
                            <li><a href="">ZŠ 1 - žlutá</a></li>
                            <li><a href="">ZŠ 2 - červená</a></li>
                            <li><a href="">ZŠ 3 - modrá</a></li>
                            <li><a href="">Školamyšl - zelená</a></li>
                            <li><a href="">Speciální ZŠ Litomyšl</a></li>
                        </ul>
                    </nav>
                    <nav class="col-md-3">
                        <img class="big-circle" src="img/img-system/education/ss.png" alt="Střední školy">
                        <ul>
                            <li><a href="">Gymnázium A. Jiráska</a></li>
                            <li><a href="">Trading Centre</a></li>
                            <li><a href="">SŠ zahradnická a technická</a></li>
                            <li><a href="">SŠ pedagogická</a></li>
                        </ul>
                    </nav>
                    <nav class="col-md-3">
                        <img class="big-circle" src="img/img-system/education/vs.png" alt="Vysoké školy">
                        <ul>
                            <li><a href="">VŠ - Fakulta restaurování</a></li>
                            <li><a href="">Univerzity Pardubice</a></li>
                            <li><a href="">VOŠ pedagogická</a></li>
                        </ul>
                    </nav>


                    <nav class="col-md-12 education-other">
                        <a class="col-md-2" href=""><img src="img/img-system/education/zus.png" alt="Logo ZUŠ - Základní umělecká škola"><span>ZUŠ - Základní umělecká škola</span></a>
                        <a class="col-md-2" href=""><img src="img/img-system/education/svc.png" alt="Logo Středisko volného času"><span>Středisko volného času</span></a>
                        <a class="col-md-2" href=""><img src="img/img-system/education/zn.png" alt="Logo Škola na zámku"><span>Škola na zámku</span></a>
                        <a class="col-md-2" href=""><img src="img/img-system/education/szus.png" alt="Logo Soukromá základní umělecká škola"><span>Soukromá základní umělecká škola</span></a>
                        <a class="col-md-2" href=""><img src="img/img-system/education/library.png" alt="Logo LU3V - univerzita třetího věku"><span>LU3V - univerzita třetího věku</span></a>
                        <a class="col-md-2" href=""><img src="img/img-system/education/skaut.png" alt="Logo Skaut"><span>Skaut</span></a>
                    </nav>

                    <div class="cleaner">&nbsp;</div>
                    <div id="education-footer">
                        <nav class="col-md-6">
                            <h3>Projekty</h3>
                            <ul>
                                <li><a href="">MAP I - Místní akční plán rozvoje vzdělávání I</a></li>
                                <li><a href="">MAP II - Místní akční plán rozvoje vzdělávání II</a></li>
                                <li><a href="">CVP - Cestou vzájemného porozumění</a></li>
                            </ul>
                        </nav>
                        <nav class="col-md-3">
                            <h3>Každoroční akce</h3>
                            <ul>
                                <li><a href="">Konference sociální péče</a></li>
                                <li><a href="">Nakopněte svoji školu</a></li>
                                <li><a href="">Litomyšlské fórum</a></li>
                            </ul>
                        </nav>
                        <nav class="col-md-3">
                            <h3>Aktivity</h3>
                            <ul>
                                <li><a href="">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="">Dum dolor sit amet</a></li>
                                <li><a href="">Ipsum dolor sit amet</a></li>
                            </ul>
                        </nav><div class="cleaner"></div>
                    </div>
                </div>
            </div>
            <div class="wrap-side bg-red">
                <div class="pad-main-right">
                    <img class="seminars-img" src="img/img-system/education/conference.png" alt="Přednášky a semináře">
                    <h3>Přednášky a&nbsp;semináře</h3>
                    <div class="cleaner"></div>

                    <div class="seminar-list">
                        <a href="">
                            <h4>Lorem ipsum dolor smet, lo ipsum dolor sit amet</h4>
                            <p>25.2. / 8:00 / Smetanovo náměstí</p>
                        </a>
                        <a href="">
                            <h4>Lorem ipsum dolor smet, lo ipsum dolor sit amet</h4>
                            <p>25.2. / 8:00 / Smetanovo náměstí</p>
                        </a>
                        <a href="">
                            <h4>Lorem ipsum dolor smet, lo ipsum dolor sit amet</h4>
                            <p>25.2. / 8:00 / Smetanovo náměstí</p>
                        </a>
                        <a href="" class="seminary-more"><span>Další...</span></a>
                    </div>
                </div><div class="cleaner"></div>
            </div>
            <div class="cleaner"></div>
        </section>

        <?php  include("layouts/_footer.php");  ?>
        <?php  include('layouts/_facebookSide.php');  ?>
    </body>
</html>