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
		<div class="add-fulltext-form">
			<div id="___gcse_0"><div class="gsc-control-cse gsc-control-cse-cs"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8" _lpchecked="1"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id1"><table cellspacing="0" cellpadding="0" id="gs_id50" class="gstl_50 gsc-input" style="width: 100%; padding: 0px;"><tbody><tr><td id="gs_tti50" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="hledat" id="gsc-i-id1" dir="ltr" spellcheck="false" style="width: 100%; padding: 0px; border: none; margin: -0.0625em 0px 0px; height: 1.25em; background: url(&quot;https://www.google.com/cse/static/images/1x/cs/branding.png&quot;) left center no-repeat rgb(255, 255, 255); outline: none;"></td><td class="gsib_b"><div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" title="Vymazat vyhledávací pole" role="button" style="display: none;"><span class="gscb_a" id="gs_cb50" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>hledat</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="vymazat výsledky">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-overlay"><div class="gsc-results-close-btn" tabindex="0"></div><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"><div aria-label="refinement" role="tab" class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Vlastní vyhledávání</div><span class="gs-spacer"> </span></div></div><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"></div></div><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td><td class="gsc-orderby-container"><div class="gsc-orderby-invisible"><div class="gsc-orderby-label gsc-inline-block">Seřadit podle:</div><div class="gsc-option-menu-container gsc-inline-block"><div class="gsc-selected-option-container gsc-inline-block"><div class="gsc-selected-option">Relevance</div><div class="gsc-option-selector"></div></div><div class="gsc-option-menu-invisible"><div class="gsc-option-menu-item gsc-option-menu-item-highlighted"><div class="gsc-option">Relevance</div></div><div class="gsc-option-menu-item"><div class="gsc-option">Date</div></div></div></div></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><div><div class="gsc-expansionArea"></div></div></div></div></div></div><div class="gsc-modal-background-image" tabindex="0"></div></div></div></div>
		</div>
    </div>
    <div id="lang-box" class="search-on">
		<?php  if($fileName != 'index-en.php'){ ?>
			<img class="header-search" src="http://temp.litomysl.cz/program_files/img/img-system/header/search-icon.png" alt="Vyhledávat na webu"><br/>
			<a href="">en</a>
			<a href="">fr</a>
			<a href="">de</a>
			<a href="">pl</a>
		<?php } else { ?>
			<a href="">cs</a>
		<?php } ?>
    </div>
</header>

