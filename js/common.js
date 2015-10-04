$('body').tooltip({
	selector: '[data-tooltip=tooltip]',
	placement : 'auto top',
	html: 'true',
	container: 'body',

});
$('body').popover({
	selector: '[data-popover=popover]',
	placement : 'auto',
	html: 'true',
	trigger: 'hover',
	container: 'body',
});
