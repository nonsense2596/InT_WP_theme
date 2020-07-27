/* navbar scroll */
jQuery(document).ready(function() {
    jQuery(window).on("scroll",function(){
        if(jQuery(document).scrollTop() >50){
            jQuery('.navbar').addClass('testing');
            /*jQuery('.navbar').animate({
                    backgroundColor: "#ffffff"
            }, 100
            );*/
        }
        else{
            jQuery('.navbar').removeClass('testing');
            /*jQuery('.navbar').animate({
                    backgroundColor: "#000000"
                }, 1000
            );*/
        }
    });
});

