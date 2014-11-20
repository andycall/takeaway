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