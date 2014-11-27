define([ "jquery", "tools/Sizer" ], function($, Sizer) {
    function getAllData() {
        var target = $(".shop_container .more_shops-row-book"), result = {};
        return target.each(function(index) {
            var target = $(this), place_id = target.data("place_id"), shop_id = target.data("shop_id"), flavor = target.data("flavor"), issupportpay = target.data("issupportpay"), isonline = target.data("isonline"), ishot = target.data("ishot"), support_activity = target.data("support_activity").split(","), id = index, storage = result[id] = {};
            storage.place_id = place_id, storage.shop_id = shop_id, storage.flavor = flavor, 
            storage.issupportpay = issupportpay, storage.isonline = isonline, storage.ishot = ishot, 
            storage.support_activity = support_activity;
        }), Sizer.add(result), result;
    }
    var drop_button = $(".drop_button"), drop_list = $(".drop_list"), choice_click = ($(".activities-btn"), 
    $(".shops_func"), $(".choice_click"));
    drop_button.on("click", function() {
        drop_list.toggle();
    }), getAllData(), choice_click.on("click", function(ev) {
        {
            var target = ev.currentTarget, input = $(target).find("input"), b = $(target).find("b");
            input[0].checked, b.html();
        }
    }), drop_list.on("click", "li", function(ev) {
        {
            var target = ev.currentTarget;
            target.innerHTML;
        }
        drop_list.toggle();
    });
});