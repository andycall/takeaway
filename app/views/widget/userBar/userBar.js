define(['jquery'], function($){

        var $sForm = $(".tb-search-form"), $sInput = $(".tb-search-input"), $iLoading = $(".icon-loading"), $iClear = $('.icon-clear'), $sResult = $('.search-result');
        $sInput.on("focus", function() {
            $sForm.css({
                background: "#FFF"
            });
        }).on("keydown", function() {
            $.ajax("/takeaway/app/views/ling.mock.php?s=userBarSearch", {
                beforeSend: function() {
                    $iLoading.removeClass("hide");
                },
                success: function(res) {
                    if (res.success == "true") {
                        var data = res.data,
                            _tpl = _.template($('#tpl-tb-search').html())({data: data});
                        $sResult.html(_tpl).show();
//                    $sResult.show();
                        $iClear.removeClass('hide');
                    } else {
                        alert(123);
                    }
                },
                complete: function() {
                    $iLoading.addClass("hide");
                }
            });
        });

        $iClear.on("click", function(){
            $sForm.css({
                background: ""
            });
            $sResult.hide();
            $iLoading.addClass('hide');
            $iClear.addClass('hide');
            $sInput.val('');
        });

    return {};
});

