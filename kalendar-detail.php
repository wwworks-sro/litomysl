
<!DOCTYPE html>

    <?php  include("layouts/_head.php");  ?>

    <body class="sub-page">
        <?php  include('layouts/_header.php');  ?>

<!--  -----------------------------------Kalendář detail-----------------------------------------------  -->

        <section id="kalendar-detail" class="red-layout">
            <div class="wrap-main">
                <div class="pad-main-left">
                    <div class="sub-header">
                        <img class="subpage-icon" src="img/img-system/calendar/calendar-detail.png" alt="kalendář">
                        <div class="header-text">
                            <div class="breadcrumb">
                                <a href="">Občan / radnice</a>   > Kalendář
                            </div>
                                <h1 class="subpage-title">
                                    Název události lorem ipsum lorem ipsum lorem ipsum
                                </h1>
								<h3 class="main-info">
									<div class="date">
										<strong>26. srpna 2020</strong>
									</div>
									<div class="location">
										<img class="info-icon" src="img/img-system/calendar/pointer.png" alt="místo"> Zámek Litomyšl
									</div>
									<div class="person">
										<img class="info-icon" src="img/img-system/calendar/person.png" alt="místo"> NPÚ
									</div>
								</h3>
                                
                        </div>
                        <div class="cleaner"></div>
                    </div>
                    <div class="news-detail-images">
                        <img class="img-news-main" src="img/img-articles/L/news-lorem-ipsum-l.jpg" alt="Lorem ipsum dolor">
                        <div class="news-detail-gallery">
                            <a data-fancybox='gallery' href="img/img-gallery/L/gal-1-1.jpg">
                                <img src="img/img-gallery/S/gal-1-1.jpg" alt="Lorem ipsum dolor">
                            </a>
                            <a data-fancybox='gallery' href="img/img-gallery/L/gal-1-1.jpg">
                                <img src="img/img-gallery/S/gal-1-1.jpg" alt="Lorem ipsum dolor">
                            </a>
                            <a data-fancybox='gallery' href="img/img-gallery/L/gal-1-1.jpg">
                                <img src="img/img-gallery/S/gal-1-1.jpg" alt="Lorem ipsum dolor">
                            </a>
                            <a data-fancybox='gallery' href="img/img-gallery/L/gal-1-1.jpg">
                                <img src="img/img-gallery/S/gal-1-1.jpg" alt="Lorem ipsum dolor">
                            </a>
                        </div>
                    </div>
                    <div class="text-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam libero. Nam libero tempore. Ipsum dolor si Dolor sit amet, elit. Nam libero tempore. Lorem ipsum dolor sit amet, consectetuer ero tempore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <p>Lorem ipsum <a>dolor sit amet</a>, consectetuer adipiscing elit. Fusce suscipit libero eget elit. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Integer in sapien. Aliquam in lorem sit amet leo accumsan lacinia. Integer in sapien. Nulla non arcu lacinia neque faucibus fringilla. Nulla quis diam. Aenean vel massa quis mauris vehicula lacinia. Vivamus luctus egestas leo. Phasellus et lorem id felis nonummy placerat.</p>
						<div class="col-md-4">
							<strong>předprodej</strong>
						</div>
						<div class="col-md-8">
							vstupenky na taneční prohlídky Hradozámeckého dne v Litomyšli je možné zakoupit on-line přes vstupenkový portál Národního památkového ústavu nebo na pokladně zámku
						</div>
						<div class="col-md-4">
							<strong>cena</strong>
						</div>
						<div class="col-md-8">
							1000 kč
						</div>
					</div>
					<div class="cleaner"></div>
					<div class="hline"></div>
					<div class="date-content">
						<div class="col-md-2">
							<strong>datum</strong>
						</div>
						<div class="cal-perex-links col-md-10">
							<div class="col-md-4">
								29.8. 2020 15:00
							</div>
							<div class="col-md-8">
								<a class="cal-google-link"  target="_blank"  href="https://www.google.com/calendar/render?action=TEMPLATE&text=<?php echo urlencode('Název akce');?>&dates=<?php echo time();?>&details=<?php echo urlencode('Lorem ipsum dolor');?>&location=<?php echo urlencode('Lorem ipsum dolor');?>&sf=true&output=xml" >
									<img src="img/img-system/calendar/calendar-add.png" alt="Kalendář"> Přidat do Google kalendáře termín 29.8.2020
								</a>
							</div>
							
							<div class="col-md-4">
								29.8. 2020 14:00
							</div>
							<div class="col-md-8">
								<a class="cal-google-link"  target="_blank"  href="https://www.google.com/calendar/render?action=TEMPLATE&text=<?php echo urlencode('Název akce');?>&dates=<?php echo time();?>&details=<?php echo urlencode('Lorem ipsum dolor');?>&location=<?php echo urlencode('Lorem ipsum dolor');?>&sf=true&output=xml" >
									<img src="img/img-system/calendar/calendar-add.png" alt="Kalendář"> Přidat do Google kalendáře termín 29.8.2020
								</a>
							</div>
							
							<div class="col-md-4">
								29.8. 2020 13:00
							</div>
							<div class="col-md-8">
								<a class="cal-google-link"  target="_blank"  href="https://www.google.com/calendar/render?action=TEMPLATE&text=<?php echo urlencode('Název akce');?>&dates=<?php echo time();?>&details=<?php echo urlencode('Lorem ipsum dolor');?>&location=<?php echo urlencode('Lorem ipsum dolor');?>&sf=true&output=xml" >
									<img src="img/img-system/calendar/calendar-add.png" alt="Kalendář"> Přidat do Google kalendáře termín 29.8.2020
								</a>
							</div>
						</div>
					</div>
					<div class="cleaner"></div>
                </div>
            </div>
            <div class="cleaner"></div>
        </section>

        <?php  include("layouts/_footer.php");  ?>
        <?php  include('layouts/_facebookSide.php');  ?>

        <link rel="stylesheet" type="text/css" href="js/lightbox3/dist/jquery.fancybox.min.css" />
        <script src="js/lightbox3/dist/jquery.fancybox.min.js"></script>

    </body>
</html>