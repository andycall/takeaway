define([ "jquery", "tools/Sizer" ], function($, Sizer) {
    var drop_button = $(".drop_button"), drop_list = $(".drop_list"), choice_click = ($(".activities-btn"), 
    $(".shops_func"), $(".choice_click"));
    drop_button.on("click", function() {
        drop_list.toggle();
    }), function() {
        var target = $(".shop_container .more_shops-row-book"), result = [];
        target.each(function() {
            var target = $(this), place_id = target.data("place_id"), shop_id = target.data("shop_id"), flavor = target.data("flavor"), issupportpay = target.data("issupportpay"), isonline = target.data("isonline"), ishot = target.data("ishot"), support_activity = target.data("support_activity").split(","), storage = {};
            storage.place_id = place_id, storage.shop_id = shop_id, storage.flavor = flavor, 
            storage.issupportpay = issupportpay, storage.isonline = isonline, storage.ishot = ishot, 
            storage.support_activity = support_activity, storage.shop_id = shop_id, result.push(storage);
        }), console.log(result), Sizer.add(result);
    }(), choice_click.on("click", function(ev) {
        var target = ev.delegateTarget, input = $(target).find("input"), nowChecked = ($(target).find("label"), 
        input[0].checked);
        input[0].checked = !nowChecked;
        var obj = {}, spans = $(".choice_click");
        return spans.each(function() {
            var input = $(this).find("input"), text = $(this).find("label"), checked = input[0].checked, label = (text.html(), 
            $(this).data("label"));
            checked && (obj[label] = Number(checked));
        }), console.log(Sizer.get(obj)), !1;
    }), drop_list.on("click", "li", function(ev) {
        {
            var target = ev.currentTarget;
            target.innerHTML;
        }
        drop_list.toggle();
    });
});