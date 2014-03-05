/**
 * 
 */

(function($) {
	$.fixHeightColumns = function() {
		function getBottom(elem) {
			return elem.offset().top + elem.height();
		}

		$.unfixHeightColumns();

		var columns = $('#content-content:visible, #column1-content:visible, #column2-content:visible'),
			maxBottom = 0;

		columns.each(function() {
			var bottom = getBottom($(this));
			if (bottom > maxBottom) {
				maxBottom = bottom;
			}
		});

		columns.each(function() {
			var column = $(this);
			if (getBottom(column) < maxBottom) {
				column.height(maxBottom - column.offset().top);
			}
		});
	};

	$.unfixHeightColumns = function() {
		$('#content-content:visible, #column1-content:visible, #column2-content:visible').each(function() {
			$(this).height('');
		});
	};

	$.startFixHeightColumns = function() {
		$.fixHeightColumns();
		return setInterval(function() {
			$.fixHeightColumns();
		}, 500);
	};

	$.fixWatermarkHeight = function() {
		$('.external-middle').height(
			$('#layout').height() - $('.external-top').height() - $('.promofooter').outerHeight()
		);
	};

	$.startFixWatermarkHeight = function() {
		$.fixWatermarkHeight();
		return setInterval(function() {
			$.fixWatermarkHeight();
		}, 500);
	};
})(jQuery || siteBuilderJs);