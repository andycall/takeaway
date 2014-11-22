<div class="res_info">
    <div class="res_info_header">
        <div class="return">
            <a href="{{$top_bar['url']['return_back']}}">
                <i></i>
                <span>返回</span>
            </a>
        </div>
        <div class="res_info_right">
            <img src="{{$top_bar['data']['shop_logo']}}"/>
            <div class="res_info_title">
                <a href="{{$top_bar['url']['shop_url']}}">{{$top_bar['data']['shop_name']}}</a>
            </div>
            <div class="res_info_star">
                <span class="star" style="background-position: -1px {{-334+15.5*ceil($top_bar['data']['shop_total']*2)}}px"></span>
                <span class="orange">{{$top_bar['data']['shop_total']}}</span>
                <span class="gray">{{$top_bar['data']['shop_type']}}</span>
            </div>
        </div>
        <div class="res_info_bottom">
            <div class="res_info_point">
                <div class="point">{{$top_bar['data']['shop_total']}}</div>
                <div class="comment">{{$top_bar['data']['comment_count']}}人 评价</div>
                <ul class="rating-diagram">
@for($i = 5; $i > 0 ; $i--)
                    <li>
                        <span class="star" style="background-position: -1px {{-334+15.5*ceil($i*2)}}px"></span>
                        <div class="bar" style="width: {{1.1*$top_bar['data']['shop_level']["level_".$i]}}px"></div>
                        {{$top_bar['data']['shop_level']["level_".$i]}}%
                    </li>
@endfor
                </ul>
            </div>
            <div class="res_info_intro">
                {{$top_bar['data']['shop_statement']}}
            </div>
            <div class="res_info_list">
                <ul>
@if($top_bar['data']['shop_time'])
                    <li>时间：{{$top_bar['data']['shop_time']}}</li>
@endif
@if($top_bar['data']['shop_address'])
                    <li>地址：{{$top_bar['data']['shop_address']}}</li>
@endif
                </ul>
            </div>
        </div>
    </div>
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/shop_details/shop_details.css")}}
@stop