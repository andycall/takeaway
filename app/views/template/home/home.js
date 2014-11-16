require.config({
    baseUrl : "js/lib/",
    shim : {
        "underscore" : {
            exports : "_"
        }
    },
    paths : {
        home : "../template/home",
		widget : "../widget",
		ads   : "../widget/ads",
		footer  :"../widget/footer",
		more_shops : "../widget/more_shops",
		my_collection : "../widget/my_collection",
		nav : "../widget/nav",
		shop_list : "../widget/shop_list",
		shop_sec : "../widget/shop_sec",
		shop_uncollected : "../widget/shop_uncollected",
		swipe : "../widget/swipe",
		userBar : "../widget/userBar"
    }
});


// 加载项目所需的所有依赖项
define([
    'userBar/userBar',
    "nav/nav",
    "ads/ads",
    "collection/collection",
    "more_shops/more_shops",
    "shops/shops",
    "swipe/swipe"
], function($){
    console.log("init");
});

