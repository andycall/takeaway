define(["jquery"], function($){
    //注册表单
    /*
     *验证
     *ajax
     *点击验证码切换
    */

    //验证码点击切换
    $(".captcha-img").on("click",function(){
        $.get("/switch_auth",function(res){
            if( typeof res != object ){
                try{
                    res = $.parseJSON(res);
                }catch(err){
                    alert("服务器数据异常，稍后再试");
                    return ;
                }
            }

            if( res.success && res.nextSrc ){
                $(".captcha-img").attrs("src",res.nextSrc);
            }else if( !res.success && res.errMsg){
                alert(res.errMsg);
            }

        });
    });

	var $divUserMobile = $("#register-user-mobile"),
        $divUserPwd  = $("#register-user-pwd"),
        $divUserTel  = $("#register-user-mobile"),
        $divUserEmail  = $("#register-user-email"),
        $divAuth    = $("#register-user-auth");
  
    //验证所填数据
    function checkRegister(data){
    	var regEmail   = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+/,
    	    regAuth    = / /,
    	    regMobile  = / /,

    }

    //ajax
    function ajaxForm(data){
    	$.ajax({
    		url      : '/register', 
    		type     :  'post',
    		dataType :  'json',
    		data     :  data,

    		success  : function(res){
                if( typeof res != object ){
                    try{
                        res = $.parseJSON(res);
                    }catch(err){
                            alert("服务器异常，稍后再试");
                    }
                }

                if( res.success == 'true' ){
                	if( res.nextSrc){
                		location.href = res.nextSrc;
                	}
                }else{
                    if( res.no && res.Msg){

                    }
                }

            }

    	});
    }
    
    //提交表单
    $("#register-form").on("submit",function(){
    	var data = {
    		'user_phone' : $divUserMobile.find("input").val(),   //电话号码
    		'user_psw'   : $divUserPwd.find("input").val(),    //密码
    		'user_email' : $divUserEmail.find("input").val(),  //邮箱
    		'user_name'  : $divUserName.find("input").val(),   //用户名
    		'user_auth'  : $divAuth.find("input").val()        //验证码
    	};

    	if( !checkRegister(data) ){
    		return false;
    	}



    	return false;
    });
});

