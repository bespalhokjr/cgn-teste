jQuery(document).ready(function(){

    let btn_menu = jQuery('#btn-menu');

    btn_menu.click(function(){
        
        if(jQuery('.cssmenu').hasClass('aberto')){
            jQuery('.cssmenu').slideDown();
            jQuery('.cssmenu').removeClass('aberto')
        }else{
            jQuery('.cssmenu').slideUp();
            jQuery('.cssmenu').addClass('aberto');
        }

    });

});