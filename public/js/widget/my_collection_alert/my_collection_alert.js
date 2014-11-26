define([ "jquery" ], function($) {
    console.log("my collection alert loaded"), $(".add").on("click", function() {
        $(".collection-modal").css("display", "block");
    }), $(".collection-modal .close").on("click", function() {
        $(".collection-modal").css("display", "none");
    }), $(".collection-modal a").on("click", function() {
        $(".collection-modal").css("display", "none");
    }), $(".collection-modal .hot").on("click", function() {
        $(".collection-modal .new-res").css("display", "none"), $(".collection-modal .new").removeClass("action"), 
        $(".collection-modal .hot-res").css("display", "block"), $(this).addClass("action");
    }), $(".collection-modal .new").on("click", function() {
        $(".collection-modal .hot-res").css("display", "none"), $(".collection-modal .hot").removeClass("action"), 
        $(".collection-modal .new-res").css("display", "block"), $(this).addClass("action");
    });
});