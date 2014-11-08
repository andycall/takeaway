<div class="userBar">
	This Is UserBar Widget!
</div>

@section("css")
	@parent
	{{HTML::style(public_path()."/css/views/widget/userBar/userBar.css")}}
@stop

@section("script")
	@parent
	{{HTML::script(public_path()."/js/views/widget/userBar/userBar.js")}}
@stop