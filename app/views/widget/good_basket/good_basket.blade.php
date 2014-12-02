<article id="module_basket" class="cart-table">
    <header class="ctable-header group">
        <h2 class="ctable-title">美食篮子</h2>
        <span class="ctable-categ">单价</span>
        <span class="ctable-categ">数量</span>
        <span class="ctable-categ">总计</span>
    </header>

    <section class="cart-group cart_group" data-id="0">
        <ul class="cgroup-list" id="cgroup-list">
            <li class="cgroup-item s_food" data-id="9999500">
                <div class="cdish-name">年糕盐煎肉</div>
                <div class="cdish-price symbol-rmb">12</div>
                <div class="cdish-modify">
                    <a class="cdish-action desc dec_btn">-</a>
                    <input class="cdish-qty set_num" type="text" value="4">
                    <a class="cdish-action incr inc_btn">+</a>
                </div>
                <div class="cdish-total symbol-rmb">48</div>
                <div class="cdish-del">
                    <a class="del del_btn">×</a>
                </div>
            </li>
        </ul>
    </section>


    <footer class="ctable-footer group">
        <div id="module_note" class="cart-note">
            <div class="ctable-form group">
                <i class="icon-note"></i>
                <input id="c_n_text" class="ctable-input" type="text" placeholder="给餐厅留言" maxlength="50">
            </div>

        </div>
        <div class="float-r">
            <div class="cart-summary basket_info">共4份美食　应付金额：<span id="total_price_basket" class="symbol-rmb cart-cost">36</span></div>
        </div>
    </footer>
</article>

<script type="text/template" id="tpl-cgroup-item">
    <li class="cgroup-item s_food" data-good_id="<%= data.good_id %>" data-shop_id="<%= data.shop_id %>">
        <div class="cdish-name"><%= data.title %></div>
        <div class="cdish-price symbol-rmb"><%= data.price %></div>
        <div class="cdish-modify">
            <a class="cdish-action desc dec_btn">-</a>
            <input class="cdish-qty set_num" type="text" value="<%= data.count %>">
            <a class="cdish-action incr inc_btn">+</a>
        </div>
        <div class="cdish-total symbol-rmb"><%= data.price * data.count %></div>
        <div class="cdish-del">
            <a class="del del_btn">×</a>
        </div>
    </li>
</script>
@section("css")
    @parent
    {{HTML::style("/css/widget/good_basket/good_basket.css")}}
@stop