<div class="shops">
        <div class="shops-header">
            <div class="ui-helper-clearfix">
               <span class="shops_func">
                    <input type="checkbox" class="sh_hot_shops" name="hot_shops" checked="checked"/>
                    <span>热门餐厅</span>
               </span>
               <span class="shops_func">
                    <input type="checkbox" class="sh_hot_shops" name="hot_shops" />
                   <span>营业中</span>
                </span>
                <span class="fliter"></span>
               <span class="shops_func">
                    <input type="checkbox" class="sh_hot_shops" name="hot_shops" />
                    <span>在线支付</span>
                </span>
                <div class="flavor_block">
                    <div class="drop_button"><a>口味</a></div>
                        <ul class="drop_list">
                            <li>全部</li>
                            <li>中式</li>
                            <li>西式</li>
                            <li>港式</li>
                            <li>奶茶</li>
                            <li>烧烤</li>
                            <li>日式</li>
                            <li>韩式</li>
                            <li>甜点</li>
                            <li>汉堡</li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="shop_activities">
            <div class="ui-helper-clearfix">
            @foreach($shop_list['data']['activity'] as $key=>$value)
                    <span class="activities-btn" data-activity-id="{{$key}}">
                       <input name="filter" type="checkbox">
                       <span>{{$value}}</span>
                   </span>
            @endforeach
            </div>
        </div>
        <table class="shop_container">
            <tr>
                <td>
                    @include("widget/shop_info/shop_info" , array("shops" => $shop_list['data']['shops']))
                </td>
            </tr>
        </table>
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/shop_list/shop_list.css")}}
@stop