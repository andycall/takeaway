define(['jquery'], function(){
	/*
	 *@include “左侧评论打开与关闭”
	 *@include "ajax获取评论" 
	*/
    
    var $popWindow  = $(".pop_window"),
        $windowMask = $(".u-mask");

    //打开左侧框
    $(".js-open-pop-window").on("click",function(){
    	var $this = $(this);

    	$popWindow.css("left","0px");
    	$windowMask.show();

    	var data = {
    		"good_id"  :  $this.parents(".js-get-good-id").attr("data-good_id")
    	};

    	ajaxGetConmment(data);
    });

    //关闭左侧框
    $(".js-close-pop-window, .u-mask").on("click",function(){
    	$popWindow.css("left","-400px");
    	$windowMask.hide();
    });


	//ajax
	function ajaxGetConmments(data){
		$.get("");
	}

	//ajax获取成功后的操作
	function showConmments(res){

	}
});