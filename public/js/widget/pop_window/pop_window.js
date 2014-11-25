define([ "jquery" ], function() {
    /*
	 *@include “左侧评论打开与关闭”
	 *@include "ajax获取评论并显示出来" 
	*/
    console.log("pop_window is loaded");
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
        ajaxGetConmment(data);
    }), //关闭左侧框
    $(".js-close-pop-window, .u-mask").on("click", function() {
        $popWindow.css("left", "-400px"), $windowMask.hide();
    });
});