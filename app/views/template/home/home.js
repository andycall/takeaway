require.config({
    baseUrl : "js/lib/",
    shim : {
        "underscore" : {
            exports : "_"
        }
    },
    paths : {
        home : "../template/home",
        nav : "../widget/home/nav",
        ads : "../widget/home/ads",
        collection: "../widget/home/collection",
        more_shops : "../widget/home/more_shops",
        shops : "../widget/home/shops",
        swipe : "../widget/home/swipe",
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
