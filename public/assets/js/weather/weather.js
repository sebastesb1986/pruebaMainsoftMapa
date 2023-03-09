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
        $(".humidity").html(`<b>${wth.humidity}%</b>`);

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
            
            console.log(response.success);
            
        })
        .catch(error => {
            // handle error
            console.log(error);
        });

    });
    
    
});
