define([ "jquery" ], function() {
    /*
	 * @include "修改地址"
	*/
    //打开编辑地址
    $(".js-open-edit").on("click", function() {
        $(".u-mask").show(), $(".js-cmodal-wrapper").show();
    }), $(".js-exit-edit").on("click", function() {
        $(".u-mask").hide(), $(".js-cmodal-wrapper").hide();
    });
});