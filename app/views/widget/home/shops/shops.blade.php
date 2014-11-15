<div class="shops">
    <div class="shops-header">
        <div class="ui-helper-clearfix">
            <span>
                <input type="checkbox" class="sh_hot_shops" name="hot_shops" checked="checked"/>
                <span>热门餐厅</span>
            </span>
            <span>
                <input type="checkbox" class="sh_opening" name="opening"/>
                <span>营业中</span>
            </span>
            <span class="fliter"></span>
            <span>
                <input type="checkbox" class="sh_hot_shops" name="hot_shops"/>
                <span>在线支付</span>
            </span>
            <span>
                <input type="checkbox" class="sh_delay_pay" name="delay_pay" />
                <span>超时赔付</span>
            </span>
            <span class="fliter"></span>
            <div class="flavor_block">
                <div class="drop_button"><a>口味</a></div>
                <ul>
                    <li>酸的</li>
                    <li>辣的</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop_activities">
        <div class="ui-helper-clearfix">
             <span class="activities-btn">
                <input name="filter" type="checkbox">
                <span class="">一元秒杀（限2份）</span>
            </span>
            <span class="activities-btn">
                <input name="filter" type="checkbox">
                <span class="">一元秒杀（限2份）</span>
            </span>
            <span class="activities-btn">
                <input name="filter" type="checkbox">
                <span class="">一元秒杀（限2份）</span>
            </span>

            <span class="activities-btn">
                <input name="filter" type="checkbox">
                <span class="">一元秒杀（限2份）</span>
            </span>
            <span class="activities-btn">
                <input name="filter" type="checkbox">
                <span class="">一元秒杀（限2份）</span>
            </span>
            <span class="activities-btn">
                <input name="filter" type="checkbox">
                <span class="">一元秒杀（限2份）</span>
            </span>
        </div>
    </div>
    <div class="shop_container">
        <table>
            <tr>
                <td>
                    <div class="shop_sec">

                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>


@section("css")
    @parent
    {{HTML::style("/css/widget/home/shops/shops.css")}}
@stop
