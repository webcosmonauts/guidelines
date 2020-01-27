@extends('admin.layouts.main')

@section('content')
    <div class="columns">
        <div class="column">
            <form action="#" method="POST" novalidate>
                @csrf
                @if($edit) @method('PUT') @endif

                <div class="field">
                    <label class="label" for="name">Route name</label>
                    <div class="control">
                        <input class="input" name="name" required>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label class="label" for="poi[name][]">POI name</label>
                            <div class="control">
                                <input class="input" name="poi[name][]" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label" for="poi[lat][]">POI latitude</label>
                            <div class="control">
                                <input class="input" name="poi[lat][]" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label class="label" for="poi[long][]">POI longitude</label>
                            <div class="control">
                                <input class="input" name="poi[long][]" required readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="button is-primary is-outlined">
                    <span class="icon"><i class="fas fa-save"></i></span>
                    <span>Save</span>
                </button>
            </form>
        </div>
        <div class="column">
            <div style="height: 70vh;" id="map"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var map, infoWindow, directionsDisplay, directionsService, pois = [];

        function initMap() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            directionsService = new google.maps.DirectionsService();
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 51.109856, lng: 17.033198},
                zoom: 15,
            });

            directionsDisplay.setMap(map);

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    map.setCenter({
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    });
                    map.setZoom(14);
                });
            }
        }

        function calcRoute() {
            let start = new google.maps.LatLng(41.850033, -87.6500523);
            let end = new google.maps.LatLng(37.3229978, -122.0321823);

            let request = {
                origin: start,
                destination: end,
                travelMode: 'DRIVING'
            };

            directionsService.route(request, function(response, status) {
                if(status == 'OK') {
                    console.log(response, status);
                    directionsDisplay.setDirections(response);
                } else {
                    console.log(response, status);
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('googlemaps.key') }}&callback=initMap&libraries=places"></script>
@endpush
