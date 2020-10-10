
<!DOCTYPE html>

    <?php  include("layouts/_head.php");  ?>

    <body class="sub-page">
        <?php  include('layouts/_header.php');  ?>

<!--  -----------------------------------Kalendář-----------------------------------------------  -->

        <section id="kalendar" class="gray-layout">
            <div class="wrap-main">
                <div class="pad-main-left">
                    <a href="#calendar-search" class="calendar-search-mobile-link">Vyhledávání v kalendáři</a>
                    <div class="sub-header">
                        <img class="subpage-icon" src="img/img-system/calendar/calendar-detail.png" alt="kalendář">
                        <div class="header-text">
                            <div class="breadcrumb">
                                <a href="">Volný čas / turista</a>   >   Kalendář akcí
                            </div>
                                <h1 class="subpage-title">
                                    30. září 2019
                                    <span>/  pátek </span>
                                    <strong>Kalendář akcí</strong>
                                </h1>
                        </div>
                        <div class="cleaner"></div>
						<div class="arrows subpage-title arrow-left">
							<a href=""><img src="img/img-system/layout/arrow-left-red.png">&nbsp;&nbsp;</a>
						</div>
						<div class="arrows subpage-title arrow-left text">
							<h1><a href=""><strong>předchozí den</strong></a></h1>
						</div>
						<div class="arrows subpage-title arrow-right">
							<a href="">&nbsp;&nbsp;<img src="img/img-system/layout/arrow-left-red.png" class="arrow-rotate"></a>
						</div>
						<div class="arrows subpage-title arrow-right text">
							<h1><a href=""><strong>následující den</strong></a></h1>
						</div>
					</div>
                    <div class="cal-links-main">
                        <div class="cal-item-detail">
                            <div class="cal-detail-icon">
                                <img src="img/img-system/tourist/event-red-drama.png" alt="divadlo">
                            </div>
                            <div class="cal-detail-text">
                                <a href=""><h4>Lorem ipsum dolor smet, lo ipsum dolor</h4></a>
                                <div class="cal-date-location"><strong>30. září</strong>, 8:00   &nbsp;&nbsp;&nbsp;&nbsp;  <a href="" title="Zobrazit všechny akce na tomto místě"><img src="img/img-system/calendar/pointer.png" alt="Místo"> Smetanovo náměstí</a></div>
                                <div class="cal-perex">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero. Nam libero tempore. Ipsum dolor si Dolor sit amet, elit. Nam libero tempore. Lorem ipsum dolor sit amet, consectetuer ero tempore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero. Sit amet, elit. Nam libero tempore.
                                        <a class="cal-more" href="">Více...</a></p>
                                </div>
                                <div class="cal-perex-links">
                                    <a class="cal-google-link"  target="_blank"  href="https://www.google.com/calendar/render?action=TEMPLATE&text=<?php echo urlencode('Název akce');?>&dates=<?php echo time();?>&details=<?php echo urlencode('Lorem ipsum dolor');?>&location=<?php echo urlencode('Lorem ipsum dolor');?>&sf=true&output=xml" >
                                        <img src="img/img-system/calendar/calendar-add.png" alt="Kalendář"> Přidat do Google kalendáře
                                    </a>
                                    <a class="cal-web-link" href="" title="Přejít na web akce">
                                        <img src="img/img-system/calendar/network.png" alt="Web akce"> web akce
                                    </a>
                                    <a class="cal-organisation-link" href="" title="Zobrazit všechny akce tohoto pořadatele">
                                        <img src="img/img-system/calendar/person.png" alt="Pořadatel"> Smetanův dům
                                    </a>
                                </div>
                            </div>
                            <div class="cal-detail-image">
                                <img src="img/img-calendar/S/lorem-ipsum-s.jpg" alt="divadlo">

                                <div class="cal-social">
									<div class="fb-like" data-href="http://litomysl.wwworks.cz/index.php" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                                </div>
                            </div>
                            <a class="cal-detail-link" href="">  </a>
                            <div class="cleaner"></div>
                        </div>

                        <div class="cal-item-detail">
                            <div class="cal-detail-icon">
                                <img src="img/img-system/tourist/event-red-sport.png" alt="divadlo">
                            </div>
                            <div class="cal-detail-text">
                                <a href=""><h4>Lorem ipsum dolor smet, lo ipsum dolor</h4></a>
                                <div class="cal-date-location"><strong>30. září</strong>, 8:00   &nbsp;&nbsp;&nbsp;&nbsp;  <a href=""><img src="img/img-system/calendar/pointer.png" alt="Místo"> Smetanovo náměstí</a></div>
                                <div class="cal-perex">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero. Nam libero tempore. Ipsum dolor si Dolor sit amet, elit. Nam libero tempore. Lorem ipsum dolor sit amet, consectetuer ero tempore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero. Sit amet, elit. Nam libero tempore.
                                        <a class="cal-more" href="">Více...</a></p>
                                </div>
                                <div class="cal-perex-links">
                                    <a class="cal-google-link"  target="_blank"  href="https://www.google.com/calendar/render?action=TEMPLATE&text=<?php echo urlencode('Název akce');?>&dates=<?php echo time();?>&details=<?php echo urlencode('Lorem ipsum dolor');?>&location=<?php echo urlencode('Lorem ipsum dolor');?>&sf=true&output=xml" >
                                        <img src="img/img-system/calendar/calendar-add.png" alt="Kalendář"> Přidat do Google kalendáře
                                    </a>
                                    <a class="cal-web-link" href="">
                                        <img src="img/img-system/calendar/network.png" alt="Web akce"> web akce
                                    </a>
                                    <a class="cal-organisation-link" href="">
                                        <img src="img/img-system/calendar/person.png" alt="Pořadatel"> Smetanův dům
                                    </a>
                                </div>
                            </div>
                            <div class="cal-detail-image">
                                <img src="img/img-calendar/S/lorem-ipsum-s.jpg" alt="divadlo">

                                <div class="cal-social">
									<div class="fb-like" data-href="http://litomysl.wwworks.cz/kalendar.php" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                                </div>
                            </div>
                            <a class="cal-detail-link" href="">  </a>
                            <div class="cleaner"></div>
                        </div>
                    </div>


                    <div id="continuous-events">
                        <h3>Probíhající akce</h3>
                        <div class="cal-links-main">
                            <div class="cal-item-detail">
                                <div class="cal-detail-icon">
                                    <img src="img/img-system/tourist/event-red-social.png" alt="divadlo">
                                </div>
                                <div class="cal-detail-text">
                                    <a href=""><h4>Lorem ipsum dolor smet, lo ipsum dolor</h4></a>
                                    <div class="cal-date-location"><strong>30. září</strong>, 8:00   &nbsp;&nbsp;&nbsp;&nbsp;  <a href=""><img src="img/img-system/calendar/pointer.png" alt="Místo"> Smetanovo náměstí</a></div>
                                    <div class="cal-perex">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero. Nam libero tempore. Ipsum dolor si Dolor sit amet, elit. Nam libero tempore. Lorem ipsum dolor sit amet, consectetuer ero tempore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero. Sit amet, elit. Nam libero tempore.
                                            <a class="cal-more" href="">Více...</a></p>
                                    </div>
                                    <div class="cal-perex-links">
                                        <a class="cal-google-link"  target="_blank"  href="https://www.google.com/calendar/render?action=TEMPLATE&text=<?php echo urlencode('Název akce');?>&dates=<?php echo time();?>&details=<?php echo urlencode('Lorem ipsum dolor');?>&location=<?php echo urlencode('Lorem ipsum dolor');?>&sf=true&output=xml" >
                                            <img src="img/img-system/calendar/calendar-add.png" alt="Kalendář"> Přidat do Google kalendáře
                                        </a>
                                        <a class="cal-web-link" href="">
                                            <img src="img/img-system/calendar/network.png" alt="Web akce"> web akce
                                        </a>
                                        <a class="cal-organisation-link" href="">
                                            <img src="img/img-system/calendar/person.png" alt="Pořadatel"> Smetanův dům
                                        </a>
                                    </div>
                                </div>
                                <div class="cal-detail-image">
                                    <img src="img/img-calendar/S/lorem-ipsum-s.jpg" alt="divadlo">

                                <div class="cal-social">
									<div class="fb-like" data-href="http://litomysl.wwworks.cz/kalendar.php" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                                </div>
                                </div>
                                <a class="cal-detail-link" href="">  </a>
                                <div class="cleaner"></div>
                            </div>
                        </div>
                    </div>

                    <div class="cleaner"></div>
                </div>
            </div>
            <div class="wrap-side">
                <div class="pad-main-right" id="calendar-search">

                    <div class="sub-header-side">
                        <a class="cal-lilie-link" href="">
                            <img src="img/img-system/calendar/newspaper.2.3.1.png" alt="divadlo">
                            <strong>
                                Lilie kalendář akcí
                                <span>(formát pdf, velikost 319,86 KB)</span>
                            </strong>
                        </a>
                    </div>
                    <div class="calendar-search-set">

                        <h2>Vyhledávání</h2>


                            <div class="col-md-12 search-type">
                                <div class="col-md-3 cal-type-trigger search-active" calType="den">
                                    <div>den</div>
                                </div>
                                <div class="col-md-3 cal-type-trigger" calType="mesic">
                                    <div>měsíc</div>
                                </div>
                                <div class="col-md-3 cal-type-trigger" calType="misto">
                                    <div>místo</div>
                                </div>
                                <div class="col-md-3 cal-type-trigger" calType="nazev">
                                    <div>název</div>
                                </div>
                            </div>
                            <form id="calendar-search-day" class="calendar-search cal-type-den" method="post" action="#">
                            <div class="col-md-12">
                                <select  name="month" id="cars">
                                    <option value="vše">všechny typy akcí</option>
                                    <option value="kulturní akce">kulturní akce</option>
                                    <option value="sportovní akce">sportovní akce</option>
                                    <option value="společenské akce">společenské akce</option>
                                </select>
                            </div>
                            <div class="col-md-12"><input class="datepicker" type="text" name="calDate"></div>
                            <div class="col-md-12"><input class="submit search-submit" type="submit" name="vyhledat" value="zobrazit"></div>
                            <div class="cleaner"></div>
                        </form>
                        <div class="cleaner"></div>
                        <form id="calendar-search-month" class="calendar-search cal-type-mesic" method="post" action="#">

                            <div class="col-md-12">
                                <select  name="month" id="cars">
                                    <option value="vše">všechny typy akcí</option>
                                    <option value="kulturní akce">kulturní akce</option>
                                    <option value="sportovní akce">sportovní akce</option>
                                    <option value="společenské akce">společenské akce</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="month" id="mesic">
                                    <option value="09">zaří</option>
                                    <option value="10">říjen</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select  name="year" id="rok">
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input class="submit search-submit" type="submit" name="vyhledat" value="zobrazit">
                            </div>
                            <div class="cleaner"></div>
                        </form> <div class="cleaner"></div>
                        <form id="calendar-search-span" class="calendar-search cal-type-oddo" method="post" action="#">

                            <div class="col-md-12">
                                <select  name="month" id="cars">
                                    <option value="vše">všechny typy akcí</option>
                                    <option value="kulturní akce">kulturní akce</option>
                                    <option value="sportovní akce">sportovní akce</option>
                                    <option value="společenské akce">společenské akce</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-compensate-padding">
                                <input class="datepicker" name="calStart"></input>
                            </div>
                            <div class="col-md-6 form-compensate-padding">
                                <input class="datepicker" name="calEnd"></input>
                            </div>
                            <div class="col-md-12">
                                <input class="submit search-submit" type="submit" name="vyhledat" value="zobrazit">
                            </div>
                            <div class="cleaner"></div>
                        </form>
                        <div class="cleaner"></div>

                        <form id="calendar-search-name" class="calendar-search cal-type-nazev" method="post" action="#">
                            <div class="col-md-12"><input type="text" name="calName"></div>
                            <div class="col-md-12"><input class="submit search-submit" type="submit" name="vyhledat" value="zobrazit"></div>
                            <div class="cleaner"></div>
                        </form>
                    </div>
                </div>
                <div class="cleaner"></div>
            </div>
            <div class="cleaner"></div>
        </section>

        <?php  include("layouts/_footer.php");  ?>
        <?php  include('layouts/_facebookSide.php');  ?>
    </body>
</html>