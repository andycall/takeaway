@extends("layout.home")

@section("header")
	@include("widget.userBar.userBar")
@stop

{{-- 地点与切换地区 --}}
@section("nav")
    @include("widget.home.nav.nav")
@stop

{{-- 广告图片轮播 --}}
@section("swipe")
    @include("......widget.swipe.swipe")
@stop

{{-- 我的收藏 --}}
@section("collection")
    <div class="collection">
        <div class="collection-header">
            <span class="title">我的收藏</span>
            <a class="set" href="{{$my_store['url']}}">设置</a>
        </div>

        <div class="collection-row">
            {{-- 获取商店widget --}}
            @include("widget/shop_sec/shop_sec", array("shops" => $my_store['data']))

            {{-- 填充剩余的块 --}}
{{--            @include("widget/shop_uncollected/shop_uncollected"m)--}}
        </div>
    </div>
@stop

  {{-- 餐厅列表 --}}
@section("shops")
    <div class="shops">
        <div class="shops-header">
            <div class="ui-helper-clearfix">
                @include("widget.shop_button.shop_button")
                <span class="fliter"></span>
                @include("widget.flavor_block.flavor_block")
            </div>
        </div>
        <div class="shop_activities">
            <div class="ui-helper-clearfix">
                @include("widget.activites_button.activites_button")
            </div>
        </div>
        <table class="shop_container">
            <tr>
                <td>
                    {{--<div class="shop_sec">--}}
                        {{--<div class="flavour_collection"></div>--}}
                        {{--<div class="shop_content">--}}
                            {{--<div class="logo_wrapper">--}}
                                {{--<div class="logo"><a href="#"><img src="" alt=""/></a></div>--}}
                                {{--<div class="deliver_time" data-deliver-time="45分钟">--}}
                                    {{--45分钟--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<div class="name">--}}
                                   {{--<a class="restaurant-link" href="http://r.ele.me/cqlzbfwmsg" target="_blank">【710】劉仔煲..</a>--}}
                                {{--</div>--}}
                                {{--<div class="states_lable"><span>接受预定</span></div>--}}
                                {{--<div class="status_desc"><span>送餐时间17:00开始</span></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="shop_statement"></div>--}}
                    {{--</div>--}}
                    @include("widget/shop_sec/shop_sec" , array("shops" => $shop_list['data']['shops']))
                </td>
            </tr>
        </table>
    </div>
@stop

  {{-- 5个广告图片 --}}

@section("ads")
    <div> 5个广告图片</div>
@stop

  {{-- 更多餐厅 --}}
@section("more_shops")
    <div class="more_shops">
        <div class="more_shops-header">
            <span class="title">更多餐厅</span>
        </div>
    </div>

@stop

@section("footer")
	@include("widget.footer.footer")
@stop

@section("css")
    {{HTML::style("/css/lib/jquery-ui.css")}}
	{{HTML::style("/css/template/home/home.css")}}
@stop

@section("script")
    {{HTML::script("/js/lib/require.js", ["data-main" => url("/js/template/home/home.js")])}}
@stop

