@extends('layouts.web')

@section('content')
<section class="ftco-section bg-light" >
	<div class="container-xl" style="margin-top:-20px">
	<div class="row justify-content-center">
	<div class="col-md-12 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000">
	
				<div class="interaction-section">
		        <div class="cardinfo">
				<center><h4 class="mb-4"><b>Church Global Presence</b></h4></center>
				
					</div>

				</div>
				</div>
				
	</div>
	</div>
	</section>
<section class="ftco-section bg-light" >
	<div class="container-xl" style="margin-top:-300px">
	
	<div class="row" style="margin-top:-60px">
	<div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
  <br>
   <div id="map"></div>

   <script>
        function initMap() {
            // Create a map centered at Nairobi, Kenya
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -1.2159528014982777, lng: 36.83345640901579 }, // Nairobi, Kenya
                zoom: 3,
            });

            // Array of locations with title and details 24.83511535053359, 67.06884437813625
            const locations = [
                @foreach($locations as $location)
                {
                    lat: {{ $location->latitude }},
                    lng: {{ $location->longitude }},
                    title: {!! json_encode($location->name) !!},
                    details: {!! json_encode($location->address) !!}
                },
            @endforeach
            ];

            // Create markers for each location
            locations.forEach(location => {
                const marker = new google.maps.Marker({
                    position: { lat: location.lat, lng: location.lng },
                    map: map,
                    title: location.title,
                });

                // Create an info window with details for each marker
                const infoWindow = new google.maps.InfoWindow({
                    content: `<strong>${location.title}</strong><br>${location.details}`,
                });

                // Open info window when marker is clicked
                marker.addListener('click', () => {
                    infoWindow.open(map, marker);
                });
            });
        }
    </script>
			
	</div>
	</div>
	</section>

@endsection
