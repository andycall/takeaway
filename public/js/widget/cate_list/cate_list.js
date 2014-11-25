define([ "jquery" ], function() {
    function delayTrigger(callback, params) {
        var timer, flag = !0;
        return function() {
            self = this, params = params || [], flag && (flag = !1, callback.apply(self, params)), 
            timer || (timer = setTimeout(function() {
                flag = !0, timer = void 0;
            }, 30));
        };
    }
    function getOffsetCached() {
        var arr = [];
        return classify_sec.each(function() {
            arr.push($(this).offset());
        }), arr;
    }
    console.log("cate list loaded");
    {
        var classify_sec = ($(".toolbar_text"), $(".classify_sec"));
        getOffsetCached();
    }
    $(window).on("scroll", delayTrigger(function() {
        var scrollTop = $(d.body).scrollTop(), scrollDirection = (getListTop(), 1), scrollTmp = 0;
        header.css(scrollTop >= headerTop ? {
            position: "fixed",
            top: 0
        } : {
            position: "static"
        }), scrollDirection = scrollTop >= scrollTmp ? 1 : -1, console.log(scrollTmp, scrollTop), 
        scrollTmp = scrollTop, console.log(scrollDirection);
    }));
});