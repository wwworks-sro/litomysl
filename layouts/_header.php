<?php
/* Třída "selected-menu-group" určuje zda aktuální stránka spadá pod kategorii "občan" nebo "turista/volný čas"*/
$fileName = basename($_SERVER['PHP_SELF']);
/* Fb script inicializace */ ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v8.0" nonce="ed3YYYec"></script><header>
    <div id="header-wrap">
        <div class="menu animated fadeIn" id="trigger-overlay">
            <img src='img/img-system/header/menu-icon-2.png' alt='Menu' />
        </div>

        <a id="logo" class="col-md-2" href="/">
            <img src="img/img-system/header/litomysl-logo.png" alt="Logo Litomyšl">
        </a>
		<?php  if($fileName != 'index-en.php'){ ?>
			<nav id='main-navigation' class="col-md-9">
		
				<ul class="col-md-5 <?php  if($fileName != 'turista.php'){ ?>selected-menu-group<?php  } ?>">
					<li>
						<a class="menu-group-title" href="">občan / radnice</a>
						<ul>
							<li id="menu-sluzby"> <a href="#sluzby">služby</a> </li>
							<li id="menu-mestsky-urad"> <a href="">úřad</a> </li>
							<li id="menu-lide"> <a href="">lidé</a> </li>
							<li id="menu-vzdelavani"> <a href="">vzdělávání</a> </li>
							<li id="menu-kontakty"> <a href="#kontakty">kontakty</a> </li>
						</ul>
						<img class="selected-menu-shadow" src="img/img-system/header/shadow.png" alt="Vybrané menu">
					</li>
				</ul>
				<ul class="col-md-7 <?php  if($fileName == 'turista.php'){ ?>selected-menu-group<?php  } ?>">
					<li>
						<a class="menu-group-title" href="">turista / volný čas</a>
						<ul>
							<li id="menu-o-litomysli"> <a href="">o Litomyšli</a> </li>
							<li id="menu-pamatky-architektura"> <a href="">památky</a> </li>
							<li id="menu-kultura"> <a href="">kultura</a> </li>
							<li id="menu-sport"> <a href="">sport</a> </li>
							<li id="menu-kalendar-akci"> <a href="">kalendář akcí</a> </li>
						</ul>
						<img class="selected-menu-shadow" src="img/img-system/header/shadow.png" alt="Vybrané menu">
					</li>
				</ul>
			</nav>
		<?php }else{ ?>
			<nav id='main-navigation' class="col-md-9 en">
				<ul class="selected-menu-group">
					<li>
						<ul>
							<li> <a href="">home</a> </li>
							<li> <a href="">about Litomyšl</a> </li>
							<li> <a href="">sightseeings</a> </li>
							<li> <a href="">culture</a> </li>
							<li> <a href="">sport</a> </li>
							<li> <a href="">calendar</a> </li>
						</ul>
						<img class="selected-menu-shadow" src="img/img-system/header/shadow.png" alt="Vybrané menu">
					</li>
				</ul>
			</nav>
		<?php } ?>
		
        <div id="header-right">
            <img class="header-search" src="img/img-system/header/search-icon.png" alt="Vyhledávat na webu">
        </div>
    </div>
    <div id="lang-box" <?php if($fileName != 'turista.php' && $fileName != 'index.php'){ ?>class="search-on"<?php } ?> >
		<?php  if($fileName != 'index-en.php'){ ?>
			<?php  if($fileName != 'turista.php' && $fileName != 'index.php'){ ?>
				<a href="#kontakty"><img class="subpage-search" src="http://temp.litomysl.cz/program_files/img/img-system/header/search-icon.png" alt="Vyhledávat na webu"></a><br/>
			<?php } ?>
			<a href="">en</a>
		<?php } else { ?>
			<a href="">cs</a>
		<?php } ?>
    </div>
</header>

