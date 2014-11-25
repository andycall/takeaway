define(['jquery'], function(){
	console.log("cate list loaded");

	function delayTrigger(callback, params){
		var timer,
			flag = true;

		return function(ev){

			self = this;

			params = params || [];

			if(flag){
				flag = false;
				callback.apply(self, params);
			}
			if(timer){
				return ;
			}

			timer = setTimeout(function(){
				flag = true;
				timer = undefined;
			}, 30);
		}
	}


	var d            = document,
		menu_toolbar = $(".menu_toolbar"),
		menu_offset  = menu_toolbar.offset(),
		toolBar_toggle = $(".toolBar_toggle");

	if($(window).scrollTop() >= menu_offset.top){
		menu_toolbar.css({
			"position" : "fixed",
			"top" : 0
		});
		toolBar_toggle.fadeIn(300);
	}

	//$('body').on('mousewheel', function(event) {
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



	$(window).on('scroll', delayTrigger(function(){

		var scrollTop = $(window).scrollTop(),
			//postionArr = getListTop(),
			indexCount = 0,
			scrollDirection = 1,
			scrollTmp = 0;

		if(scrollTop >= menu_offset.top){
			menu_toolbar.css({
				"position" : "fixed",
				"top" : 0
			});
			toolBar_toggle.fadeIn(300);
		}
		else {
			menu_toolbar.css({
				"position" : "static"
			});
			toolBar_toggle.fadeOut(300);
		}
		//
		//if(scrollTmp <= scrollTop){
		//	scrollDirection = 1;
		//}
		//else {
		//	scrollDirection = -1;
		//}
		//console.log(scrollTmp, scrollTop);
		//scrollTmp = scrollTop;
		//
		//console.log(scrollDirection);

	}));






});