// Set Cookie
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
 
// Get Cookie
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

if(getCookie('userIP')){
		if(!$('#label-send').hasClass('d-none')){
			$('#label-send').addClass('d-none');
			$('#ip-fullname').prop('disabled',true);
			$('#ip-company').prop('disabled',true);
			$('#ip-email').prop('disabled',true);
			$('#ip-phone').prop('disabled',true);
			$('#ip-text').prop('disabled',true);
		}
		var interval_obj = setInterval(function() {
			if (!getCookie('userIP')) {
				$('#label-send').removeClass('d-none');
				$('#ip-fullname').prop('disable',false);
				$('#ip-company').prop('disabled',false);
				$('#ip-email').prop('disabled',false);
				$('#ip-phone').prop('disabled',false);
				$('#ip-text').prop('disabled',false);
				clearInterval(interval_obj);
			}
		}, 5 * 1000);
	}
document.addEventListener( 'wpcf7mailsent', function( event ) {
	if(!getCookie('userIP')){
		setCookie('userIP', 'submit', 3);
	}
	if(getCookie('userIP')){
		if(!$('#label-send').hasClass('d-none')){
			$('#label-send').addClass('d-none');
			$('#ip-fullname').prop('disabled',true);
			$('#ip-company').prop('disabled',true);
			$('#ip-email').prop('disabled',true);
			$('#ip-phone').prop('disabled',true);
			$('#ip-text').prop('disabled',true);
		}
		var interval_obj2 = setInterval(function() {
			if (!getCookie('userIP')) {
				$('#label-send').removeClass('d-none');
				$('#ip-fullname').prop('disabled',false);
				$('#ip-company').prop('disabled',false);
				$('#ip-email').prop('disabled',false);
				$('#ip-phone').prop('disabled',false);
				$('#ip-text').prop('disabled',false);
				clearInterval(interval_obj2);
			}
		}, 5 * 1000);
	}
}, false );
document.addEventListener( 'wpcf7submit', function( event ) {
	setTimeout(function() {$('.wpcf7-response-output').fadeOut('1000','linear',true)}, 5 * 1000);
}, false );

//click
$('#label-close span.ajax-loader').removeClass('ajax-loader');
$('.wpcf7-form-control-wrap .wpcf7-form-control').click(function(){
	if($('.wpcf7-form-control-wrap .wpcf7-form-control').hasClass('wpcf7-not-valid')){
		$(this).removeClass('wpcf7-not-valid');
	}
});
$('#label-send').click(function(){
	$('#label-send .ajax-loader').addClass('icon-loading');

});	