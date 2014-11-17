require.config({
	baseUrl : "js/lib/",
	shim : {
		"underscore" : {
			exports : "_"
		}
	},
	paths : {
		personal : "../template/personal",
		footer  :"../widget/footer",
		userBar : "../widget/userBar",
		siderBar : "../sideBar/siderBar"
	}
});

// 加载项目所需的所有依赖项
define([
	'userBar/userBar',
	"footer/footer",
	"siderBar/siderBar"
], function($){
	console.log("init");
});

