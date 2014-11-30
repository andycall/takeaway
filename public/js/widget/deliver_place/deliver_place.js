define([ "jquery" ], function() {
    /*
	 * @include "修改地址"
	*/
    //打开编辑地址
    $(".js-open-edit").on("click", function() {
        $(".u-mask").show(), $(".js-cmodal-wrapper").show();
    }), $(".js-exit-edit").on("click", function() {
        $(".u-mask").hide(), $(".js-cmodal-wrapper").hide();
    }), //切换效果
    $(".cpayment-choice").on("click", function() {
        var $this = $(this);
        $this.hasClass("ui_disabled") || $this.hasClass("ui_selected") || ($(".cpayment-choice").removeClass("ui_selected"), 
        $this.addClass("ui_selected"));
    }), //短信验证打开
    //短信验证关闭
    $(".js-exit-auth").on("click", function() {
        $(".js-sms-auth-wrapper").hide(), $(".u-mask").hide();
    });
});