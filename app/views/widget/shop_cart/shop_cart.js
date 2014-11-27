 define(['jquery', 'underscore'], function($, _){
     var $cartUp = $('#cartScroll');
     $('.aside-icon-cart').on('click', toggleCartScroll);
     function toggleCartScroll(e){
        if(!parseInt($cartUp.css('top'))){
            $cartUp.animate({top: -$cartUp.height() + 'px'});
        }else{
            $cartUp.animate({top: '0px'});
        }
     }

     /**
      * Cart Constructor
      * @param opts
      * @constructor
      */
     function Cart(opts){
         for(var i in opts){
             this[i] = opts[i];
         }
         //init
         this.itemList = [];

     }
//     {
//          id: 123,
//          price: 10,
//          count: 2,
//          title: "平菇牛肉小份",
//          domLi: null/$('xxx')
//     }

     Cart.prototype.find = function(id, callback){
         if(typeof id == 'object')
             id = id.id;
         for(var i = 0, len = this.itemList.length; i < len; i++ ){
             if(this.itemList[i].id == id){
                 if(callback) callback(this.itemList[i]);
                 return this.itemList[i];
             }
         }
         return false;
     }
     /**
      * [add 增加商品]
      * @param {[type]} itemId [description]
      * 返回 true 表示已经有这个 item, 返回数字表示成功
      */
     Cart.prototype.add = function(item){
         if(!this.find(item.id)){
             this.itemList.push(item);
             var tpl = _.template($('#tpl-cart-item').html())({data: item});
             if($('.rcart-empty').length > 0)$('#cartScroll').html('<h4 class="rcart-title">购物车<a class="rcart-clear basket_clear_btn">[清空]</a></h4><ul class="rcart-list basket_list"></ul>');
             $('.basket_list').append(tpl);
             refreshCart();
             fixScroll();
             return true;
         }
         return false;
     }

     Cart.prototype.setCount = function(id, callback){
         var item = this.find(id);
         if(!item) return callback(null);
         callback(item);
     }

     Cart.prototype.del = function(id){
         if(typeof id == 'object')
             id = id.id;
         for(var i = 0, len = this.itemList.length; i < len; i++ ){
             if(this.itemList[i].id == id) {
                 return this.itemList.splice(i, 1);
             }

         }
         return false;
     }

     Cart.prototype.getTotalPrice = function(){
         var total = 0;
         this.itemList.forEach(function(item){
             var count = item.count || 0;
             total += parseInt(item.price * count);
         });
         return total;
     }

     Cart.prototype.getTotalCount = function(){
         var total = 0;
         this.itemList.forEach(function(item){
             var count = item.count || 0;
             total += parseInt(count);
         });
         return total;
     }

     Cart.prototype.refresh = function(){
        this.totalPrice = this.getTotalPrice();
        this.totalNum = this.getTotalCount();
         return {
             totalPrice: this.totalPrice,
             totalNum: this.totalNum
        };
     }

     //todo for debug 显示状态用的
     Cart.prototype.state = function(){
         console.log(this.itemList);
     }

     Cart.prototype.empty = function(){
         this.itemList = [];
     }

     var cart = new Cart();  //实例化 cart

     function refreshCart(){
         var $totalLen = $('#cartTotalItems'),
             $totalPrice = $('#cartTotalPrice');
         var cartInfo = cart.refresh();
         $totalLen.html(cartInfo.totalNum);
         $totalPrice.html(cartInfo.totalPrice);
         if(cartInfo.totalNum == 0){
             $('.aside-cart-btn').addClass('disabled').html('篮子是空的哦');
         }else{
             $('.aside-cart-btn').removeClass('disabled').html('点击支付');
         }
     }

     $('#cartScroll').delegate($('.d_btn, .i_btn'), 'click', changeItemNum);

     function changeItemNum(e){
         var self = $(e.target);
         if(self.context.tagName != "A") return;
         var dad = self.parent();
         var grandPa = self.parent().parent();
         var num = dad.find('.set_num_in');
         var val = parseInt(num.val());
         var t;
         if(e.target.className.indexOf('d_btn') !== -1){ //--
             t = val > 0 ? val - 1 : val;
         }else if(e.target.className.indexOf('i_btn') !== -1){ //++
             t = val + 1;
         }
         if(t == 0){
             grandPa.remove();
             var itemTotal = $('.basket_list li').length;
             if(itemTotal == 0){
                 $('#cartScroll').html('<p class="rcart-empty">篮子是空的</p>');
                 $('.rcart-info').remove();
             }else{
                 $('#cartTotalItems').html(itemTotal);
             }
             fixScroll();
         }
         var id = grandPa.data('good_id');
         cart.find(id, function(item){

             if(!item)return;
             item.count = t;
             refreshCart();
         });
         num.val(t);
         cart.refresh();
     }





     //***********************************************BUG
     //$('#cartScroll').delegate($('.rcart-d-del'), 'click', function(e){
     //    var self = $(e.target);
     //    //self.parent().remove();
     //    //var itemTotal = $('.basket_list li').length;
     //    //if(itemTotal == 0){
     //    //    $('#cartScroll').html('<p class="rcart-empty">篮子是空的</p>');
     //    //    $('.rcart-info').remove();
     //    //}else{
     //    //    $('#cartTotalItems').html(itemTotal);
     //    //}
     //    //cart.refresh();
     //    //$cartUp.animate({top: -$cartUp.height() + 'px'});
     //    var pnt = self.parent();
     //    cart.del(pnt.data('good_id'));
     //    pnt.remove();
     //    refreshCart();
     //    fixScroll();
     //});

     //$('#cartScroll').delegate($('.rcart-clear'), 'click', clearCart);
     function clearCart(){
         $('#cartScroll').html('<p class="rcart-empty">篮子是空的</p>');
         //$('.rcart-info').remove();
         cart.empty();
         refreshCart()
         fixScroll();
     }
//***********************************************BUG





     function fixScroll(){
         $cartUp.animate({top: -$cartUp.height() + 'px'});
     }

     var exports = {
         add: function(id, shop_id) {
             $.ajax({
                 url: "http://localhost:8080/takeaway/public/cartAdd",
                 type: "post",
                 data: {
                     good_id: id,
                     shop_id: shop_id
                 },
                 beforeSend: function(){
                     //todo 这里应该转个菊花什么的
                 },
                 success: function(res){
                     if('true' == res.success){
                         var data = res.data;
                         $('#cartTotalItems').html(data['cart_count']);
                         $('#cartTotalPrice').html(data['cart_all']);
                         cart.add({
                             id: data.addedItem['goods_id'],
                             price: data.addedItem['goods_price'],
                             count: data.addedItem['goods_count'],
                             title: data.addedItem['goods_name'],
                             shop_id: data['shop_id'],
                             domLi: null
                         });
                     }else{
                         alert(res.info);
                     }
                 }
             });
         },

         del: function(id, shop_id){
             $.ajax({
                 url: "http://localhost:8080/takeaway/public/cartDel",
                 type: "post",
                 data: {
                     good_id: id,
                     shop_id: shop_id
                 },
                 success: function (res) {
                     if("true" == res.success){
                         var deled = cart.del(id);
                         if(deled){
                             $('.rcart-dish[data-good_id="'+ id +'"]').remove();
                             refreshCart();
                             fixScroll();
                             return deled;
                         };
                         return false;
                     }else{
                         alert("网络错误!");
                     }
                 }
             });

         },

         setCount: function(id, count, shop_id){
             $.ajax({
                 url: "http://localhost:8080/takeaway/public/cartSetCount",
                 type: "post",
                 data: {
                     good_id: id,
                     shop_id: shop_id,
                     count: count
                 },
                 success: function (res) {
                     if("true" == res.success){
                         cart.find(id, function(item){
                             if(item){
                                 item.count = count;
                                 refreshCart();
                                 fixScroll();
                             }
                         });
                     }else{
                         alert("网络错误!");
                     }
                 }
             });
         },

         empty: function(){
             $.ajax({
                 url: "http://localhost:8080/takeaway/public/cartClear",
                 type: "post",
                 data: {
                     good_id: id,
                     shop_id: shop_id,
                     count: count
                 },
                 success: function (res) {
                     if("true" == res.success){
                         clearCart();
                     }else{
                         alert("网络错误!");
                     }
                 }
             });
         },

         getState: function(){
             cart.state();
         }
     };

     window.cart = exports; //TODO devel for DEBUG
     return exports;
     console.log("shop cart loaded");

 });