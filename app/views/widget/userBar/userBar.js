(function($) {
        var $sForm = $(".tb-search-form"), $sInput = $(".tb-search-input"), $iLoading = $(".icon-loading");
        $(".icon-clear");
    $sInput.on("focus", function() {
        $sForm.css({
            background: "#FFF"
        });
    }).on("blur", function(){
        $sForm.css({
            background: ""
        });
        $sInput.val('');
    }).on("keydown", function() {
        $.ajax("http://baidu.com/", {
            beforeSend: function() {
                $iLoading.removeClass("hide");
            },
            success: function(res) {
                if (res.success == "true") {

                } else {
                    alert(123);
                }
            },
            complete: function() {
                $iLoading.addClass("hide");
            }
        });
    });
}(jQuery));
