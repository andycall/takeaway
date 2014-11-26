{{-- 评论弹出框 --}}

<script type="text/template" id="drawer-temp">
<%console.log(shop_total)%>
<div class="drawer-header">
	<a href="javascript:void(0)" class="u-close js-close-pop-window">x</a>

     <div class="drawer-dish">
     	<h3 class="dish-name" title="<%= good_name %>"><%= shop_total %>
     	<a href="javascript:void(0)" class="u-favor">♥</a></h3>
     </div>

</div>

<div class="drawer-rating f-cb">
	<div class="u-point">
		<strong class="point js-point"><%= shop_total %></strong>
		<strong class="comment-count"><%= comment_total%>人评价</strong>
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

			<span class="u-bar" style="width:<%= (data.shop_level.level_5/100*80)%>"></span>
			<span class="rate"><%= data.shop_level.level_5 %>%</span>

		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i class="off">★</i>
			</span>

			<span class="u-bar" style="width:<%= (data.shop_level.level_5/100*80)%>"></span>
			<span class="rate"><%= data.shop_level.level_4 %>%</span>
			
		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i>★</i>
				<i class="off">★</i>
				<i class="off">★</i>
			</span>

			<span class="u-bar" style="width:<%= (data.shop_level.level_5/100*80)%>"></span>
			<span class="rate"><%= data.shop_level.level_3 %>%</span>
		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i>★</i>
				<i class="off">★</i>
				<i class="off">★</i>
				<i class="off">★</i>
			</span>

			<span class="u-bar" style="width:<%= (data.shop_level.level_5/100*80)%>"></span>
			<span class="rate"><%= data.shop_level.level_2 %>%</span>
		</li>
		<li>
			<i class="u-icon-star"></i>
			<span class="rating-stars">
				<i>★</i>
				<i class="off">★</i>
				<i class="off">★</i>
				<i class="off">★</i>
				<i class="off">★</i>
			</span>

			<span class="u-bar" style="width:<%= (data.shop_level.level_5/100*80)%>"></span>
			<span class="rate"><%= data.shop_level.level_1 %>%</span>

		</li>
	</ul>
	
</div>


<div class="drawer-comment">
	<h4 class="u-comment-cheader">
		用户评价
		<span class="u-isContent">
			<input type="checkbox" name="" id="btn-check" class="u-check-btn" checked>
			<label for="btn-check">有内容的评价</label>
		</span>
	</h4>


	<ul class="comment-lists">
	    <% for( var i = 0, len= comment_body.length; i < len; i++){%>
	    	<li class="comment-item f-cb">
				<p class="user-info">
				    <span class="user-name">comment_body[i].comment_person</span>
				    <span class="user-date">comment_body[i].comment_date</span>
					<i class="user-star">
					<% for(var j=0, len=comment_body[i].length; i<len; i++){ %>
						<% print("★"); %>
					<%}%>
					</i>
				</p>

				<p class="user-text">comment_body[i].comment_content</p>
			</li>
	    <%}%>
	</ul>
</div>

</script>
@section("css")
    @parent
    {{HTML::style("/css/widget/pop_window/pop_window.css")}}
@stop