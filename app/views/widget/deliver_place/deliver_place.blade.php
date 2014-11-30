{{-- 送达地址 --}}
<div class="m-adress hover-bac">
	<div id="" class="caddress-module u-send-info">
		<h3 class="cmodule-title"><i class="icon-cmodule address"></i>送达地址：</h3>
	            <div class="cmodule-content">
			<span class="cmodule-info current_addr">
			            请选择地址
			</span>
		     <span id="addr_edit" class="cmodule-edit js-open-edit">[修改]</span>
	            </div>
           </div>

           <div id="" class="cmodal-address js-cmodal-wrapper">
	    <h3 class="cmodal-header">送达地址</h3>
	    <div class="cmodal-content">
	          <ul class="cmodal-list">
		        <li id="new_addr" class="clist-item caddr-item-new ui_current">
			          <input id="addr_new_radio" class="clist-radio" type="radio" name="optionAddress" checked="">
			          <div class="caddr-edit-field">
				            <input class="name" type="text" placeholder="姓名">
				            <input class="addr" type="text" placeholder="外卖送到的地址">
				            <input class="tel" type="tel" placeholder="手机号码">
				            <input class="bk" type="text" placeholder="固话手机短号(选填)">
			          </div>
			          <div class="caddr-modify">
			            <a class="del cancel_new_btn js-exit-edit">×</a>
			          </div>
		        </li>
	            </ul>
	    </div>
	    <p class="cmodal-footer">
		      <button class="ui-btn btn-confirm confirm_btn">保存</button>
		      <button class="ui-btn cancel_btn js-exit-edit">取消</button>
	    </p>
  </div>
</div>

{{-- 送达时间 --}}
<div id="" class="time-module  u-send-info hover-bac">
  	<h3 class="cmodule-title"><i class="icon-cmodule time"></i>送达时间：</h3>
  	<div class="cmodule-content">
	        	<div class="cart-time">
	            	<div class="ctime-toggle">立即送出</div>
	   	 </div>
    	</div>
</div>


{{-- 支付方式 --}}
<div id="" class="cpayment-module u-send-info hover-bac">
  	<h3 class="cmodule-title"><i class="icon-cmodule payment"></i>支付方式：</h3>
  	<div class="cmodule-content">
	      	<div class="cart-payment">
			    <a id="offline_pay_btn" data-payonline="0" class="cpayment-choice ui_selected">
			            餐到付款
			    </a>

			    <a id="online_pay_btn" data-payonline="1" class="cpayment-choice ui_disabled" title="">
			       在线支付
			   </a>
	            </div>

	            <div id="activity_discount" class="activity-tip hide">在线支付立减
	            	<strong id="activity_discount_value">0</strong>元!
	            </div>

	            <div id="wx_activity" class="activity-tip">
	            	<a href="http://ele.me/activity/wx-bonus" target="_blank" style="color: white;font-size:12px;">微信支付100%返最高100元红包</a>
	            </div>
  
    	</div>
</div>


{{-- 确认下单 --}}



<div class="u-mask js-exit-edit">
	
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/deliver_place/deliver_place.css")}}
@stop