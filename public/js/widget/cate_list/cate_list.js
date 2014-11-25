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
    console.log("cate list loaded");
    var menu_toolbar = $(".menu_toolbar"), menu_offset = menu_toolbar.offset(), toolBar_toggle = $(".toolBar_toggle");
    $(window).scrollTop() >= menu_offset.top && (menu_toolbar.css({
        position: "fixed",
        top: 0
    }), toolBar_toggle.fadeIn(300)), //$('body').on('mousewheel', function(event) {
    //	console.log(event.deltaX, event.deltaY, event.deltaFactor);
    //});
    //function getListTop(){
    //	var arr = [];
    //
    //	classify_sec.each(function(index, value){
    //		arr.push($(this).offset());
    //	});
    //	return arr;
    //}
    toolBar_toggle.on("click", function() {}), $(window).on("scroll", delayTrigger(function() {
        var scrollTop = $(window).scrollTop();
        scrollTop >= menu_offset.top ? (menu_toolbar.css({
            position: "fixed",
            top: 0
        }), toolBar_toggle.fadeIn(300)) : (menu_toolbar.css({
            position: "static"
        }), toolBar_toggle.fadeOut(300));
    }));
});