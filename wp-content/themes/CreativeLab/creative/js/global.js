$(function() {
	

  // Initialise Stellar.js
  //---------------------------------------------------
  
	var initStellar = (function() {
  	
	function initStellar() {
		$.stellar({
				
			// Refreshes parallax content on window load and resize
			responsive: true,

			// Set scrolling to be in either one or both directions
			horizontalScrolling: false,
			
			// Enable or disable the two types of parallax
			parallaxBackgrounds: true,
			
		});
	}

	initStellar();

	})();	
 
 
  // Toggle Menu
  //---------------------------------------------------
  
  var initMenu = (function() {
  
  var bodyEl = document.body,
		 content = document.querySelector( 'header nav' ),
		 openbtn = document.querySelector( '.icon-menu' ),
		  isOpen = false;

	function initMenu() {

		openbtn.addEventListener( 'click', toggleMenu );

		// close the menu element if the target is not the menu element or one of its descendants..
		bodyEl.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		if( isOpen ) {
			classie.remove( content, 'show' );
			
			if ($(window).width() < 767) { $("footer").css("display", "none"); }
		}
		else {
			classie.add( content, 'show' );
			
			
			if ($(window).width() < 767) { $("footer").css("display", "block"); }
		}
		isOpen = !isOpen;
	}
	
	initMenu();
		
	})();	
			
		
	// Modal Effects Codrop
  //---------------------------------------------------
  
	var initModal = (function() {

	function initModal() {

		[].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

			var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
				  close = modal.querySelector( '.md-close' ),
        overlay = document.querySelector( '.md-overlay' );	  

			function removeModal() {
				classie.remove( modal, 'md-show' );
			}
			
			function addModal() {
				classie.add( modal, 'md-show' );
			};

			     el.addEventListener( 'click', addModal )
			  close.addEventListener( 'click', removeModal );
			overlay.addEventListener( 'click', removeModal );

		});
	}
	
	initModal();

	})();
	
		
	// Waypoint Effect
  //---------------------------------------------------
  
	var initWaypoint = (function() {

		// cache and initialize some values
		var config = {
			// the scroller sections
			$sections  : $( '#main-story > section' ),
			// the navigation links
			$navlinks1 : $( '#main-story > nav > a' ),
			$navlinks2 : $( 'header > nav > a' ),
			// index of current link / section
			currentLink : 0,
			// the body element
			$body : $( 'html, body' ),
			// the body animation speed
			animspeed : 2000,
			// the body animation easing (jquery easing)
			animeasing : 'easeInOutQuint'
		};
	
		function initWaypoint() {
	
			// click on a navigation link: the body is scrolled to the position of the respective section
			
			config.$navlinks1.click(function (e) {
				e.preventDefault();
				dataslide = $(this).attr('href');
				scrollAnim( $(dataslide).offset().top );
    	});
			
			config.$navlinks2.click(function (e) {
				e.preventDefault();
				dataslide = $(this).attr('href');
				scrollAnim( $(dataslide).offset().top );			
    	});
			
			
			$('.next-btn').click(function (e) {
				e.preventDefault();
				dataslide = $(this).attr('href');
		    scrollAnim( $(dataslide).offset().top );
    	});
    	
	
			// 2 waypoints defined:
			// First one when we scroll down: the current navigation link gets updated. A "new section" is reached when it occupies more than 70% of the viewport
			// Second one when we scroll up: the current navigation link gets updated. A "new section" is reached when it occupies more than 70% of the viewport
			config.$sections.waypoint( function( direction ) {
				if( direction === 'down' ) { changeNav( $( this ) ); }
			}, { offset: '30%' } );
			
			config.$sections.waypoint( function( direction ) {
				if( direction === 'up' ) { changeNav( $( this ) ); }
			}, { offset: '-30%' } );
			
			if (navigator.userAgent.match(/iPhone|iPad|iPod\Android/i)) { /* Do nothing */ }
			else {
				
				// on window resize: the body is scrolled to the position of the current section
				$( window ).on( 'debouncedresize', function() {
					scrollAnim( config.$sections.eq( config.currentLink ).offset().top );
				} );					
			}

		}
	
		// update the current navigation link
		function changeNav( $section ) {
			config.$navlinks1.eq( config.currentLink ).removeClass( 'active' );
			config.$navlinks2.eq( config.currentLink ).removeClass( 'active' );
			config.currentLink = $section.index( 'section' );
			config.$navlinks1.eq( config.currentLink ).addClass( 'active' );
			config.$navlinks2.eq( config.currentLink ).addClass( 'active' );
		}
	
		// function to scroll / animate the body
		function scrollAnim( top ) {
			config.$body.stop().animate( { scrollTop : top }, config.animspeed, config.animeasing );
		}

		initWaypoint();
		
	})();
	
  
  // Content Fadein / Fadeout
	//---------------------------------------------------
	
  $(window).on("load",function() {
	  function fade(pageLoad) {
	    var windowTop=$(window).scrollTop(), windowBottom=(windowTop+$(window).innerHeight());
	    var min=0, max=1, threshold=0;
	    
	    $(".wrap *").each(function() {
	      /* Check the location of each desired element */
	      var objectHeight=$(this).outerHeight(), objectTop=$(this).offset().top, objectBottom=$(this).offset().top+objectHeight;
	      
	      /* Fade element in/out based on its visible percentage */
	      if (objectTop < windowTop) {
	        if (objectBottom > windowTop) {$(this).fadeTo(0,min+((max-min)*((objectBottom-windowTop)/objectHeight)));}
	        else if ($(this).css("opacity")>=min+threshold || pageLoad) {$(this).fadeTo(0,min);}
	      } else if (objectBottom > windowBottom) {
	        if (objectTop < windowBottom) {$(this).fadeTo(0,min+((max-min)*((windowBottom-objectTop)/objectHeight)));}
	        else if ($(this).css("opacity")>=min+threshold || pageLoad) {$(this).fadeTo(0,min);}
	      } else if ($(this).css("opacity")<=max-threshold || pageLoad) {$(this).fadeTo(0,max);}
	    });
	  } fade(true); //fade elements on page-load
	  $(window).scroll(function(){fade(false);}); //fade elements on scroll
	});
  
  
  // Detect Mobile
  //---------------------------------------------------
  
  if (navigator.userAgent.match(/iPhone|iPad|iPod|Android/i)) {
    //$('body').addClass('mobile');
  }
  
  
  // Validating Contact Form
	//---------------------------------------------------
     
  $('#contact').validate({
    rules: {
      "Full Name": {
        required: true,
        minlength: 2
      },
      "Company": {
        required: true,
        minlength: 2
      },
      "Email": {
        required: true,
        email: true
      },
      "Phone": {
        required: true,
        number: true
      },
      "Description": {
        required: true,
        minlength: 10
      }
    },

    messages: {
      "full-name": {
        required: "Come on, you have a name don't you?",
        minlength: "Your full name must consist of at least 2 characters."
      },
      "company": {
        required: "We would like to know your company name",
        minlength: "Your company name must consist of at least 2 characters."
      },
      "email": {
        required: "No email, no message."
      },
      "phone": {
        required: "We would like to have your phone number."
      },
      "message": {
        required: "You need to write something to send this form.",
        minlength: "Thats all? really?"
      }
    },

    submitHandler: function(form) {
	    
    	var jqxhr = $.ajax({
    		method: "POST",
				url: $(form).attr('action') || '/process.php',
				data: $(form).serialize()
    	})
    	
			.done(function() {
		    $('#contact :input').val('');
          	$('#success').fadeIn().delay(7000).fadeOut();
			})
		
			.fail(function() {
		    $('#contact :input').val('');
            $('#error').fadeIn().delay(7000).fadeOut();
			});
		
			return;
		
	  }

	});

});