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


	var toolbar_text = $(".toolbar_text"),
		classify_sec = $(".classify_sec"),
		offsetArr = getOffsetCached(),
		scrollDirection;



	function getOffsetCached(){
		var arr = [];

		classify_sec.each(function(index, value){
			arr.push($(this).offset());
		});
		return arr;
	}



	$(window).on('scroll', delayTrigger(function(){

		var scrollTop = $(d.body).scrollTop(),
			postionArr = getListTop(),
			indexCount = 0,
			scrollDirection = 1,
			scrollTmp = 0;

		if(scrollTop >= headerTop){
			header.css({
				"position" : "fixed",
				"top" : 0
			});
		}
		else {
			header.css({
				"position" : "static"
			});
		}

		if(scrollTmp <= scrollTop){
			scrollDirection = 1;
		}
		else {
			scrollDirection = -1;
		}
		console.log(scrollTmp, scrollTop);
		scrollTmp = scrollTop;

		console.log(scrollDirection);

	}));






});