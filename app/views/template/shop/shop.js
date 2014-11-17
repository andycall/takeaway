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

	}
});

// 加载项目所需的所有依赖项
define([
	'userBar/userBar',
], function($){
	console.log("init");
});

