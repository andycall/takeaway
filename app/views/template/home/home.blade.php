@extends("layout.common")

@section("header")
	@include("widget.userBar.userBar")
@stop

@section("left_content")
	@include("widget.homeLeft.homeLeft")
@stop

@section("right_content")
	@include("widget.homeRight.homeRight")
@stop

@section("footer")
	@include("widget.footer.footer")
@stop

@section("css")
	{{HTML::style("/css/template/home/home.css")}}
	{{HTML::style("/css")}}
@stop

@section("script")
    {{HTML::script("http://hongyan.cqupt.edu.cn/cdn/js/underscore-1.7.0.min.js")}}
    {{HTML::script("/js/lib/jquery.js")}}
    {{HTML::script("/js/template/home/home.js")}}
@stop

