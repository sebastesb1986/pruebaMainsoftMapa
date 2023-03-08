<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Datos clima</title>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfsVdq3KQnSucnfHcv3PK4mPmQXYN6PAc"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.googlemap.js') }}"></script>
    <style>
        #map {
            height: 400px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
        }
    </style>

    </head>
    <body>
   
        <h1>Consulta el clima</h1>

        <select name="weather" id="weather">
            <option value="">Seleccione</option>

            <!-- Obtenemos y recorremos country -->
            @foreach($countrys as $country)
                <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
            @endforeach
            

        </select>

        <div>
            <table>
                <thead>
                    <th>Humedad</th>
                </thead>
                <tbody>
                    <td class="humidity"></td>
                </tbody>
            </table>
        </div>

        <div>
            <a href="{{ route('weather.list') }}" target="_blank">Ver registros de busqueda recientes</a>
        </div>

        <h3>Vista en el mapa</h3>
        <div id="map"></div>

    </body>
</html>

<script>

    $('#weather').on('change', function(e){

        let weather_val = e.target.value;

        // Rutas o url
        const ruta = `https://api.openweathermap.org/data/2.5/weather?q=${weather_val}&appid=67ca170edb34aa229ef41d9d49bac6d3`;
        const route = '/weather-store';

        $.get(ruta, (response) => {

            // Obtener humedad
            const wth = response.main;
            
            // Obtener coordenadas para el mapa
            const coord = response.coord;

            // Obtener country
            const coun = response.sys;

            // Agregar porcentaje de humedad del pais seleccionado
            $(".humidity").html(`${wth.humidity} %`);

           // Initialiar y agregar google maps
           $("#map").googleMap({
                zoom: 10, 
                coords: [coord.lat, coord.lon], 
                type: "ROADMAP"
            });

            // Guardar registros de busqueda
            let ajax_data = {

                name: response.name,
                humidity: wth.humidity,
                country: coun.country,
                latitude: coord.lat,
                longitude: coord.lon,

            };

            $.ajax({
                url: route,
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'POST',
                dataType: 'json',
                data: ajax_data,
            }).then(response => {
                
                console.log(response);
                
            })
            .catch(error => {
                // handle error
                console.log(error);
            });

        });
        
        
    });
    
</script>