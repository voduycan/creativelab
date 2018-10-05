$(function() {
	var i = 1;
	var n = 3;
	var curent = n;
	var near = i + 1;
	var flag = false;

	$('#slider-' + curent).addClass('title-to-left');
	$('#slider-' + near).addClass('title-to-right');
	//Click Previous button
	$('#previous').click(function(){
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
			
			$('#slider-' + curent).prop('class','slider');
			$('#slider-' + curent).css('visibility','hidden');
			$('#slider-' + curent).addClass('title-to-right');
			$('#slider-' + curent).addClass('translate-right');

			$('#slider-' + i).prop('class','slider');
			$('#slider-' + i).css('visibility', 'visible');
			$('#slider-' + i).addClass('title-to-center');
			$('#slider-' + i).addClass('left-to-center');
			
			$('#slider-' + near).prop('class','slider');
			$('#slider-' + near).addClass('title-to-left');
			setTimeout(function(){flag = false;}, 0.5*1000);
		}
	});

	var flag2 = false;

	//Click Next button
	$('#next').click(function(){
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
			
			$('#slider-' + curent).prop('class','slider');
			$('#slider-' + curent).css('visibility','hidden');
			$('#slider-' + curent).addClass('title-to-left');
			$('#slider-' + curent).addClass('translate-left');

			$('#slider-' + i).prop('class','slider');
			$('#slider-' + i).css('visibility', 'visible');
			$('#slider-' + i).addClass('title-to-center');
			$('#slider-' + i).addClass('right-to-center');

			$('#slider-' + near).prop('class','slider');
			$('#slider-' + near).addClass('title-to-right');
			setTimeout(function(){flag2 = false;}, 0.5*1000);
		}
	});

	//Click Search button
	$('#zoom-detail').click(function(){
		$('.slide .zoom-in').removeClass('zoom-in');
		$('#slider-' + i).addClass('zoom-in');
		$('#slider-' + i).removeClass('delay-after');
		$('#slider-' + i).addClass('delay-before');
		setTimeout(function(){
			$('#content-' + i).addClass('show');
			$('#content-' + i).css('visibility', 'visible');
		}, 0.5*1000);
	});

	//Click Close button
	$('.btn-close-slide').click(function(){
		$('#content-' + i).removeClass('show');
		$('#slider-' + i).removeClass('delay-before');
		$('#slider-' + i).addClass('delay-after');
		setTimeout(function(){
			$('#slider-' + i).removeClass('zoom-in');
			$('#content-' + i).css('visibility', 'hidden');
		}, 0.5 * 1000);
	});
});