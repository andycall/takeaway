define(['jquery', "tools/Sizer"], function($, Sizer){
	var drop_button = $(".drop_button"),
		drop_list = $(".drop_list"),
		activitiesBtn = $('.activities-btn'),
		shops_func = $('.shops_func'),
		choice_click = $(".choice_click");

	drop_button.on('click', function(e){
		drop_list.toggle();
	});

	(function(){
		var target = $(".shop_container .more_shops-row-book");

		var result = [];

		target.each(function(index, value){

			var target = $(this),
				place_id = target.data("place_id"),
				shop_id = target.data("shop_id"),
				flavor  = target.data("flavor"),
				issupportpay = target.data('issupportpay'),
				isonline = target.data('isonline'),
				ishot   = target.data('ishot'),
				support_activity = target.data('support_activity').split(","),
				storage = {};

			storage['place_id'] = place_id;
			storage['shop_id']  = shop_id;
			storage['flavor']   = flavor;
			storage['issupportpay'] = issupportpay;
			storage['isonline'] = isonline;
			storage['ishot']  = ishot;
			storage['support_activity'] = support_activity;
			storage['shop_id'] = shop_id;

			result.push(storage);

		});
        console.log(result);

		Sizer.add(result);

	})();

	choice_click.on('click' ,function(ev){


		var target = ev.delegateTarget,
			input  = $(target).find("input"),
			text      = $(target).find("label"),
            nowChecked = input[0].checked;

        input[0].checked = ! nowChecked;

        var obj = {};

        var spans = $(".choice_click");

        spans.each(function(index, value){
            var input = $(this).find("input"),
                text  = $(this).find("label");

            var checked = input[0].checked,
                val   = text.html(),
                label  = $(this).data('label');

            if(checked){
                obj[label] = Number(checked);
            }
        });

        console.log(Sizer.get(obj));


        return false;
	});



	drop_list.on('click', "li", function(ev){
		var target = ev.currentTarget,
			type = target.innerHTML;

		drop_list.toggle();
	});


});