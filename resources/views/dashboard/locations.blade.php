
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">


    <button class="btn btn-success">Locations</button>

</div>
<div class="col-md-4 col-md-4">



</div>
<div class="col-md-4 col-md-4">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaladd">
  <span class="glyphicon glyphicon-add">Add</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      
      <form class="row g-3" id="locationdetails">
              <input type="hidden" name="_token" required="required" value="{{ csrf_token() }}">
                
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Church Location</label>
                  <input type="text" class="form-control" id="clocation" required="required" name="clocation">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Direction</label>
                  <input type="text" class="form-control" id="cdirection" required="required" name="cdirection">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">URL Direction</label>
                  <input type="text" class="form-control" id="curldirection" required="required" name="curldirection">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Latitude</label>
                  <input type="text" class="form-control" id="latitude" required="required" name="latitude">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Longitude</label>
                  <input type="text" class="form-control" id="longitude" required="required" name="longitude">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Country</label>
                  <select  class="form-control" id="audiolanguage" name="audiolanguage">
                  <option value="Kenya">Kenya</option>
                  <option value="America">America</option>
                  </select>
                </div>
             
             <br>
                <div class="modal-footer">
                <button class="btn btn-primary">Submit</button>
               </div> 
              </form>
                
      </div>
    
    </div>
  </div>
</div>

</div>
</div>  
<br>
<div class="row">
  <div id="map" style="height: 400px;"></div>

  <script>
      function initMap() {
          // Create a map object
          var map = new google.maps.Map(document.getElementById('map'), {
              center: { lat: -1.2159528014982777, lng: 36.83345640901579 },
              zoom: 2
          });

          // Define multiple locations with details 17.4212503611111, 78.4999655489697
          var locations = [
            @foreach($locations as $location)
                {
                    lat: {{ $location->latitude }},
                    lng: {{ $location->longitude }},
                    title: {!! json_encode($location->name) !!},
                    details: {!! json_encode($location->address) !!}
                },
            @endforeach
          
          ];

          // Loop through the locations and add markers with infowindows
          locations.forEach(function(location) {
              var marker = new google.maps.Marker({
                  position: { lat: location.lat, lng: location.lng },
                  map: map,
                  title: location.title
              });

              var infowindow = new google.maps.InfoWindow({
                  content: '<div><strong>' + location.title + '</strong><br>' + location.details + '</div>'
              });

              marker.addListener('click', function() {
                  infowindow.open(map, marker);
              });
          });
      }
  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPcXmbNTlOL6p0YwNIpfkZM9xxMn6Vex0&callback=initMap" async defer></script>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
