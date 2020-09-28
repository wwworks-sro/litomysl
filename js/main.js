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

	/* Initialize slider */
	$(".slider").simpleSlider();
	/* pripominky */
	$(".cal-type-trigger[caltype=pripominka]").click(function () {
		var x = $("footer").position();
		window.scrollTo(x.left, x.top);
		$(".cal-type-pripominka").show();
	});



    /*Showing more content*/
    $('.trigger-more').click(function(){
        var par = $(this).parent().parent();
        var triggeredVisible = par.find('.text-more').is(':visible');
        if(triggeredVisible){
            par.find('.text-more').slideUp();
        }else{
            par.find('.text-more').slideDown();
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
        }
        else{
            $('header').removeClass("scrolled");
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
                    var wshadow =  $('.selected-menu-shadow').width();
                    var mswidth =  $('.menu-selected').width();
                    var posSel = $('.menu-selected').position().left;
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
                'url': 'http://litomysl.wwworks.cz/_nabidka-sportu.php',                    /***Upravit podle nové adresy***/
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
                'url': 'http://litomysl.wwworks.cz/_tipy-na-vylet.php',                     /***Upravit podle nové adresy***/
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
            'url': 'http://litomysl.wwworks.cz/_news-ajax.php',                        /***Upravit podle nové adresy***/
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
            'url': 'http://litomysl.wwworks.cz/_aktuality-ajax.php',                        /***Upravit podle nové adresy***/
            'cache': false,
            'success': function (html) {
                jQuery('#aktuality-wrap').html(html)
            }
        });
        $(".tab-selected").removeClass('tab-selected');
        $(this).addClass('tab-selected');
    });
	
	$('#nabidka-sportu a.square-pic').click(function(){
        var type = $(this).children().attr('alt');
		console.log('test'+type);
        jQuery.ajax({
            'url': 'http://litomysl.wwworks.cz/_nahled-sportu-ajax.php',                        /***Upravit podle nové adresy***/
            'cache': false,
            'success': function (html) {
                jQuery('#sport-detail-wrap').html(html).addClass('sport-triggered').attr("type", type)
            }
        });
    });

    /*Mobile menu*/
    $('.overlay-close').click(function(){
        $(".overlay").hide();
        $(".overlay-hugeinc.open").removeClass('overlay-hugeinc.open');
    });
    $('#trigger-overlay').hover(function(){
        $(".overlay").show();
    });
    $('#trigger-overlay').click(function(){
        $(".overlay-hugeinc").removeClass('overlay-hugeinc').addClass('overlay-hugeinc.open');
    });

    $('.overlay-close').click(function(){
        $(".overlay").hide();
        $(".overlay-hugeinc.open").removeClass('overlay-hugeinc.open');
    });

    /*Mobile fulltext*/
    $('.header-search ').click(function(){
        $('.fulltext-form').toggle("slow");
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

            if(!$('.toggle-title-banner .title-banner-content').length){
                var cookieValue = "false";
                expire.setTime(today.getTime());
                document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";

                location.reload();
            }else{
                $('#title-banner .title-banner-content').slideUp();
                var nDays = 999;
                var cookieValue = "true";

                expire.setTime(today.getTime() + 3600000*24*nDays);
                document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
            }
    }


    $('.toggle-title-banner').click(function(){
        if(!$('.toggle-title-banner .title-banner-content').length){
            var r = confirm("Opravdu chcete zobrazit titulní banner?");
            if (r == true) {
                processTitleBannerChange();
            }
        }else{
            var r = confirm("Opravdu chcete skrýt titulní banner? " +
                "(Kdykoli je možné jej opět zobrazit pomocí kliku na tento odkaz)");
            if (r == true) {
                processTitleBannerChange();
            }
        }
    });

    $('.mb-trigger').click(function(){
        var trid = $(this).attr('trigger');
        if($(trid).is(":hidden")){
            $('#'+trid).slideUp();
        }else{
            $('#'+trid).slideDown();
        }
    });



});

