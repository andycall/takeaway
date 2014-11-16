<div class="shops">
        <div class="shops-header">
            <div class="ui-helper-clearfix">
               <span>
                    <input type="checkbox" class="sh_hot_shops" name="hot_shops" checked="checked"/>
                    <span>热门餐厅</span>
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
            </div>
        </div>
        <table class="shop_container">
            <tr>
                <td>
                    @include("widget/shop_sec/shop_sec" , array("shops" => $shop_list['data']['shops']))
                </td>
            </tr>
        </table>
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/shop_list/shop_list.css")}}
@stop