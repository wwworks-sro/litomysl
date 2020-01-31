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
});

