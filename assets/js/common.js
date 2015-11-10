// http://getbootstrap.com/javascript/#tooltips
$('body').tooltip({
	selector: '[data-toggle=tooltip]',
	placement : 'auto top',
	html: 'true',
	container: 'body',
});

// feedback messages
var feedback = (function() {
    "use strict";

    var elem,
        hideHandler,
        that = {};

    that.init = function(options) {
        elem = $(options.selector);
    };

    that.show = function(text) {
        clearTimeout(hideHandler);

        elem.find("span").html(text);
        elem.delay(100).fadeIn().delay(500).fadeOut();
    };

    return that;
}());

$(function () {
    feedback.init({
        "selector": ".rb-feedback "
    });
});
