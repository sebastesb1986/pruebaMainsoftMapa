@extends('layouts.principal')

@section('title', 'Weather')

@section('content')

    <h1>Consulta el clima</h1>

    <div class="form-group">
        <select class="form-control" name="weather" id="weather">
            <option value="">Seleccione</option>

            <!-- Obtenemos y recorremos country -->
            @foreach($countrys as $country)
                <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
            @endforeach
            

        </select>
    </div>

    <div class="form-group">
        <div class="table-responsive"> 
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Humedad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td class="humidity"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="form-group">
        <h3>Vista en el mapa</h3>
        <div id="map"></div>
    </div>

@stop

@push('styles')
    <!-- Style -->
    <style>
        #map {
            height: 400px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
        }
    </style>
@endpush

@push('scripts')

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfsVdq3KQnSucnfHcv3PK4mPmQXYN6PAc"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('assets/js/weather/weather.js') }}" type="text/javascript"></script>

@endpush

