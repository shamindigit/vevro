<?php include("header.php"); ?>

<div class="contact-wrapper">
	<section class="contact-banner" id="map" >
    <script>				    	
      function initMap() {

        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var styledMapType = new google.maps.StyledMapType(
            [
			  {
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#1d2c4d"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#8ec3b9"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#1a3646"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.country",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#4b6878"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.land_parcel",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#64779e"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.province",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#4b6878"
			      }
			    ]
			  },
			  {
			    "featureType": "landscape.man_made",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#334e87"
			      }
			    ]
			  },
			  {
			    "featureType": "landscape.natural",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#023e58"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#283d6a"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#6f9ba5"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#1d2c4d"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#023e58"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#3C7680"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#304a7d"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#98a5be"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#1d2c4d"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#2c6675"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      {
			        "color": "#255763"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#b0d5ce"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#023e58"
			      }
			    ]
			  },
			  {
			    "featureType": "transit",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#98a5be"
			      }
			    ]
			  },
			  {
			    "featureType": "transit",
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#1d2c4d"
			      }
			    ]
			  },
			  {
			    "featureType": "transit.line",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#283d6a"
			      }
			    ]
			  },
			  {
			    "featureType": "transit.station",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#3a4762"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#0e1626"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#007b89"
			      },
			      {
			        "visibility": "off"
			      },
			      {
			        "weight": 1.5
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#4e6d70"
			      }
			    ]
			  }
			],
            {name: 'Styled Map'});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 6.932891, lng: 79.843664,},
          zoom: 15,
          mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                    position: google.maps.ControlPosition.LEFT_BOTTOM
          },
          fullscreenControl: true,
          fullscreenControlOptions: {
              position: google.maps.ControlPosition.RIGHT_CENTER
          }
        });

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');

		  var myLatLng = {lat: 6.932891, lng: 79.843664};

		  var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Vevro'
		  });
			var center = map.getCenter();

			google.maps.event.addDomListener(window, 'resize', function() {
			    map.setCenter(center);
			});
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApndjD-ikp6kwvIcOulG06SI4uKTCI6nc&callback=initMap">
    </script>
	</section>
	<div class="contactus--content">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="section--headings">
						<h1 data-aos="fade-down" class="text-white text-green">Get in touch</h1>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="con--tpno">
							<h2 data-aos="fade-left" data-aos-duration="1500" data-aos-easing="linear"  data-aos-once="true" ><i class="fas fa-envelope"></i>hello@vevrodigital.com</h2>
							<h2 data-aos="fade-left" data-aos-duration="1500" data-aos-easing="linear"  data-aos-once="true" ><i class="fas fa-phone"></i>+94 (0) 112 321 852</h2>
						</div>
					</div>
				</div>
				<div class="row">
 					<div class="col">
						<div class="conLogo hidden-md-down">
							<img class="hvr-bounce-out" src="assets/images/vevrologo.png" alt="vevro-logo">
						</div>
					</div> 
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="con--soc--icon">
							<a href="https://www.facebook.com/VevroDigital/" class="icon--fb soc--icons animated infinite tada">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="#" class="icon--ins soc--icons animated infinite tada">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="https://www.linkedin.com/company/13593966/" class="icon--in soc--icons animated infinite tada">
								<i class="fab fa-linkedin-in"></i>
							</a>
							<a href="#" class="icon--yt soc--icons animated infinite tada">
								<i class="fab fa-youtube"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<!-- <div class="con--adrs--blob"></div> -->
						<div class="con--adrs">
							<h5 class="animated bounceInDown">Vevro Pvt.Ltd</h5>
							<h6 class="animated bounceInDown">25 <sup>th</sup> Floor, East Tower,<h6>
							<h6 class="animated bounceInDown">World Trade Centre,<h6>
							<h6 class="animated bounceInDown">Colombo, Sri Lanka<h6>
						</div>
					</div>
				</div>						
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>