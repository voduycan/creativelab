$(function() {
	var i = 1;
	var n = pro;
	var curent = n;
	var near = i + 1;
	var flag = false;
	var click = false;
	console.log(pro);
	if(n > 1) {
		if(n === 2) {
			$('#previous').click(function(){
				if(!flag){
					click = true;
					flag = true;
					var t = i;
					i = curent;
					curent = t;
					
					
					$('#slider-' + curent).prop('class','slider');
					$('#slider-' + curent).css('visibility','hidden');
					$('#slider-' + curent).addClass('ani-title-to-right');
					$('#slider-' + curent).addClass('translate-right');

					$('#slider-' + i).prop('class','slider');
					$('#slider-' + i).css('visibility', 'visible');
					$('#slider-' + i).addClass('ani-title-left-to-center');
					$('#slider-' + i).addClass('left-to-center');
					
					setTimeout(function(){flag = false;}, 0.1*1000);
				}
			});

			var flag2 = false;

			//Click Next button
			$('#next').click(function(){
				if(!flag2){
					click = true;
					flag2 = true;
					var t = i;
					i = curent;
					curent = t;
					
					$('#slider-' + curent).prop('class','slider');
					$('#slider-' + curent).css('visibility','hidden');
					$('#slider-' + curent).addClass('ani-title-to-left');
					$('#slider-' + curent).addClass('translate-left');

					$('#slider-' + i).prop('class','slider');
					$('#slider-' + i).css('visibility', 'visible');
					$('#slider-' + i).addClass('ani-title-right-to-center');
					$('#slider-' + i).addClass('right-to-center');

					setTimeout(function(){flag2 = false;}, 0.1*1000);
				}
			});
		}
		// If n > 2
		else{
			
			//Click Previous button
			$('#previous').click(function(){
				if(!flag){
					click = true;
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
					$('#slider-' + curent).addClass('ani-title-to-right');
					$('#slider-' + curent).addClass('translate-right');

					$('#slider-' + i).prop('class','slider');
					$('#slider-' + i).css('visibility', 'visible');
					$('#slider-' + i).addClass('ani-title-left-to-center');
					$('#slider-' + i).addClass('left-to-center');
					
					
					setTimeout(function(){flag = false;}, 0.1*1000);
				}
			});

			var flag2 = false;

			//Click Next button
			$('#next').click(function(){
				if(!flag2){
					click = true;
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
					$('#slider-' + curent).addClass('ani-title-to-left');
					$('#slider-' + curent).addClass('translate-left');

					$('#slider-' + i).prop('class','slider');
					$('#slider-' + i).css('visibility', 'visible');
					$('#slider-' + i).addClass('ani-title-right-to-center');
					$('#slider-' + i).addClass('right-to-center');

					
					setTimeout(function(){flag2 = false;}, 0.1*1000);
				}
			});
		}
	}
	
	//Click Search button
	$('#zoom-detail').click(function(){
		click = false;
		$('.slide .zoom-in').removeClass('zoom-in');
		$('#slider-' + i).prop('class','slider');
		$('#slider-' + i).addClass('zoom-in');
		$('#slider-' + i).addClass('delay-before');
		setTimeout(function(){
			$('#content-' + i).addClass('show');
			$('#content-' + i).css('visibility', 'visible');
		}, 0.4 * 1000);
	});

	//Click Close button
	$('.btn-close-slide').click(function(){
		$('#content-' + i).removeClass('show');
		$('#slider-' + i).removeClass('delay-before');
		$('#slider-' + i).addClass('delay-after');
		setTimeout(function(){
			$('#slider-' + i).removeClass('zoom-in');
			$('#content-' + i).css('visibility', 'hidden');
		}, 0.3 * 1000);
	});

	//Scroll
	$(document).scroll(function(){
		if(click){
			$('.slider').prop('class','slider');
			click = false;
		}
	});

});