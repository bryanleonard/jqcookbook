;(function ($) {
	
	var name = 'tooly';
	Plugin.prototype = {
		defaults: {
			'height': 30,
			'fadeInDelay': 200
		}
	};
	
	// The actual plugin constructor
	function Plugin(element, options) {
		var _this = this;
		_this.$el = $(element);
		_this.el = element;
		_this.options = $.extend({}, this.defaults, options);
		
		_this.init = function () {
			_this._text = (typeof _this.$el.data('title') != "undefined") ? _this.$el.data('title') : _this.$el.prop("title");

			//Only display the tooltip if a title exists.
			if (typeof _this._text != 'undefined') {
				var $html = $('<div class="tooltip-frame">' + '<div class="tooltip-arrow"></div>' + '<div class="tooltip-text">' + _this._text + "</div></div>");

				$html.css({
						'position': 'absolute',
						'text-align': 'center',
						'height': _this.options.height,
						'line-height': _this.options.height + 'px',
						'left': _this.$el.offset().left + _this.$el.outerWidth() - _this.$el.offset().left/1.5,
						// 'left': _this.$el.offset().left + _this.$el.outerWidth() + 15,
						'top': _this.$el.offset().top + (_this.$el.outerHeight() / 2) - (_this.options.height / 2),
						'background-color': 'rgba(0, 0, 0, 0.81)',
						'color': '#fff',
						'padding': '0 10px',
						'border-radius': '5px',
						'opacity': 'none'
					})
				.find('.tooltip-arrow').css({
					'width': 0,
					'height': 0,
					'border-top': '10px solid transparent',
					'border-bottom': '10px solid transparent',
					'border-right': '10px solid rgba(0, 0, 0, 0.81)',
					'position': 'absolute',
					'left': '-13px',
					'top': ((_this.options.height / 2) - 10)
				});

				_this.$el.on("mouseover", function(){
					$html.fadeIn(_this.options.fadeInDelay);
					_this.$el.after($html);
				}).on('mouseout', function() {
					$html.remove();
				});
			}
		}
	}

	$.fn[name] = function (options) {
		return this.each(function () {
			new Plugin(this, options).init();
		});
	}

})(jQuery);