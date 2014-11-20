<div class="content_header">
    <h2>管理我的地址</h2>
</div>
<div class="content_inner">
    <h3>已经保存的送餐地址</h3>

    <table class="address-table table table-bordered">
        <thead>
            <tr>
                <th class="col-address">地址</th>
                <th>手机号码</th>
                <th>备选电话</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>南极操场西抠门</td>
                <td>18545454546</td>
                <td>54654654564</td>
                <td><span>默认地址</span> | <a href="">编辑</a> | <a href="">删除</a></td>
            </tr>
        </tbody>

    </table>
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/personal_my_site/personal_my_site.css")}}
@stop