{{-- 送达地址 --}}
<div class="m-adress hover-bac">
	<div id="" class="caddress-module u-send-info">
		<h3 class="cmodule-title"><i class="icon-cmodule address"></i>送达地址：</h3>
	            <div class="cmodule-content js-show-addr-info">
	            	<span class="cmodule-info current_name">
					</span>
					<span class="cmodule-info current_addr">
					            请选择地址
					</span>
					<span class="cmodule-info current_tel">
					</span>
					<span class="cmodule-info current_bkTel">
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
			          <div class="caddr-edit-field js-adress-modify">
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
		      <button type="button" class="ui-btn btn-confirm confirm_btn js-save-edit">保存</button>
		      <button type="button" class="ui-btn cancel_btn js-exit-edit">取消</button>
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

	      		     {{--
	      		        --   注： class名ui_disabled后台根据餐厅是否支持在线付款而决定是否加 
	      		      --}}
			    <a id="offline_pay_btn" data-payonline="0" class="cpayment-choice ui_selected">
			            餐到付款
			            <span class="u-disabled-tip">当前餐厅不支持餐到付款支付功能</span>
			    </a>
                                      
			    <a id="online_pay_btn" data-payonline="1" class="cpayment-choice ui_disabled" title="">
			       在线支付
			       <span class="u-disabled-tip">当前餐厅不支持在线支付功能</span>
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

<input type="submit" class="btn btn-yellow btn-submit" value="确认下单"/>

{{-- 验证用户 --}}
<div class="sms-auth js-sms-auth-wrapper">
	<a href="javascript:void(0)" class="exit-sms-auth js-exit-auth">x</a>
	<h4 class="bs-modal-title">用户手机验证</h4>

	<div class="bs-modal-body">
		<p class="ui-alert warning"><i class="icon-warning"></i>您的手机首次在此电脑下单，请先验证手机号码。</p>

		<h5 class="checkout-auth-title">验证码已发送至<span class="auth_tel">18166387284</span>
		</h5>

		<div class="u-auth-send">
			<div class="auth-input-wrapper"><input type="text" class="auth-input js-input-confirm-auth" placeholder="请输入短信验证码"><button type="button" class="repeat-send js-repeat-send-auth">重新发送</button></div><input type="button" value="提交验证码" class="confirm-sms-auth js-send-confirm-auth">
		</div>
	</div>
</div>

{{-- 弹出罩 --}}
<div class="u-mask js-exit-edit js-exit-auth">
	
</div>

{{-- 隐藏的输入框 --}}
<input type="hidden" class="user-name">
<input type="hidden" class="user-tel">
<input type="hidden" class="user-addr">
<input type="hidden" class="user-bkTel">
<input type="hidden" class="uesr-auth">
@section("css")
    @parent
    {{HTML::style("/css/widget/deliver_place/deliver_place.css")}}
@stop