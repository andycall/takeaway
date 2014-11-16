define(['jquery'], function($){
	function isInArray(value, arr){
		for(var i = 0,len = arr.length; i < len ; i++){
			if(arr[i] === value){
				return i;
			}
		}
		return -1;
	}

	function Sizer(){
		this.data = {};
	}


	/**
	 *
	 * @param
	 * group 数据的组别
	 *
	 *
	 */
	Sizer.prototype.add = function(label, value){
		var self = this;

		if(!self.data[label]){
			self.data[label] = [];
		}
		if($.isFunction(value)) return;

		if(!$.isArray(value)) value = [value];

		self.data[label].push(value);
	};


	// 获取
	Sizer.prototype.get = function(labels){
		var self = this,
			data = self.data,
			index;

		if(!$.isArray(labels)) labels = [labels];

		var result = [];

		for(var key in data){
			index = isInArray(key, labels);

			if(index >= 0){
				result.push({
					label : labels[index],
					value : data[key]
				});
				labels.pop(index);
			}
		}

		return result;
	};


	return {
		Sizer : new Sizer()
	}
});