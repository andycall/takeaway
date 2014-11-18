<div class="recent_month">

    <div class="header">
        <h2>
            {{$title}}的订单 - 共{{$form['deal_count']}}张
        </h2>

    </div>

    <div class="inner">


    </div>

</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/order_form/order_form.css")}}
@stop