// 筛选器
define([ "jquery" ], function($) {
    function Sizer() {
        this.data = [];
    }
    /**
	 * 添加
	 * @数据标签 label
	 * @数据的值 value
	 */
    /**
	 * 获取
	 * @要获取的标签 labels { isHot : 1, flavor : "中式"}
	 * @returns {Array}
	 */
    return Sizer.prototype.add = function(value) {
        var self = this;
        if (!$.isFunction(value)) for (var i = 0, len = value.length; len > i; i++) self.data.push(value[i]);
    }, Sizer.prototype.get = function(labelObject) {
        {
            var self = this;
            self.data;
        }
        if ($.isPlainObject(labelObject)) {
            var result = {};
            for (var key in labelObject) result[key] = [];
            for (var i = 0, len = self.data.length; len > i; i++) {
                var target = self.data[i];
                for (var name in labelObject) target[name] == labelObject[name] && result[name].push(target);
            }
            return result;
        }
    }, new Sizer();
});