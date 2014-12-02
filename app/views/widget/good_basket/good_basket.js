define(['jquery', 'underscore', 'shop_cart/shop_cart'], function($, _, cart){
    console.log(cart);
    /**
     * 把 cart 里的信息更新到 dom 上, itemTotaCount, itemTotalPrice
     */
    function refresh(){

    }

    function cartAdd(){

    }

    function cartDel(){

    }

    function cartSetCount(){

    }

    //todo for debug...测试, 做的时候会删除
    (function(){
        var t = _.template($('#tpl-cgroup-item').html())({data: {
            title: "gagga",
            good_id: "1234",
            shop_id: "23424144",
            price: "123",
            count: "3"
        }});
        $('#cgroup-list').append(t);
    })();


	console.log("good basket loaded");
});