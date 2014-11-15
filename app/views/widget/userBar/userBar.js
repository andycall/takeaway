define(['jquery', 'underscore'], function($, _){

    var $sForm = $(".tb-search-form"), $sInput = $(".tb-search-input"), $iLoading = $(".icon-loading"), $iClear = $('.icon-clear'), $sResult = $('.search-result');
    $sInput.on("focus", function() {
        $sForm.css({
            background: "#FFF"
        });
    }).on("keydown", function() {
        $.ajax("/takeaway/public/index.php/userBarSearch", {
            beforeSend: function () {
                $iClear.addClass("hide");
                $iLoading.removeClass("hide");
            },
            success: function (res) {
                if (res.success == "true") {
                    var data = res.data,
                        _tpl = _.template($('#tpl-tb-search').html())({data: data});
                    $sResult.html(_tpl).show();
                    $iLoading.addClass("hide");
                    $iClear.removeClass('hide');
                } else {
                    alert(123);
                }
            }

        });

        $iClear.on("click", function () {
            $sForm.css({
                background: ""
            });
            $sResult.hide();
            $iLoading.addClass('hide');
            $iClear.addClass('hide');
            $sInput.val('');
        });
    });

    $('.icon-cart').on('click', function(){
        $.ajax('/takeaway/public/index.php/userBarCart', {
            beforeSend: function () {
                $('.tb-cart-dropdown-wrapper').show();
            },

            success: function(res){
                console.log(res);
                if("true" == res.success){
                    var data = res.data;
                    if(!data.goods || !data.goods.length){
                        var _tpl = _.template($('#tpl-tb-loading').html())();
                    }else{
                        var _tpl = _.template($('#tpl-tb-loading').html())();
                    }
                    $('.tb-cart-dropdown').html(_tpl);
                }else{

                }
            }
        });
        $('#tpl-tb-loading').show();
    });

    return {

    };
});

