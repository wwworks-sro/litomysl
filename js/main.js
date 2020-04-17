$( document ).ready(function() {

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

    /*Opening hidden pages*/
    $('#sport-list').click(function(){
        var par = $(this).parent();
        if(!par.find('.section-heading').length){
            $('#sport-options-wrap').slideUp();
            jQuery.ajax({
                'url': 'http://litomysl.wwworks.cz/_nabidka-sportu.php',
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
                'url': 'http://litomysl.wwworks.cz/_tipy-na-vylet.php',
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
    $('.cal-detail-link').height($('.cal-item-detail').height());

    $('.hint-list-trigger').hover(function(){
        $(this).find('.hint-list').fadeIn('slow');
        $(this).find('.hint-list .pad').slideDown('slow');
    });

    $('.hint-list-trigger').mouseleave(function(){
        $(this).find('.hint-list').fadeOut('slow');
        $(this).find('.hint-list .pad').slideUp('slow');
    });


    $('.cal-type-trigger').click(function(){
        var calType = $(this).attr('calType');
        $('.search-active').removeClass('search-active');
        $(this).addClass('search-active');
        $('.calendar-search-set form').hide();
        var className = '.cal-type-'+calType;
        $(className).fadeIn('slow');
    });

});

