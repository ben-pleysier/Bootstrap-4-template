jQuery(document).ready(function ($) {

	// BOOTSTRAP MENU BAR
	var url = window.location.href;
	$('ul.navbar-nav a').map(function () {
		$(this).parent().toggleClass('active', this.href == url || this.href == url.split("?")[0].split("#")[0]);
	});

});
