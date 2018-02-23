<!-- SLIDERS -->
	<script type="text/javascript" src="slick/slick.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>

	<script>
		$('#heroic-slider').slick({
			autoplay: true,
			autoplaySpeed: 12000,
			dots: true,
			arrows: false,
			infinite: true,
			slidesToShow: 1,
			speed: 500,
			fade: false,
			cssEase: 'ease-out',
			slidesToScroll: 1,
			adaptiveHeight: true,
			pauseOnHover: false,
			swipeToSlide: true,
			responsive: [{
					breakpoint: 770,
					settings: {
							autoplay: true,
							arrows: false
					}
				}]
		});

		/*$('#website-container').slick({
			autoplay: true,
			arrows: false,
			autoplaySpeed: 5000,
			cssEase: 'ease-in-out',
			infinite: true,
			slidesToShow: 1,
			speed: 1000,
			pauseOnHover: true,
			swipeToSlide: true,
			responsive: [
			{
				breakpoint: 99999,
				settings: {
					unslick: true
				},
				breakpoint: 480,
				settings: {
					unslick: false
				}
			}]
		});*/
	</script>
<!-- END OF SLIDERS -->

<!-- PULSE THAT THING -->
	<style>
		.fade-in {
			opacity: 1;
	-webkit-transition: 4s; /* Safari */
			transition: 4s;
		}
		.fade-down {
			opacity: 0.5!important;
	-webkit-transition: 4s; /* Safari */
			transition: 4s;
		}
	</style>
	<script>
		//PULSE THAT THING

		function PulseThatThing( element ) {

			if ( !element ) {
				console.log( "No Element to PulseThatThing" );
				return;
			
			} else {

				if ( element.className.match(/pulsable/) ) {

					setTimeout( function() {

						element.classList.toggle("fade-in");

						//numberPulses = 10;

						//for ( var n = 0; n < numberPulses; n++) {

						//	setTimeout( function() {

						//		fade down lowers opacity
						//		element.classList.toggle("fade-down");
						//			console.log( 'timeout fade down' );
						//		fade in turns off allowing fade down to take effect
						//		element.classList.toggle("fade-in");
						//			console.log( 'timeout fade in' );

						//	}, 4000 );
						//	setTimeout( function() {

						//		fade in highers opacity
						//		element.classList.toggle("fade-in");
						//			console.log( 'timeout 2 fade in' );
						//		fade down is turned off allowing fade in
						//		element.classList.toggle("fade-down");
						//			console.log( 'timeout 2 fade down' );

						//	}, 4000 );

						//}
						
					}, 8000 );

				} else {

					console.log( 'pulsable class is not applied' );

				}

			}

		};

		( function(){

			var pulsableList = document.querySelectorAll( '.pulsable' );

			if ( pulsableList.length > 0 ) {
				//console.log( pulsableList );

				for ( var n = 0; n < pulsableList.length ; n++ ) {

					var pulsableThis = pulsableList[n];
					//console.log( pulsableThis );

					PulseThatThing( pulsableThis );
				}

			} else {

				console.log('You aint got no length!');
			}

		})();

	</script>
<!-- END OF PULSE THAT THING -->

<!-- SHOW THIS DIV -->
	<style>
		.show-this-div {
			display: block!important;

			visibility: 1;

			opacity: 1!important;
			transition: 0.9s;
	-webkit-transition: 0.9s;

			z-index: 9;
		}
	</style>
	<script>

		function ClickThisLink( element ) {
		console.log( "we are in!" );

			console.log( element );

			//hide current
			var notThisDivAnymore = document.getElementsByClassName( "show-this-div" )[0];
			console.log( notThisDivAnymore );

			if ( notThisDivAnymore ) {

				//setTimeout(function(){ 
					notThisDivAnymore.classList.toggle( "show-this-div" );
					console.log( notThisDivAnymore );
				//}, 1500);

			} else {
				console.log( "There is not an element with show-this-div applied " );	
			}

			element = element.toString();
			console.log( element );
			var divToShow = document.getElementById( element );
			if ( divToShow ) {

				setTimeout(function(){ 
					divToShow.classList.toggle( "show-this-div" );
					console.log( divToShow );
				}, 100);

			} else {
				console.log( "There is no element to apply show-this-div too" );	
			}
			
		}; 

		( function(){

			var navLinkList = document.querySelectorAll( '.nav-top .nav-item a' );
			console.log( navLinkList );

			if ( navLinkList ) {
			console.log( "navLinkList has length - loop through it" );

				//for each of the links present 
				for ( var n = 0; n < navLinkList.length; n++ ) {
				console.log( "loop" );

					var thisDiv = navLinkList[n];
						console.log( thisDiv );
					thisDiv = thisDiv.classList[0];
						console.log( navLinkList );

					//listen to each link for a click
					navLinkList[n].addEventListener( "click", ClickThisLink.bind( this, thisDiv ), false);

				}

			} else {

				console.log( 'You aint got no length!' );
			}

		})();

	</script>
<!-- END OF SHOW THIS DIV -->