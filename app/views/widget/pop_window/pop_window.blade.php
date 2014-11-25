{{-- 评论弹出框 --}}

{{-- header --}}
<div class="drawer-header">
	{{-- close --}}
	<a href="javascript:void(0)" class="u-close js-close-pop-window">x</a>

     <div class="drawer-dish">
     	<h3 class="dish-name" title="宫保鸡丁套饭">宫保鸡丁套饭
     	<a href="javascript:void(0)" class="u-favor">♥</a></h3>
     </div>

</div>
 {{-- 评价 --}}
<div class="drawer-rating f-cb">
	<div class="u-point">
		<strong class="point">3.4</strong>
		<strong class="comment-count">5人评价</strong>
	</div>

	<ul class="u-diagram">
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
			</span>
			<span class="u-bar"></span>
			20.0%
		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
			</span>
			<span class="u-bar"></span>
			40.0%
		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
			</span>
			<span class="u-bar"></span>
			20.0%
		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
			</span>
			<span class="u-bar"></span>
			0.0%
		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
			</span>
			<span class="u-bar"></span>
			20.0%
		</li>
	</ul>
	
</div>

{{-- 用户评论 --}}
<div class="drawer-comment">
	<h4 class="u-comment-cheader">
		用户评价
		<span class="u-isContent">
			<input type="checkbox" name="" id="btn-check" class="u-check-btn" checked>
			<label for="btn-check">有内容的评价</label>
		</span>
	</h4>

	{{-- comment lists --}}
	<ul class="comment-lists">
		<li class="comment-item f-cb">
			<p class="user-info">
				4***c 2014-11-25
				<i class="user-star">★★★★★</i>
			</p>

			<p class="user-text">不错</p>
		</li>
	</ul>
</div>

@section("css")
    @parent
    {{HTML::style("/css/widget/pop_window/pop_window.css")}}
@stop