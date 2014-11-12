!function($) {
        var $sForm = $(".tb-search-form"), $sInput = $(".tb-search-input"), $iLoading = $(".icon-loading");
        $(".icon-clear");
    $sInput.on("focus", function() {
//        $sForm.css({
//            background: "#FFF"
//        });
    }).on("keydown", function() {
        $.ajax("http://baidu.com/", {
            beforeSend: function() {
                $iLoading.removeClass("hide");
            },
            success: function(res) {
                if ("true" == res.success) {

                } else alert(123);
            },
            complete: function() {
                $iLoading.addClass("hide");
            }
        });
    });
}(jQuery);
