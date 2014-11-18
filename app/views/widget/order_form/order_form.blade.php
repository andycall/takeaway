<div class="recent_month">

    <div class="header">
        <h2>
            {{$title}}的订单 - 共{{$form['deal_count']}}张
        </h2>
    </div>

    <div class="inner">
@foreach($form['deal'] as $value)
        <div class="order_form">
            <div class="order_header">
                <div class="order_wrapper">
@if($value['deal_statue'])
                    <div class="order_title finish">交易已完成</div>
@else
                    <div class="order_title unfinish">交易失败</div>
@endif
                </div>
            </div>

        </div>
@endforeach
    </div>

</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/order_form/order_form.css")}}
@stop