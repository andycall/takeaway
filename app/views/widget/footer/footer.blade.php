<div class="footer">
	This is Footer Widget!
</div>

@section("css")
	@parent
	{{HTML::style("/css/widget/footer/footer.css")}}
@stop

@section("script")
	@parent
	{{HTML::script("/js/widget/footer/footer.js")}}
@stop