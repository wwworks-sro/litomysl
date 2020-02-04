<?php
/* Třída "selected-menu-group" určuje zda aktuální stránka spadá pod kategorii "občan" nebo "turista/volný čas"*/
$fileName = basename($_SERVER['PHP_SELF']);
?>

<header>
    <div id="header-wrap">
        <div class="menu animated fadeIn" id="trigger-overlay">
            <img src='img/img-system/header/menu-icon-2.png' alt='Menu' />
        </div>

        <a id="logo" class="col-md-2" href="/">
            <img src="img/img-system/header/litomysl-logo.png" alt="Logo Litomyšl">
        </a>

        <nav id='main-navigation' class="col-md-9">

            <ul class="col-md-5 <?php  if($fileName != 'turista.php'){ ?>selected-menu-group<?php  } ?>">
                <li>
                    <a class="menu-group-title" href="">občan / radnice</a>
                    <ul>
                        <li> <a href="">služby</a> </li>
                        <li> <a href="">úřad</a> </li>
                        <li> <a href="">lidé</a> </li>
                        <li> <a href="">vzdělávání</a> </li>
                        <li> <a href="">kontakty</a> </li>
                    </ul>
                    <img class="selected-menu-shadow" src="img/img-system/header/shadow.png" alt="Vybrané menu">
                </li>
            </ul>
            <ul class="col-md-7 <?php  if($fileName == 'turista.php'){ ?>selected-menu-group<?php  } ?>">
                <li>
                    <a class="menu-group-title" href="">turista / volný čas</a>
                    <ul>
                        <li> <a href="">o Litomyšli</a> </li>
                        <li> <a href="">památky</a> </li>
                        <li> <a href="">kultura</a> </li>
                        <li> <a href="">sport</a> </li>
                        <li> <a href="">kalendář akcí</a> </li>
                    </ul>
                    <img class="selected-menu-shadow" src="img/img-system/header/shadow.png" alt="Vybrané menu">
                </li>
            </ul>
        </nav>

        <div id="header-right" class="col-md-1">
            <div id="lang-box">
                <a href="">en</a>
                <a href="">de</a>
                <a href="">fr</a>
            </div>
            <div id="social-box">
                <a target="_blank" href="https://www.instagram.com/lazneduchalitomysl/?hl=cs"><img src="img/img-system/header/but-instagram.png" alt="Instagram Litomyšl"></a>
                <a target="_blank" href="#"><img src="img/img-system/header/but-youtube.png" alt="Youtube Litomyšl"></a>
                <a target="_blank" href="https://www.facebook.com/Litomysl.oficialni/"><img src="img/img-system/header/but-facebook.png" alt="Facebook Litomyšl"></a>
            </div>
            <a id="contacts-link" href="">kontakty</a>
        </div>
    </div>
</header>

