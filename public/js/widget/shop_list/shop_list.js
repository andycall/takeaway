define([ "jquery", "tools/Sizer" ], function($, Sizer) {
    // 事件触发的数据获取中间件
    function dataTrigger(ev, type) {
        var obj = {};
        if ("checkbox" == type) {
            var deleteTarget = ev.delegateTarget, input = $(deleteTarget).find("input");
            if (input) {
                var nowChecked = input[0].checked;
                input[0].checked = !nowChecked;
            }
        } else {
            var target = ev.target;
            obj.flavor = $(target).html();
        }
        var spans = $(".choice_click");
        spans.each(function() {
            var input = $(this).find("input"), text = $(this).find("label"), checked = input[0].checked, label = (text.html(), 
            $(this).data("label"));
            checked && (obj[label] = Number(checked));
        }), console.log(Sizer.get(obj));
    }
    var drop_button = $(".drop_button"), drop_list = $(".drop_list"), choice_click = ($(".activities-btn"), 
    $(".shops_func"), $(".choice_click"));
    drop_button.on("click", function() {
        return drop_list.toggle(), $(this).toggleClass("active"), !1;
    }), function() {
        var target = $(".shop_container .more_shops-row-book"), result = [];
        target.each(function() {
            var target = $(this), place_id = target.data("place_id"), shop_id = target.data("shop_id"), flavor = target.data("flavor"), issupportpay = target.data("issupportpay"), isonline = target.data("isonline"), ishot = target.data("ishot"), support_activity = target.data("support_activity").split(","), storage = {};
            storage.place_id = place_id, storage.shop_id = shop_id, storage.flavor = flavor, 
            storage.issupportpay = issupportpay, storage.isonline = isonline, storage.ishot = ishot, 
            storage.support_activity = support_activity, storage.shop_id = shop_id, result.push(storage);
        }), console.log(result), Sizer.add(result);
    }(), drop_list.on("click", "li", function(ev) {
        console.log(ev.target);
    }), choice_click.on("click", dataTrigger), drop_list.on("click", "li", function(ev) {
        {
            var target = ev.currentTarget;
            target.innerHTML;
        }
        drop_list.toggle();
    });
});