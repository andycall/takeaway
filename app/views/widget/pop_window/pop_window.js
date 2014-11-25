define(['jquery'], function(){

	console.log("pop windows loaded");

	/*
	 *@include “左侧评论打开与关闭”
	 *@include "ajax获取评论并显示出来" 
	*/
	console.log("pop_window is loaded");

    //跟踪商品名称
    var goodName = "";
	
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

        goodName = $this.parents(".menu_sec_status").siblings(".menu_sec_info").find(".menu_sec_desc").text();

    	ajaxGetConmment(data);
    });

    //关闭左侧框
    $(".js-close-pop-window, .u-mask").on("click",function(){
    	$popWindow.css("left","-400px");
    	$windowMask.hide();
    });


	//ajax
	function ajaxGetConmments(data){
		$.get("/goods_comments", function(res){
            if( typeof res != "object" ){

                try{
                    res = $.parseJSON(res);
                }catch(err){
                    alert("服务器数据错误");
                    return ;
                }

            }

            //请求成功后
            if(res.succuess && res.data){

                if(res.data){
                    showConmments(res.data);
                }else if(res.nextSrc){
                    location.href = res.nextSrc;
                }

            }else{
                
                if(res.errMsg){
                    alert(res.errMsg);
                }
            }
        });
	}

	//ajax获取成功后的操作 将数据填进dom中
	function showConmments(data){
        //保存商品名称
        data.good_name = goodName;

        //获取模板填数据
        var temp = _.template( $("#drawer-temp").html() );
        temp(data);

        //渲染
        $(".pop_window").html(temp);
	}

});