<div class="homeRight">
	This Is HomeRight Widget!
</div>

@section("css")
	@parent
	{{HTML::style(public_path()."/css/views/widget/homeRight/homeRight.css")}}
@stop

@section("script")
	@parent
	{{HTML::script(public_path()."/js/views/widget/homeRight/homeRight.js")}}
@stop