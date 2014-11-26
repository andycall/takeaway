define([ "jquery" ], function() {
    //ajax
    function ajaxGetConmments() {
        $.get("/goods_comments", function(res) {
            if ("object" != typeof res) try {
                res = $.parseJSON(res);
            } catch (err) {
                return void alert("服务器数据错误");
            }
            //请求成功后
            res.success && res ? res.data ? showConmments(res) : res.nextSrc && (location.href = res.nextSrc) : res.errMsg && alert(res.errMsg);
        });
    }
    //ajax获取成功后的操作 将数据填进dom中
    function showConmments(data) {
        data.good_name = goodName;
        //获取模板填数据
        var temp = _.template($("#drawer-temp").html());
        temp(data), //渲染
        $(".pop_window").html(temp);
    }
    console.log("pop_window in loaded");
    /*
	 *@include “左侧评论打开与关闭”
	 *@include "ajax获取评论并显示出来" 
	*/
    //跟踪商品名称
    var goodName = "", $popWindow = $(".pop_window"), $windowMask = $(".u-mask");
    //打开左侧框
    $(".js-open-pop-window").on("click", function() {
        var $this = $(this);
        $popWindow.css("left", "0px"), $windowMask.show();
        var data = {
            good_id: $this.parents(".js-get-good-id").attr("data-good_id")
        };
        goodName = $this.parents(".menu_sec_status").siblings(".menu_sec_info").find(".menu_sec_desc").text(), 
        //商品名称
        ajaxGetConmments(data);
    }), //关闭左侧框
    $(".js-close-pop-window, .u-mask").on("click", function() {
        $popWindow.css("left", "-400px"), $windowMask.hide();
    });
});