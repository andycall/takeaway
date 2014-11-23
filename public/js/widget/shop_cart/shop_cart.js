define([ "jquery" ], function($) {
    function toggleCartScroll() {
        $cartUp.animate(parseInt($cartUp.css("top")) ? {
            top: "0px"
        } : {
            top: -$cartUp.height() + "px"
        });
    }
    var $cartUp = $("#cartScroll");
    $(".aside-icon-cart").on("click", toggleCartScroll), console.log("shop cart loaded");
});