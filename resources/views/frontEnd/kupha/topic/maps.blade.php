@if(config('roqay.google_maps_key') !== "")
    @if($Topic->maps->isNotEmpty())
        <div class="row mb-4">
            <div class="col-lg-12">
                <h3 class="mb-3">{{ __('frontend.locationMap') }}</h3>
                <div id="google-map" class="mb-3" style="height: 400px; width: 100%;"></div>
            </div>
        </div>
        <?php
        $map = $Topic->maps->first();
        $MapCenter = "$map->longitude, $map->latitude";
        $map_title_var = "title_" . @Helper::currentLanguage()->code;
        $map_details_var = "details_" . @Helper::currentLanguage()->code;
        ?>
        @push('after-scripts')
            <script src="https://maps.google.com/maps/api/js?key={{ config('roqay.google_maps_key') }}&language={{ @Helper::currentLanguage()->code }}&callback=initGoogleMap" async defer></script>
            <script>
                var iconURLPrefix = "{{ asset('assets/dashboard/images/') }}/";
                var icons = [
                    iconURLPrefix + 'marker_0.png',
                    iconURLPrefix + 'marker_1.png',
                    iconURLPrefix + 'marker_2.png',
                    iconURLPrefix + 'marker_3.png',
                    iconURLPrefix + 'marker_4.png',
                    iconURLPrefix + 'marker_5.png',
                    iconURLPrefix + 'marker_6.png'
                ];

                var locations = [
                    @foreach($Topic->maps as $map)
                        ["<strong>{{ $map->$map_title_var }}</strong><br>{{ $map->$map_details_var }}", {{ $map->longitude }}, {{ $map->latitude }}, {{ $map->id }}, {{ $map->icon }}],
                    @endforeach
                ];

                function initGoogleMap() {
                    var map = new google.maps.Map(document.getElementById('google-map'), {
                        zoom: 6,
                        center: new google.maps.LatLng({{ $MapCenter }}),
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        draggable: true,
                        scrollwheel: true
                    });

                    var infowindow = new google.maps.InfoWindow();
                    locations.forEach((location, i) => {
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(location[1], location[2]),
                            icon: icons[location[4]],
                            map: map
                        });

                        marker.addListener('click', function() {
                            infowindow.setContent(location[0]);
                            infowindow.open(map, marker);
                        });
                    });
                }
            </script>
        @endpush
    @endif
@endif
