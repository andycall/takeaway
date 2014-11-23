 define(['jquery'], function($){
     var $cartUp = $('#cartScroll');
     $('.aside-icon-cart').on('click', toggleCartScroll);
     function toggleCartScroll(e){
        if(!parseInt($cartUp.css('top'))){
            $cartUp.animate({top: -$cartUp.height() + 'px'});
        }else{
            $cartUp.animate({top: '0px'});
        }

     }
	console.log("shop cart loaded");

 });