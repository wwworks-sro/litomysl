$( document ).ready(function() {
    $('.trigger-more').click(function(){
        var par = $(this).parent().parent();
        var triggeredVisible = par.find('.text-more').is(':visible');
        if(triggeredVisible){
            par.find('.text-more').slideUp();
        }else{
            par.find('.text-more').slideDown();
        }
    });


    $('#sport-list').click(function(){
        var par = $(this).parent();
        if(!par.find('.section-heading').length){
            $('#sport-options-wrap').slideUp();
            jQuery.ajax({
                    'url': 'http://localhost/litomysl/_nabidka-sportu.php',
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
                'url': 'http://localhost/litomysl/_tipy-na-vylet.php',
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

});

