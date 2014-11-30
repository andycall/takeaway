@extends("layout.order")

@section("header")
	@include("widget.cart_topbar.cart_topbar")
@stop

{{-- 订单顶部  --}}
@section("content_header")
    @include("widget.content_header.content_header")
@stop

{{-- 美食篮子 --}}
@section("good_basket")
    @include("widget.good_basket.good_basket")
@stop

{{-- 功能 --}}
@section("function_module")
    {{-- 送达地址 --}}
    @include("widget.deliver_place.deliver_place")

    {{-- 送达时间 --}}
    @include("widget.deliver_time.deliver_time")

    {{-- 支付方式 --}}
    @include("widget.pay_method.pay_method")

@stop


@section("footer")
	@include("widget.footer.footer")
@stop

@section("css")
    {{HTML::style("/css/lib/jquery-ui.css")}}
    {{HTML::style("/css/template/lib/normalize.css")}}
	{{HTML::style("/css/template/order/order.css")}}
@stop

@section("script")
    {{HTML::script("/js/lib/require.js", ["data-main" => url("js/template/order/order.js")])}}
@stop

