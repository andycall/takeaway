define([ "jquery", "underscore" ], function($, _) {
    var $ffood = $("#favor_food"), _tpl = _.template($("#tpl-rst-dish-item").html());
    $.ajax({
        url: "/whereistheAPI",
        type: "POST",
        data: {},
        success: function(res) {
            "true" == res.success && $(".rst-aside-menu-list").html(_tpl({
                data: res.data
            }));
        }
    }), $ffood.find(".rst-d-act-toggle").on("click", function() {
        var self = $(this), par = self.parent();
        par.hasClass("ui_open") ? par.removeClass("ui_open") : ($ffood.find(".ui_open").removeClass("ui_open"), 
        par.addClass("ui_open"), self.after('<div class="rst-d-act-dropdown main_food_panel"><span class="helper">添加到以下菜品中</span></div>'));
    }), console.log("goods_collection loaded");
});