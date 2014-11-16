@for ($n = 0; $n < 2; $n++)

    <div class="more_shops-row">
@for ($i = 0; $i < 5; $i++)
        <a href="{{$shops[$i]['shop_url']}}">
@if($shops[$i]['is_opening'])
            <div class="more_shops-row-book more_shops-row-colse">
@else
            <div class="more_shops-row-book">
@endif
@if($shops[$i]['is_collected'])
                <div class="collect_star">

                </div>
                <div class="collect">
                    收藏
                </div>
                <div class="uncollect change">
                    取消收藏
                </div>
@else
                <div class="collect_star" style="display: none">

                </div>
                <div class="collect change">
                    收藏
                </div>
                <div class="uncollect">
                    取消收藏
                </div>
@endif
                <div class="more_shops-row-book-left">
                    <div class="logo">
@if($shops[$i]['shop_logo'])
                        <img src="{{url($shops[$i]['shop_logo'])}}"/>
@else
                        <img src={{url("/takeaway/public/images/eleme_restaurant_logo.jpg")}}/>
@endif
                    </div>
@if (!$shops[$i]['deliver_time'])
                    <span title="该餐厅刚开张，暂无送餐时间数据"></span>
@elseif ($shops[$i]['deliver_time'] < 45)
                    <span title="平均送餐时间{{$shops[$i]['deliver_time']}}分钟">{{$shops[$i]['deliver_time']}}分钟</span>
@else
                    <span class="long_time" title="当前餐厅送餐较慢">45+分钟</span>
@endif
                </div>
                <div class="more_shops-row-book-right">
                    <div class="title">
                        <p>{{$shops[$i]['shop_name']}}</p>
                    </div>
@if($shops[$i]['is_opening'])
                    <div class="busy">
@if($shops[$i]['is_opening']==1)
                        <span>休息中</span>
                    </div>
                    <div class="time">
                        <span title="休息中，暂不接受订单">休息中暂不接受订单</span>
                    </div>
@else
                        <span>太忙了</span>
                    </div>
                    <div class="time">
                        <span title="太忙了，暂不接受订单">太忙了暂不接受订单</span>
                    </div>
@endif
@else
@if($shops[$i]['is_ready_for_order'])
                    <div class="reserve">
                        <span>接受预定</span>
                    </div>
                    <div class="time">
                        <span title="接受预定，送餐时间{{$shops[$i]['deliver_start']}}开始">送餐时间{{$shops[$i]['deliver_start']}}开始</span>
                    </div>
@else
                    <div class="style">
                        <span>{{$shops[$i]['shop_type']}}</span>
                    </div>
                    <div class="remark">
                        <div class="star" title="餐厅评价：{{$shops[$i]['shop_level']}}星" style="background-position: -1px {{-334+15.5*ceil($shops[$i]['shop_level']*2)}}px"></div>
@if($shops[$i]['order_count'])
                        <span>{{$shops[$i]['order_count']}}订单</span>
@endif
                    </div>
                    <div class="icon">
@for($m = 0; $m < count($shops[$i]['support_activity']); $m++)
                        <span title="{{$shop_list['data']['activity'][$m]}}" style="background-position: 0 {{20-$shops[$i]['support_activity'][$m]*20}}px"></span>
@endfor
                    </div>
@endif
@endif
                </div>
            </div>
        </a>
@endfor

    </div>
@endfor


@section("css")
    @parent
    {{HTML::style("/css/widget/shop_info/shop_info.css")}}
@stop
