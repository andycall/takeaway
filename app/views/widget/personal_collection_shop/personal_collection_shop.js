define(['jquery'], function(){
	console.log("personal_colletion_goods loaded");
	var restaurant_column = $('.restaurant-column');

	$(".close_btn").on('click', function(){
		var restaurant_count = parseInt($(".restaurant_count").html());
		var self = this;
		var shop_id = restaurant_column.data('shop_id');
		$.post("/ajax_collection_shop", {shop_id : shop_id}).done(function(){
			$(self).parents("tr").remove();
			console.log($(self).parents('.favor-restaurants').find(".restaurant_count"));
			$(".restaurant_count").html(restaurant_count - 1)
		}).fail(function(){
			alert("服务器错误!");
		});
		return false;
	});
});