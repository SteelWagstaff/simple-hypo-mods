window.hypothesisConfig = function () {
    return {
        onLayoutChange: function(layoutParams) {
          if (body.width() - layoutParams.width() > 400) {
            jQuery('#page').css({width: 'calc(100%-' + layoutParams.width + 'px)'});
            // Still need to account for placement of PB nav buttons
        }
    }
	}
}
