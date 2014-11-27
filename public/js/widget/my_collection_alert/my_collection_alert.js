define([ "jquery" ], function($) {
    console.log("my collection alert loaded");
    var n, cancel_collection = [], add_collection = [];
    $(".add").on("click", function() {
        $(".collection-modal").css("display", "block"), $(".collection-modal input").each(function() {
            $(this).is(":checked") && (n = $(this).attr("shop_id"), cancel_collection[n] = new Array(2), 
            cancel_collection[n].shop_id = n, cancel_collection[n].place_id = $(this).attr("place_id"));
        });
    }), $(".collection-modal").on("click", function(e) {
        var e_class = e.target.className || null;
        switch (e_class) {
          case "check":
            var shop_id = $(this).attr("shop_id"), click_checked = $(this)[0].checked, sameElement = $(".collection-modal").find("input[shop_id='" + shop_id + "']");
            sameElement.each(function() {
                this.checked = click_checked;
            });
            break;

          case "set close":
            $(".collection-modal").css("display", "none");
            break;

          case "btn btn-yellow":
            $(".collection-modal").css("display", "none"), $(".collection-modal input").each(function() {
                $(this).is(":checked") && (n = $(this).attr("shop_id"), add_collection[n] = new Array(2), 
                add_collection[n].shop_id = n, add_collection[n].place_id = $(this).attr("place_id"));
            }), add_collection.forEach(function(value, index) {
                cancel_collection[index] ? (cancel_collection.splice(index, 1), add_collection.splice(index, 1)) : (add_collection[n] = new Array(2), 
                add_collection[n].shop_id = n, add_collection[n].place_id = $(this).attr("place_id"));
            }), cancel_collection = [], add_collection = [];
            break;

          case "p_hot":
            $(".collection-modal .new-res").css("display", "none"), $(".collection-modal .p_new").removeClass("action"), 
            $(".collection-modal .hot-res").css("display", "block"), $(".collection-modal .p_hot").addClass("action");
            break;

          case "p_new":
            $(".collection-modal .hot-res").css("display", "none"), $(".collection-modal .p_hot").removeClass("action"), 
            $(".collection-modal .new-res").css("display", "block"), $(".collection-modal .p_new").addClass("action");
        }
    });
});