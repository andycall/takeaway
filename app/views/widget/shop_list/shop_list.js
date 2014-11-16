define(['jquery'], function($){
	var drop_button = $(".drop_button"),
		drop_list = $(".drop_list"),
		activitiesBtn = $('.activities-btn'),
		shops_func = $('.shops_func');

	drop_button.on('click', function(e){
		drop_list.toggle();
	});

	activitiesBtn.on('click',  function(ev){
		var checked = $(this).find('input')[0].checked;
		if(checked){
			$(this).find('input')[0].checked = false;
		}
		else {
			$(this).find('input')[0].checked = true;
		}
	});

	shops_func.on('click', function(e){
		var checked = $(this).find('input')[0].checked;

		if(checked){
			$(this).find('input')[0].checked = false;
		}
		else {
			$(this).find('input')[0].checked = true;
		}
	});

	drop_list.on('click', "li", function(ev){
		var target = ev.currentTarget,
			type = target.innerHTML;


		drop_list.toggle();
	});


});