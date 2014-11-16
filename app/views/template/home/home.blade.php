@extends("layout.home")

@section("header")
	@include("widget.userBar.userBar")
@stop

{{-- 地点与切换地区 --}}
@section("nav")
    @include("widget.nav.nav")
@stop

{{-- 广告图片轮播 --}}
@section("swipe")
    @include("widget.swipe.swipe")
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
    @include("widget/shop_list/shop_list")
@stop

  {{-- 5个广告图片 --}}

@section("ads")
    <div> 5个广告图片</div>
@stop

  {{-- 更多餐厅 --}}
@section("more_shops")
    @include("widget/more_shops/more_shops")
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

