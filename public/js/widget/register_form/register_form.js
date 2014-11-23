define([ "jquery" ], function($) {
    //验证所填数据
    function checkRegister() {
    }
    //注册表单
    /*
     *验证
     *ajax
    */
    var $divUserName = $("#register-user-name"), $divUserPwd = $("#register-user-pwd"), $divUserEmail = ($("#register-user-mobile"), 
    $("#register-user-email")), $divAuth = $("#register-user-auth");
    //提交表单
    $("#register-form").on("submit", function() {
        var data = {
            user_phone: $divUserName.find("input").val(),
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