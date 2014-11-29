define([ "jquery" ], function($) {
    //收藏ajax
    function shopFavorAjax(data) {
        $.post("/shopFavor", data, function(res) {
            if ("object" != typeof res) try {
                res = $.parseJSON(res);
            } catch (err) {
                alert("服务器数据错误！！！");
            }
            "true" == res.success;
        });
    }
    /*
 *  @include "侧边栏收藏按钮"
*/
    $(".js-fav-shop").on("click", function() {
        var $this = $(this), $favorBar = $this.find(".glyph"), //红心
        $favorStatus = $this.find(".status");
        //状态
        //商家信息
        //按钮变红 || 取消变红
        $favorBar.toggleClass("on"), $favorBar.hasClass("on") ? (//如果收藏
        $favorStatus.text("已收藏"), shopFavorAjax()) : //如果取消收藏
        $favorStatus.text("收藏餐厅");
    });
});