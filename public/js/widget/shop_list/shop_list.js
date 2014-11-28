define([ "jquery", "tools/Sizer" ], function($, Sizer) {
    // 事件触发的数据获取中间件
    function dataTrigger(ev, type) {
        var spans, activities, obj = {};
        if ("checkbox" == type || "activity" == type) {
            var deleteTarget = ev.delegateTarget, input = $(deleteTarget).find("input");
            if (input) {
                var nowChecked = input[0].checked;
                input[0].checked = !nowChecked;
            }
        } else if ("drop" == type) {
            var target = ev.target;
            //$('.drop_button').find('a').html(target);
            obj.flavor = $(target).html();
        }
        "checkbox" == type || "drop" == type ? (spans = $(".choice_click"), spans.each(function() {
            var input = $(this).find("input"), text = $(this).find("label"), checked = input[0].checked, label = (text.html(), 
            $(this).data("label"));
            checked && (obj[label] = Number(checked));
        })) : (spans = $(".activities-btn"), activities = [], spans.each(function() {
            var input = $(this).find("input"), activity = $(this).data("activity_id"), checked = input[0].checked;
            checked && activities.push(activity);
        }), obj.support_activity = activities), console.log(Sizer.get(obj));
        var template = _.template($("#shop_list_template").html())({
            shops: Sizer.get(obj),
            shop_activity: shop_activity
        });
        shop_container.find("td").html(template);
    }
    var drop_button = $(".drop_button"), drop_list = $(".drop_list"), activitiesBtn = $(".activities-btn"), choice_click = ($(".shops_func"), 
    $(".choice_click")), shop_activity = [], shop_container = $(".shop_container");
    activitiesBtn.each(function() {
        shop_activity.push({
            id: $(this).data("activity_id"),
            value: $(this).find("label").html()
        });
    }), drop_button.on("click", function() {
        return drop_list.toggle(), $(this).toggleClass("active"), !1;
    }), function() {
        var target = shop_container.find(".more_shops-row-book"), result = [];
        target.each(function() {
            var target = $(this), place_id = target.data("place_id"), shop_id = target.data("shop_id"), flavor = target.data("flavor"), issupportpay = target.data("issupportpay"), isonline = target.data("isonline"), ishot = target.data("ishot"), support_activity = target.data("support_activity").split(","), storage = {};
            storage.place_id = place_id, storage.shop_id = shop_id, storage.flavor = flavor, 
            storage.issupportpay = issupportpay, storage.isonline = isonline, storage.ishot = ishot, 
            storage.support_activity = support_activity, storage.shop_id = shop_id, result.push(storage);
        }), console.log(result), Sizer.add(result);
    }(), drop_list.on("click", "li", function(e) {
        dataTrigger(e, "drop");
    }), choice_click.on("click", function(e) {
        dataTrigger(e, "checkbox");
    }), activitiesBtn.on("click", function(e) {
        dataTrigger(e, "activity");
    }), drop_list.on("click", "li", function(ev) {
        {
            var target = ev.currentTarget;
            target.innerHTML;
        }
        drop_list.toggle();
    });
});