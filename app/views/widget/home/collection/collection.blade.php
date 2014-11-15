<div class="collection">
    <div class="collection-header">
        <span class="title">我的收藏</span>
        <a class="set" href="{{$my_store['url']}}">设置</a>
    </div>

    <div class="collection-row">
@for ($i = 0; $i < count($my_store['data']); $i++)

@if($my_store['data'][$i]['is_opening'])
        <div class="collection-row-book collection-row-colse">
@else
        <div class="collection-row-book">
@endif
            <div class="collection-row-book-close">
                <a href="##" class="close"></a>
            </div>
            <div class="collection-row-book-left">
                <div class="logo">
                    <a href="{{$my_store['data'][$i]['shop_url']}}">
@if($my_store['data'][$i]['shop_logo'])
                        <img src="{{$my_store['data'][$i]['shop_logo']}}"/>
@else
                        <img src="/takeaway/public/images/eleme_restaurant_logo.jpg"/>
@endif
                    </a>
                </div>
@if (!$my_store['data'][$i]['deliver_time'])
                <span title="该餐厅刚开张，暂无送餐时间数据"></span>
@elseif ($my_store['data'][$i]['deliver_time'] < 45)
                <span title="平均送餐时间{{$my_store['data'][$i]['deliver_time']}}分钟">{{$my_store['data'][$i]['deliver_time']}}分钟</span>
@else
                <span class="long_time" title="当前餐厅送餐较慢">45+分钟</span>
@endif
            </div>
            <div class="collection-row-book-right">
                <div class="title">
                    <a href="{{$my_store['data'][$i]['shop_url']}}">{{$my_store['data'][$i]['shop_name']}}</a>
                </div>
@if($my_store['data'][$i]['is_opening'])
                <div class="busy">
@if($my_store['data'][$i]['is_opening']==1)
                    <span>休息中</span>
                </div>
                <div class="remark">
                    <span title="休息中，暂不接受订单">休息中暂不接受订单</span>
                </div>
@else
                    <span>太忙了</span>
                </div>
                <div class="remark">
                    <span title="太忙了，暂不接受订单">太忙了暂不接受订单</span>
                </div>
@endif
@else
@if($my_store['data'][$i]['is_ready_for_order'])
                <div class="reserve">
                    <span>接受预定</span>
                </div>
                <div class="remark">
                    <span title="接受预定，送餐时间{{$my_store['data'][$i]['deliver_start']}}开始">送餐时间{{$my_store['data'][$i]['deliver_start']}}开始</span>
                </div>
@else
                <div class="style">
                    <span>{{$my_store['data'][$i]['shop_type']}}</span>
                </div>
                <div class="remark">
                    <div class="star" title="餐厅评价：{{$my_store['data'][$i]['shop_level']}}星" style="background-position: -1px {{-334+15.5*ceil($my_store['data'][$i]['shop_level']*2)}}px"></div>
                    <span>{{$my_store['data'][$i]['order_count']}}订单</span>
                </div>
@endif
@endif
            </div>
        </div>

@endfor

@if(count($my_store['data'] < 5))
@for ($i = count($my_store['data']); $i < 5; $i++)
        <div class="collection-row-none collection-row-border">
            <div class="add"></div>
        </div>
@endfor
@endif

    </div>
</div>

@section("css")
	@parent
	{{HTML::style("/css/widget/home/collection/collection.css")}}
@stop
