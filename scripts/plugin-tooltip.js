;(function ($) {
	
	var name = 'pluginName';
	Plugin.prototype = {
		defaults: {

		}
	};
	
	// The actual plugin constructor
	function Plugin(element, options) {
		var $scope = this;
		$scope.$element = $(element);
		$scope.element = element;
		$scope.options = $.extend({}, this.defaults, options);
		
		$scope.init = function () {
		}
	}

	$.fn[name] = function (options) {
		return this.each(function () {
			new Plugin(this, options).init();
		});
	}

})(jQuery);