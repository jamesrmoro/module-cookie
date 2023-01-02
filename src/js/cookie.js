$(document).ready(function(){
	$('body').on('click', '.cookie-notice-accept-js', function(){
	    localStorage.setItem("cookie-site", 'accept-cookie');
	    $(".cookie-notice").fadeOut();
	});

	var status_cookie = localStorage.getItem('cookie-site');

	if (localStorage.getItem("cookie-site") == null) {
	    $(".cookie-notice").css("display", "block");
	}
});