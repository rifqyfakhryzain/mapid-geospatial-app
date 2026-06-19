@extends('layouts.app')

@section('title', 'Interactive Map')
@section('description', 'Interactive Geospatial Map using MapLibre GL and OpenStreetMap')

@section('content')

    <x-navbar />

    <div class="max-w-6xl mx-auto px-6 py-10">

        <div class="mb-8">

            <h1 class="text-4xl md:text-5xl font-black">
                Interactive Geospatial Map
            </h1>

            <p class="mt-4 text-slate-600 max-w-2xl">
                Interactive spatial visualization built using
                MapLibre GL and OpenStreetMap.
            </p>

        </div>

        <div id="map" class="w-full h-[70vh] rounded-3xl border"></div>

        <div class="grid md:grid-cols-3 gap-4 mt-6">

            <div class="border rounded-2xl p-4">
                <h3 class="font-semibold">Markers</h3>
                <p class="text-sm text-slate-600 mt-2">
                    Bandung, Jakarta, dan Surabaya.
                </p>
            </div>

            <div class="border rounded-2xl p-4">
                <h3 class="font-semibold">LineString</h3>
                <p class="text-sm text-slate-600 mt-2">
                    Jalur Bandung menuju Jakarta.
                </p>
            </div>

            <div class="border rounded-2xl p-4">
                <h3 class="font-semibold">Polygon</h3>
                <p class="text-sm text-slate-600 mt-2">
                    Area visualisasi wilayah Bandung.
                </p>
            </div>

        </div>

    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const map = new window.maplibregl.Map({
                container: 'map',
                style: 'https://tiles.openfreemap.org/styles/bright',
                center: [107.6191, -6.9175],
                zoom: 5
            });

            map.addControl(
                new window.maplibregl.NavigationControl(),
                'top-right'
            );

            // Marker Bandung
            new window.maplibregl.Marker()
                .setLngLat([107.6191, -6.9175])
                .setPopup(
                    new window.maplibregl.Popup()
                    .setHTML('<strong>Bandung</strong>')
                )
                .addTo(map);

            // Marker Jakarta
            new window.maplibregl.Marker()
                .setLngLat([106.8456, -6.2088])
                .setPopup(
                    new window.maplibregl.Popup()
                    .setHTML('<strong>Jakarta</strong>')
                )
                .addTo(map);

            // Marker Surabaya
            new window.maplibregl.Marker()
                .setLngLat([112.7521, -7.2575])
                .setPopup(
                    new window.maplibregl.Popup()
                    .setHTML('<strong>Surabaya</strong>')
                )
                .addTo(map);

            map.on('load', () => {

                // =====================
                // LINESTRING
                // =====================

                map.addSource('route-line', {
                    type: 'geojson',
                    data: {
                        type: 'Feature',
                        geometry: {
                            type: 'LineString',
                            coordinates: [
                                [107.6191, -6.9175], // Bandung
                                [106.8456, -6.2088] // Jakarta
                            ]
                        }
                    }
                });

                map.addLayer({
                    id: 'route-line-layer',
                    type: 'line',
                    source: 'route-line',
                    paint: {
                        'line-color': '#2563eb',
                        'line-width': 4
                    }
                });

                // =====================
                // POLYGON
                // =====================

                map.addSource('bandung-area', {
                    type: 'geojson',
                    data: {
                        type: 'Feature',
                        geometry: {
                            type: 'Polygon',
                            coordinates: [
                                [
                                    [107.30, -6.70],
                                    [107.90, -6.70],
                                    [107.90, -7.20],
                                    [107.30, -7.20],
                                    [107.30, -6.70]
                                ]
                            ]
                        }
                    }
                });

                map.addLayer({
                    id: 'bandung-area-fill',
                    type: 'fill',
                    source: 'bandung-area',
                    paint: {
                        'fill-color': '#22c55e',
                        'fill-opacity': 0.3
                    }
                });

                map.addLayer({
                    id: 'bandung-area-outline',
                    type: 'line',
                    source: 'bandung-area',
                    paint: {
                        'line-color': '#16a34a',
                        'line-width': 2
                    }
                });

            });

        });
    </script>
@endpush
