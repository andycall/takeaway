define(['jquery'], function($){
	console.log("my collection alert loaded");
    var cancel_collection = [],add_collection = [];
    var n;
    var post = {};

    window.onload = function(){
        cancel_collection_each();
    };

    addClick();

    $(".collection-modal").on('click', function(e){
        var e_class = e.target.className || null ;
        switch (e_class){
            case "check":
                var shop_id = $(e.target).attr("shop_id");
                var click_checked = e.target.checked;
                var sameElement = $(".collection-modal").find("input[shop_id='"+ shop_id +"']");
                sameElement.each(function(){
                    this.checked = click_checked;
                });
            break;

            case "set close":
                $(".collection-modal").css('display','none');
            break;

            case "btn btn-yellow":
                $(".collection-modal").css('display', 'none');


                $(".collection-modal input").each(function () {
                    this.checked && (
                        n = $(this).attr("shop_id"),
                        add_collection["shop_id_" + n] = new Array(2),
                        add_collection["shop_id_" + n]["shop_id"] = n,
                        add_collection["shop_id_" + n]["place_id"] = $(this).attr("place_id")
                    );
                });

                Object.keys(add_collection).forEach(function (value) {
                    if(cancel_collection[value]){
                        delete cancel_collection[value];
                        delete add_collection[value];
                    }
                });

                post.add_collection = [];
                post.cancel_collection = [];

                Object.keys(add_collection).forEach(function (value, index) {

                    post.add_collection[index] = {};
                    post.add_collection[index] = { shop_id :add_collection[value]["shop_id"], place_id :add_collection[value]["place_id"]};

                });

                Object.keys(cancel_collection).forEach(function (value, index) {

                    post.cancel_collection[index] = {};
                    post.cancel_collection[index] = { shop_id :cancel_collection[value]["shop_id"], place_id :cancel_collection[value]["place_id"]};

                });

                if(post.add_collection.length || post.cancel_collection.length){
                    $.ajax({
                        url: "takeaway/public/index.php/collect_list",
                        type: "POST",
                        data: post,
                        success: function(res) {
                            if (res.success == 'true') {

                                showComments(res.data);

                                for( var i = post.add_collection.length-1 ; i >= 0 ; i--){
                                    collection(post.add_collection[i].shop_id);
                                }

                                for( var i = post.cancel_collection.length-1 ; i >= 0 ; i--){
                                    uncollection(post.cancel_collection[i].shop_id);
                                }

                                addClick();

                            } else {
                                alert('收藏失败，请重新收藏');
                            }
                        }
                    });
                }

                cancel_collection = [];
                cancel_collection_each();
                add_collection = [];

            break;

            case "p_hot":
                $(".collection-modal .new-res").css('display','none');
                $(".collection-modal .p_new").removeClass('action');
                $(".collection-modal .hot-res").css('display','block');
                $(".collection-modal .p_hot").addClass('action');
            break;

            case "p_new":
                $(".collection-modal .hot-res").css('display','none');
                $(".collection-modal .p_hot").removeClass('action');
                $(".collection-modal .new-res").css('display','block');
                $(".collection-modal .p_new").addClass('action');
            break;

            default :

            break;
        }

    });

    $(".collection-row-book").on('click', function(e) {

        var e_class = e.target.className || null;
        var shop_id = $(this).data("shop_id");
        var place_id = $(this).data("place_id");

        console.log(e_class);

        switch (e_class) {
            case "close":
                alert(1);
            console.log(this.data(place_id));
        }

    });

    function cancel_collection_each(){

        $(".collection-modal input").each(function () {
            if (this.checked) {
                n = $(this).attr("shop_id");
                cancel_collection["shop_id_" + n] = new Array(2);
                cancel_collection["shop_id_" + n]["shop_id"] = n;
                cancel_collection["shop_id_" + n]["place_id"] = $(this).attr("place_id");
            }
        });

    }

    function addClick(){

        $(".add").on('click',function() {

            $(".collection-modal").css('display', 'block');

        });

    }

    function showComments(data){

        var temp = _.template( $("#collection-row").html() )(data);

        $(".collection .collection-row").html(temp);

    }

    function uncollection(shop_id){

        var className = ".restaurant-" + shop_id;

        var obj = $(className);

        obj.find(".collect_star").css("display","none");

        obj.find(".uncollect").removeClass("change");

        obj.find(".collect").addClass("change");

    }

    function collection(shop_id){

        var className = ".restaurant-" + shop_id;

        var obj = $(className);

        obj.find(".collect_star").css("display","block");

        obj.find(".collect").removeClass("change");

        obj.find(".uncollect").addClass("change");

    }

});