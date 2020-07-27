/* navbar scroll */
jQuery(document).ready(function() {

    jQuery(window).on("scroll",function(){
        if(jQuery(document).scrollTop() >50 ){
            jQuery('.navbar').addClass('navbar-white-scroll');
        }
        else{
            jQuery('.navbar').removeClass('navbar-white-scroll');
        }
    });


    jQuery('.navbar-toggler').on("click",function(){
        if(jQuery('.navbar').hasClass('navbar-white-scroll')){
            jQuery('.navbar').removeClass('navbar-white-scroll');
        }
        else{
            jQuery('.navbar').addClass('navbar-white-scroll');
        }
    });

});


