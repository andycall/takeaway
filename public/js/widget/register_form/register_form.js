define([ "jquery" ], function($) {
    //验证所填数据
    function checkRegister() {
    }
    //注册表单
    /*
     *验证
     *ajax
     *点击验证码切换
    */
    //验证码点击切换
    $(".captcha-img").on("click", function() {
        $.get("/switch_auth", function(res) {
            if (typeof res != object) try {
                res = $.parseJSON(res);
            } catch (err) {
                return void alert("服务器数据异常，稍后再试");
            }
            res.success && res.nextSrc ? $(".captcha-img").attrs("src", res.nextSrc) : !res.success && res.errMsg && alert(res.errMsg);
        });
    });
    var $divUserMobile = $("#register-user-mobile"), $divUserPwd = $("#register-user-pwd"), $divUserEmail = ($("#register-user-mobile"), 
    $("#register-user-email")), $divAuth = $("#register-user-auth");
    //提交表单
    $("#register-form").on("submit", function() {
        var data = {
            user_phone: $divUserMobile.find("input").val(),
            //电话号码
            user_psw: $divUserPwd.find("input").val(),
            //密码
            user_email: $divUserEmail.find("input").val(),
            //邮箱
            user_name: $divUserName.find("input").val(),
            //用户名
            user_auth: $divAuth.find("input").val()
        };
        return checkRegister(data) ? !1 : !1;
    });
});