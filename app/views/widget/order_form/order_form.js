define(['jquery'], function($){
	console.log("order form loaded");

    $.fn.serializeObject = function(){
        var o = {};
        var a = this.serializeArray();

        $.each(a, function(){
            if( o[ this.name ] != undefined){
                if(! o[ this.name ].push){
                    o[ this.name ] = [o[this.name]];
                }
                o[this.name].push( this.value || "")
            }
            else{
                o[this.name] = this.value || "";
            }
        });
        return o;
    };

    $(".order_radio").on('change', function(){
        $(this).parent().parent().parent().parent().children(".order_comment").css("display","block");
    });

    $(".order_comment_cancel").on('click', function(){
        $(this).parent().css("display","none");
        $(this).parent().parent().find(".order_content_form")[0].reset();
    });

    $(".order_comment_save").on('click',function(){
        var p = document.createElement("p");
        var order_content = $(this).parent().parent();
        var shop_id = order_content.find('.shop_id').val();
        var deal_id = order_content.find('.deal_id').val();
        var text = order_content.find('.text').val();
        var order_radio = order_content.find('.order_content_form').serializeObject()['service-rate'];
        console.log(order_radio);
        switch (order_radio)
        {
            case "1":
                p.innerHTML = "已点评，不满意";
                break;
            case "2":
                p.innerHTML = "已点评，一般般";
                break;
            default:
                p.innerHTML = "已点评，满意";
        }
        $.ajax({
            url: "####qwertyui###",
            type: "POST",
            data: {
                shop_id: shop_id,
                deal_id: deal_id,
                deal_satisfied: order_radio,
                deal_satisfied_comment: text,
            },
            success: function(res){
                if(res.success == 'true'){
                    order_content.css("display","none");
                    order_content.parent().append(p);
                }else{
                    alert('评论失败，请重新评论!');
                }
            }
        });

    });

});
