/**
 * template的作用是include多个widget，
 * 通过这种方式然后填充layout，widget得到复用
 */
@extends("layout.common")

/**
 * 每个widget是一个页面功能区
 * 例如我们可以讲头部登陆栏，地图搜索以及菜单列表抽象为一个widget
 * 这样做的好处是widget能够得到最大程度的复用，
 * 例如多个template都同时有头部登陆栏，那么前端所需要做的就是include然后传数据即可
 */
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

/**
 * 请将静态文件放在最后加载，否则laravel会加载不成功
 * 请注意widget是如何load静态资源的
 * 通过grunt和这种方式，那么前端不需要操心文件的编译、压缩
 * 并且非常好维护（模板、JS、CSS都在一块，他们就是标准的最佳体现）
 */
@section("css")
	{{HTML::style("/css/template/home/home.css")}}
	{{HTML::style("/css")}}
@stop

@section("script")
	{{HTML::script("/js/template/home/home.js")}}
@stop

