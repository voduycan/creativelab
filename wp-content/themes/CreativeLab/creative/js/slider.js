var i = 1;
var n = 4;
var curent = n;
var near = i + 1;
var flag = false;

//Click Previous button
$('.previous').click(function(){
	if(!flag){
		flag = true;
		curent = i;
		
		if(i > 1 ){
			i = i - 1;
		}
		else{
			i = n;
		}
		near = i - 1;
		if(i===1){
			near = n;
		}
		$('#slider_' + curent).css('visibility','hidden');
		$('#slider_' + curent).prop('class','slider');
		$('#slider_' + curent).addClass('translate-right');

		$('#slider_' + i).css('visibility', 'visible');
		$('#slider_' + i).prop('class','slider');
		$('#slider_' + i).addClass('translate-center-left');

		$('#slider_' + near).prop('class','slider');
		$('#slider_' + near).addClass('translate-left');
		setTimeout(function(){flag = false;}, 0.5*1000);
	}
});

var flag2 = false;

//Click Next button
$('.next').click(function(){
	if(!flag2){
		flag2 = true;
		curent = i;
		
		if(i < n ){
			i = i + 1;
		}
		else{
			i = 1;
		}
		near = i + 1;
		if(i === n){
			near = 1;
		}

		$('#slider_' + curent).css('visibility','hidden');
		$('#slider_' + curent).prop('class','slider');
		$('#slider_' + curent).addClass('translate-left');
		

		$('#slider_' + i).css('visibility', 'visible');
		$('#slider_' + i).prop('class','slider');
		$('#slider_' + i).addClass('translate-center-right');

		$('#slider_' + near).prop('class','slider');
		$('#slider_' + near).addClass('translate-right');
		setTimeout(function(){flag2 = false;}, 0.5*1000);
	}
});

//Click Search button
$('.search').click(function(){
	$('.slide .zoom-in').removeClass('zoom-in');
	$('#slider_' + i).addClass('zoom-in');
	$('#slider_' + i).removeClass('delay');
	setTimeout(function(){
		$('#content_' + i).addClass('show');
		$('#content_' + i).css('visibility', 'visible');
	}, 0.4 *1000);
});

//Click Close button
$('.close-btn').click(function(){
	$('#content_' + i).removeClass('show');
	$('#slider_' + i).addClass('delay');
	setTimeout(function(){
		$('#slider_' + i).removeClass('zoom-in');
		$('#slider_' + i).removeClass('delay');
		$('#content_' + i).css('visibility', 'hidden');
	}, 0.4 * 1000);
});