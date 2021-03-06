$( document ).ready(function() {
	/* Move view after scroll */
	 (function($, window) {
        var adjustAnchor = function() {
            var $anchor = $(':target'),
                    fixedElementHeight = 90;
            if ($anchor.length > 0) {
                $('html, body')
                    .stop()
                    .animate({
                        scrollTop: $anchor.offset().top - fixedElementHeight
                    }, 200);
            }
        };
        $(window).on('hashchange load', function() {
            adjustAnchor();
        });
	})(jQuery, window);

	/* pripominky */
	$(".cal-type-trigger[caltype=pripominka]").click(function () {
		$("html, body").animate({
                    scrollTop: $(
                      'html, body').get(0).scrollHeight
                }, 2000);
		$(".cal-type-pripominka").show();
	});



    /*Showing more content*/
    $('.trigger-more').click(function(){
        var par = $(this).parent().parent();
        var triggeredVisible = par.find('.text-more').is(':visible');
        if(triggeredVisible){
            par.find('.text-more').show().slideUp();
        }else{
            par.find('.text-more').hide().slideDown();
        }
    });



    //smooth-scrolling
    $("a").click(function() {
        var href = $(this).attr('href');
        if(href != undefined && href.indexOf("#") >= 0) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        }

    });


    //scrolled
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200){
            $('header').addClass("scrolled");
            $('body').addClass("scrolled-down");
        }
        else{
            $('header').removeClass("scrolled");
            $('body').removeClass("scrolled-down");
        }
    });


//highlight by scrolling
    $(document).on('scroll',function(e)
    {
        $('section').each(function()
        {
            if ( $(this).offset().top < window.pageYOffset + 400
                &&   $(this).offset().top +
                $(this).height() > window.pageYOffset + 400
            )
            {
                var currentSection = $(this).attr('id');
                $('.menu-selected').removeClass('menu-selected');
                $('#menu-'+currentSection).addClass('menu-selected');

                if ( $('.menu-selected').length ) {
                    var wshadow =  $('.selected-menu-group .selected-menu-shadow').width();
                    var mswidth =  $('.menu-selected').width()+14;
                    var posSel = $('.menu-selected').position().left-7;
                    var resultPos = posSel - (wshadow/2) + (mswidth / 2)+5;
                    $('.selected-menu-shadow').css('left', resultPos);
                }

            }
        });
    });



    /*Opening hidden pages*/
    $('#sport-list').click(function(){
        var par = $(this).parent();
        if(!par.find('.section-heading').length){
            $('#sport-options-wrap').slideUp();
            jQuery.ajax({
                'url': 'https://www.litomysl.cz/program_files/moduly/_nabidka-sportu.php',                    /***Upravit podle novĂ© adresy***/
                'cache': false,
                'success': function (html) {
                    jQuery('#sport-options-wrap').html(html)
                }
            });
            $('#sport-options-wrap').slideDown('slow');
        }else{
            $('#sport-options-wrap').slideToggle();
        }
    });

    $('#trips-map').click(function(){

        var par = $(this).parent();
        if(!par.find('.section-heading').length){
            $('#trips-wrap').slideUp();
            jQuery.ajax({
                'url': 'https://www.litomysl.cz/program_files/moduly/_tipy-na-vylet.php',                     /***Upravit podle novĂ© adresy***/
                'cache': false,
                'success': function (html) {
                    jQuery('#trips-wrap').html(html)
                }
            });
            $('#trips-wrap').slideDown('slow');
        }else{
            $('#trips-wrap').slideToggle();
        }
    });

    $('#news-tabs-simple li').click(function(){
        var par = $(this).parent();
        var news = $(this).attr('news');

        jQuery.ajax({
            'url': 'https://www.litomysl.cz/program_files/moduly/_news-ajax.php?category='.concat(news),                        /***Upravit podle novĂ© adresy***/
            'cache': false,
            'success': function (html) {
                jQuery('#news-wrap').html(html)
            }
        });
        $(".tab-selected").removeClass('tab-selected');
        $(this).addClass('tab-selected');
    });

    $('#news-tabs li').click(function(){
        var par = $(this).parent();
        var news = $(this).attr('news');

        jQuery.ajax({
            'url': 'https://www.litomysl.cz/program_files/moduly/_akce-ajax.php?kdy='.concat(news),                        /***Upravit podle novĂ© adresy***/
            'cache': false,
            'success': function (html) {
                jQuery('#akce-wrap').html(html)
            }
        });
        $(".tab-selected").removeClass('tab-selected');
        $(this).addClass('tab-selected');
    });

	/* posunuti po kliku nahoru + zobrazeni detailu */
	jQuery('#sport-options-wrap .square-pic').attr("href", '#nabidka-sportu');

  $('#nabidka-sportu a.square-pic').click(function(){
        var type = $(this).children().attr('alt');
        var sport = $(this).attr('sport');
        jQuery.ajax({
            'url': 'https://www.litomysl.cz/program_files/moduly/_nahled-sportu-ajax.php?sport='.concat(sport),                        /***Upravit podle novĂ© adresy***/
            'cache': false,
            'success': function (html) {
                jQuery('#sport-detail-wrap').html(html).addClass('sport-triggered').attr("type", type)
            }
        });
    });

	$('a.show-video-box').click(function(){
        var video = $(this).attr('video');
        jQuery.ajax({
            'url': 'https://www.litomysl.cz/program_files/moduly/_nahled-video.php',                        /***Upravit podle novĂ© adresy***/
            'cache': false,
            'success': function (html) {
				jQuery('#video-detail-wrap').html(html).addClass('video-triggered').addClass(video).attr("video", video);
            }
        });
    });

    /*Mobile menu*/
    $('.overlay-close, .overlay a').click(function(){
        $(".overlay").hide();
        $(".overlay-hugeinc-open").removeClass('overlay-hugeinc-open').addClass('overlay-hugeinc');
    });
    $('#trigger-overlay, #trigger-overlay .globe').hover(function(){
        $(".overlay").show();
    });
    $('#trigger-overlay').click(function(){
        $(".overlay-hugeinc").removeClass('overlay-hugeinc').addClass('overlay-hugeinc-open');
    });
	$('#trigger-overlay .globe').click(function(){
        $(".overlay-hugeinc").removeClass('overlay-hugeinc').addClass('overlay-hugeinc-open');
		$(".overlay nav ul").hide();
    });

    $('.overlay-close').click(function(){
        $(".overlay").hide();
        $(".overlay-hugeinc-open").removeClass('overlay-hugeinc-open').addClass('overlay-hugeinc');
		$(".overlay nav ul").show();
    });

    /*Mobile fulltext*/
    $('.header-search.lupa, .close-fulltext').click(function(){
        $('.add-fulltext-form').toggle("slow");
		var wid = $(window).width();
		if(wid>1049){
			$('#main-navigation').toggle("slow");
		}else if(wid<651){
			$('#header-wrap #logo img').toggle("slow");
		}
    });

    /*Height of the links on calendar page*/
	$('.cal-detail-link').each(function(i){
		$(this).height($(this).parent().height());
	})

    $('.hint-list-trigger').hover(function(){
        $(this).find('.hint-list').fadeIn('slow');
        $(this).find('.hint-list .pad').slideDown('slow');
    });

    $('.hint-list-trigger').mouseleave(function(){
        $(this).find('.hint-list').fadeOut('slow');
        $(this).find('.hint-list .pad').slideUp('slow');
    });

	$('.cal-type-trigger[caltype!="pripominka"]').click(function(){
        var calType = $(this).attr('calType');
        $('.search-active').removeClass('search-active');
        $(this).addClass('search-active');
        $('.calendar-search-set form').hide();
        var className = '.cal-type-'+calType;
        $(className).fadeIn('slow');
		$(".cal-type-pripominka").show();
    });


        $(function(){
            $('.cb-enable,.cb-disable').click(function(){
                $('#cookie-bar').slideUp();

                var nDays = 999;
                var cookieName = "disclaimer";
                var cookieValue = "true";

                var today = new Date();
                var expire = new Date();
                expire.setTime(today.getTime() + 3600000*24*nDays);
                document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
            });
        });


    function processTitleBannerChange() {
            var cookieName = "hiddenBanner";
            var expire = new Date();
            var today = new Date();

            if($('.title-banner-content').length && $('.title-banner-content').is(":visible")){
                $('#title-banner .title-banner-content').slideUp();
                var nDays = 999;
                var cookieValue = "true";

                expire.setTime(today.getTime() + 3600000*24*nDays);
                document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
            }else{
                var cookieValue = "false";
                expire.setTime(today.getTime());
                document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
                location.reload();
            }
    }


    $('.toggle-title-banner').click(function(){
        if($('.title-banner-content').length && $('.title-banner-content').is(":visible")){
            var r = confirm("Opravdu chcete skrĂ˝t titulnĂ­ banner? " +
                "(Kdykoli je moĹľnĂ© jej opÄ›t zobrazit pomocĂ­ kliku na tento odkaz)");
            if (r == true) {
                processTitleBannerChange();
            }
        }else{
            processTitleBannerChange();
        }
		$('html,body').animate({
				scrollTop: 0
		}, 1000);
		$(".toggle-title-banner").load(location.href + " .toggle-title-banner");
    });

	/* Initialize slider */
	function processSliderChange() {
            var cookieName = "stopSlider";
            var expire = new Date();
            var today = new Date();

            if($('.static-slider').length>0){
				var cookieValue = "false";
                expire.setTime(today.getTime());
                document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
                location.reload();
            }else{
                var nDays = 999;
                var cookieValue = "true";

                expire.setTime(today.getTime() + 3600000*24*nDays);
                document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
				location.reload();
            }
    }


    $('.toggle-slider').click(function(){
        processSliderChange();
		$(".toggle-slider").load(location.href + " .toggle-slider");
    });

	$(".slider").simpleSlider();
	var options = {slideOnInterval: false,};
	$(".static-slider").simpleSlider(options);

    $('.mb-trigger').click(function(){
        var trid = $(this).attr('trigger');
        if($('#'+trid).is(":hidden")){
            $('#'+trid).slideDown();
        }else{
            $('#'+trid).slideUp();
        }
    });



});
