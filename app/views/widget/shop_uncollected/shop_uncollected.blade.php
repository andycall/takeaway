@if(count($my_store['data'] < 5))
    @for ($i = count($my_store['data']); $i < 5; $i++)
            <div class="collection-row-none">
                <div class="add"></div>
            </div>
    @endfor
@endif


@section("css")
    @parent
    {{HTML::style("/css/widget/shop_uncollected/shop_uncollected.css")}}
@stop
