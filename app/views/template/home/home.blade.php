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
    @include("widget.home.swipe.swipe")
@stop

{{-- 我的收藏 --}}
@section("collection")
    @include("widget.home.collection.collection")
@stop

  {{-- 餐厅列表 --}}
@section("shops")
    @include("widget.home.shops.shops")
@stop

  {{-- 5个广告图片 --}}

@section("ads")
    @include("widget.home.ads.ads")
@stop

  {{-- 更多餐厅 --}}
@section("more_shops")
    @include("widget.home.more_shops.more_shops")
@stop

@section("footer")
	@include("widget.footer.footer")
@stop

@section("css")
	{{HTML::style("/css/template/home/home.css")}}
	{{HTML::style("/css")}}
@stop

@section("script")
    {{HTML::script("/js/lib/require.js", ["data-main"=> "/js/template/home/home.js"])}}
@stop

