<<<<<<< HEAD
define(["jquery","jquery-ui"],function(a){console.log("order form loaded"),function(){var b=[];for(i=-24;25>i;i++)b[i]=0==i?1:5*i;var c=["正点","5分钟","10分钟","15分钟","20分钟","25分钟","30分钟","35分钟","40分钟","45分钟","50分钟","55分钟","1小时","1小时5分钟","1小时10分钟","1小时15分钟","1小时20分钟","1小时25分钟","1小时30分钟","1小时35分钟","1小时40分钟","1小时45分钟","1小时50分钟","1小时55分钟","2小时"];for(c[-24]="提前2小时",i=-23;-12>i;i++)c[i]="提前1小时"+5*(-i-12)+"分钟";for(c[-12]="提前1小时",i=-11;0>i;i++)c[i]="提前"+5*-i+"分钟";a(".slider").slider({range:"min",min:2,max:100,value:100,slide:function(b,d){{var e=parseInt(a(this).attr("max")),f=parseInt(a(this).attr("min"));a(this).attr("rel")}a(this).slider("option","disabled",!1),a(this).slider("option","min",f),a(this).slider("option","max",e),a(this).slider("option","value",e),a(this).parents(".content").find(".col_value span").html(c[d.value-1]),a(this).parents(".content").find(".col_btn").css("display","block")}})}(),a.fn.serializeObject=function(){var b={},c=this.serializeArray();return a.each(c,function(){void 0!=b[this.name]?(b[this.name].push||(b[this.name]=[b[this.name]]),b[this.name].push(this.value||"")):b[this.name]=this.value||""}),b},a(".order_radio").on("change",function(){a(this).parents(".order_content").children(".order_comment").css("display","block")}),a(".order_comment_cancel").on("click",function(){a(this).parent().css("display","none"),a(this).parents(".order_content").find(".order_content_form")[0].reset()}),a(".order_comment_save").on("click",function(){var b=document.createElement("p"),c=a(this).parent().parent(),d=c.find(".shop_id").val(),e=c.find(".deal_id").val(),f=c.find(".text").val(),g=c.find(".order_content_form").serializeObject()["service-rate"];switch(console.log(g),g){case"1":b.innerHTML="已点评，不满意";break;case"2":b.innerHTML="已点评，一般般";break;default:b.innerHTML="已点评，满意"}a.ajax({url:"####qwertyui###",type:"POST",data:{shop_id:d,deal_id:e,deal_satisfied:g,deal_satisfied_comment:f},success:function(a){"true"==a.success?(c.css("display","none"),c.parent().append(b)):alert("评论失败，请重新评论!")}})}),a(".rating_comment .comment div").on("click",function(){var b=a(this).parents(".rating_comment"),c=b.find(".shop_id").val(),d=b.find(".deal_id").val(),e=b.find(".goods_id").val(),f=this.innerText[0],g=a(this);return a.ajax({url:"####qwertyui###",type:"POST",data:{shop_id:c,deal_id:d,goods_id:e,goods_level:f},success:function(a){"true"==a.success?(g.parents(".rating_comment").removeClass("rating_comment"),g.parents(".comment").find("div").off("mouseover",star)):alert("评论失败，请重新评论!")}}),!1}).on("mouseover",star=function(){a(this).parents(".comment").find("div").removeClass("mouseover"),a(this).addClass("mouseover");var b=a(this).parents(".rating_comment").find(".rating_text");switch(this.innerText[0]){case"1":b.html("差评");break;case"2":b.html("差点意思");break;case"3":b.html("一般般");break;case"4":b.html("有点滋味");break;default:b.html("我的最爱")}return!1}),a(".col_btn").on("click",function(){var b=document.createElement("p"),c=a(this),d=c.parents(".content"),e=d.find(".shop_id").val(),f=d.find(".deal_id").val(),g=d.find(".col_value span").html();b.innerHTML="已点评， 时间： "+g,a.ajax({url:"####qwertyui###",type:"POST",data:{shop_id:e,deal_id:f,deal_speed:g},success:function(a){"true"==a.success?(d.append(b),d.find(".content_speed").css("display","none")):alert("评论失败，请重新评论!")}})})});
=======
define([ "jquery" ], function($) {
    console.log("order form loaded"), $.fn.serializeObject = function() {
        var o = {}, a = this.serializeArray();
        return $.each(a, function() {
            void 0 != o[this.name] ? (o[this.name].push || (o[this.name] = [ o[this.name] ]), 
            o[this.name].push(this.value || "")) : o[this.name] = this.value || "";
        }), o;
    }, $(".order_radio").on("change", function() {
        $(this).parents(".order_content").children(".order_comment").css("display", "block");
    }), $(".order_comment_cancel").on("click", function() {
        $(this).parent().css("display", "none"), $(this).parents(".order_content").find(".order_content_form")[0].reset();
    }), $(".order_comment_save").on("click", function() {
        var p = document.createElement("p"), order_content = $(this).parent().parent(), shop_id = order_content.find(".shop_id").val(), deal_id = order_content.find(".deal_id").val(), text = order_content.find(".text").val(), order_radio = order_content.find(".order_content_form").serializeObject()["service-rate"];
        switch (console.log(order_radio), order_radio) {
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
                deal_satisfied_comment: text
            },
            success: function(res) {
                "true" == res.success ? (order_content.css("display", "none"), order_content.parent().append(p)) : alert("评论失败，请重新评论!");
            }
        });
    }), $(".rating_comment .comment div").on("click", function() {
        var rating_comment = $(this).parents(".rating_comment"), shop_id = rating_comment.find(".shop_id").val(), deal_id = rating_comment.find(".deal_id").val(), goods_id = rating_comment.find(".goods_id").val(), goods_level = this.innerText[0], $_this = $(this);
        return $.ajax({
            url: "####qwertyui###",
            type: "POST",
            data: {
                shop_id: shop_id,
                deal_id: deal_id,
                goods_id: goods_id,
                goods_level: goods_level
            },
            success: function(res) {
                "true" == res.success ? $_this.parents(".rating_comment").removeClass("rating_comment") : alert("评论失败，请重新评论!");
            }
        }), !1;
    }).on("mouseover", star = function() {
        $(this).parents(".comment").find("div").removeClass("mouseover"), $(this).addClass("mouseover");
        var rating_text = $(this).parents(".rating_comment").find(".rating_text");
        switch (this.innerText[0]) {
          case "1":
            rating_text.html("差评");
            break;

          case "2":
            rating_text.html("差点意思");
            break;

          case "3":
            rating_text.html("一般般");
            break;

          case "4":
            rating_text.html("有点滋味");
            break;

          default:
            rating_text.html("我的最爱");
        }
        return !1;
    });
});
>>>>>>> 62de8891b5f81e4abdeef4a8f78817e2d7174b83
