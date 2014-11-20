define(['jquery'], function($){
    var timer = 0;
    $('#sendVerifyCode').on('click', sendVerify);
    function sendVerify(e){
        var oriPhone = $('#oriPhone').val();
        var newPhone = $('#newPhone').val();
        var reg = /^\d{11}$/;
        if(reg.test(oriPhone) && reg.test(newPhone)){
            $.ajax({
                url: "####qwertyui###",
                type: "POST",
                data: {
                    oriPhone: oriPhone,
                    newPhone: newPhone
                },
                success: function(res){
                    if(res.success == 'true'){
                        alert('验证码已发送, 请注意查收.');
                        codeInterval();
                    }else{
                        alert('原手机号错误!');
                    }
                }
            });
        }else{
            alert('请填写正确的手机号码.');
        }
    }
    function codeInterval(){
        $('#sendVerifyCode').attr('disabled', 'disabled');
        var i = 30;
        function oneSec(){
            i--;
            if(i == 0)return $('#sendVerifyCode').attr('disabled', '');
            $('#sendVerifyCode').val('等待' + i + '秒重新获取验证码');
            setTimeout(oneSec, 1000);
        }
        oneSec();
    }
	console.log("personal change phone loaded");

});