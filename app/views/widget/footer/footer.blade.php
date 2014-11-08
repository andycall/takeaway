<div class="footer">
	This is Footer Widget!
</div>

@section("css")
	@parent
	{{HTML::style(public_path()."/views/widget/footer/footer.css")}}
@stop

@section("script")
	@parent
	{{HTML::script(public_path()."/js/views/widget/footer/footer.js")}}
@stop