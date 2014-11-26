require.config({
	baseUrl : "js/lib/",
	shim : {
		"underscore" : {
			exports : "_"
		}
	},
	paths : {
		shop : "../template/shop",
		userBar : "../widget/userBar",
		shop_cart : "../widget/shop_cart",
		shop_evaluate : "../widget/shop_evaluate",
		shop_comment : "../widget/shop_comment"
	}
});


// 加载项目所需的所有依赖项
define([
	"userBar/userBar",
	"shop_cart/shop_cart",
	"shop_evaluate/shop_evaluate",
	"shop_comment/shop_comment"
], function($){
	console.log("init");
});

