<div class="content_header">
    <div class="ui-helper-clearfix">
        <h2>个人中心</h2>
    </div>
</div>
<div class="content_inner">
    <div class="account_state">
        <div class="ui-helper-clearfix">
            <div class="col_left">
                <div class="avatar">

                </div>
                <div class="ava_wrapper">
                    <h5>Lecion</h5>
                    <div>
                        <span>安全等级</span>
                        <a class="user-level high">较高</a>
                    </div>
                </div>
            </div>
            <div class="col_right">
                <div class="text_head">账户余额</div>
                <div class="account_balance ui-helper-clearfix">
                    <div class="balance">
                        <strong>0</strong>元
                    </div>
                    <div class="relative">
                        <a href="" class="btn btn-yellow">立刻充值</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relate_info ui-helper-clearfix">
            <ul>
                <li><i class="icon icon-order"></i> 完成订单: <a href="">11</a>张(1个月内完成)</li>
                <li><i class="icon icon-star"></i> 收藏: <a href="">3</a>家餐厅 <a href="">5</a>份美食 </li>
            </ul>
        </div>
    </div>
    <div class="last_order">
        <ul class="tab_header ui-helper-clearfix">
            <li class="active">最近饿单</li>
            <li>最近在线交易</li>
        </ul>
        <div class="tab_body">
            <table>
                <thead>
                    <tr>
                        <th>订单号</th>
                        <th>下单时间</th>
                        <th>餐厅</th>
                        <th>订单详情</th>
                        <th>订单状态</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="sn"><a href="">123213213213</a></td>
                        <td class="time">11-18 12:00</td>
                        <td class="restaurant">脆皮鸡</td>
                        <td>脆皮鸡一根, </td>
                        <td class="status">交易完成</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/personal_center/personal_center.css")}}
@stop