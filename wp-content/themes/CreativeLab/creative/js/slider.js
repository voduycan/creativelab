$(function() {
	var i = 1;
	var n = 4;
	var curent = n;
	var near = i + 1;
	var flag = false;

	$('#slider-' + curent).addClass('translate-left');
	$('#slider-' + near).addClass('translate-right');
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
			$('#slider-' + curent).css('visibility','hidden');
			$('#slider-' + curent).prop('class','slider');
			$('#slider-' + curent).addClass('translate-right');

			$('#slider-' + i).css('visibility', 'visible');
			$('#slider-' + i).prop('class','slider');
			$('#slider-' + i).addClass('translate-center-left');
			setTimeout(function(){
				$('#slider-' + i).addClass('to-left');
			}, 0.4*1000);

			$('#slider-' + near).prop('class','slider');
			$('#slider-' + near).addClass('translate-left');
			setTimeout(function(){flag = false;}, 0.6*1000);
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

			$('#slider-' + curent).css('visibility','hidden');
			$('#slider-' + curent).prop('class','slider');
			$('#slider-' + curent).addClass('translate-left');
			

			$('#slider-' + i).css('visibility', 'visible');
			$('#slider-' + i).prop('class','slider');
			$('#slider-' + i).addClass('translate-center-right');
			setTimeout(function(){
				$('#slider-' + i).addClass('to-right');
			}, 0.45*1000);

			$('#slider-' + near).prop('class','slider');
			$('#slider-' + near).addClass('translate-right');
			setTimeout(function(){flag2 = false;}, 0.6*1000);
		}
	});

	//Click Search button
	$('#zoom-detail').click(function(){
		$('.slide .zoom-in').removeClass('zoom-in');
		$('#slider-' + i).addClass('zoom-in');
		$('#slider-' + i).removeClass('delay');
		setTimeout(function(){
			$('#content-' + i).addClass('show');
			$('#content-' + i).css('visibility', 'visible');
		}, 0.45*1000);
	});

	//Click Close button
	$('.icon-close').click(function(){
		$('#content-' + i).removeClass('show');
		$('#slider-' + i).addClass('delay');
		setTimeout(function(){
			$('#slider-' + i).removeClass('zoom-in');
			$('#slider-' + i).removeClass('delay');
			$('#content-' + i).css('visibility', 'hidden');
		}, 0.4 * 1000);
	});
});