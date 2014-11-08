<div class="homeLeft">
	This is HomeLeft Widget!
</div>

@section("css")
	@parent
	{{HTML::style(public_path()."/css/views/widget/homeLeft/homeLeft.css")}}
@stop

@section("script")
	@parent
	{{HTML::script(public_path()."/js/views/widget/homeLeft/homeLeft.js")}}
@stop