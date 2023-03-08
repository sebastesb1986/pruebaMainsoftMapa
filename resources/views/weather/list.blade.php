<!DOCTYPE html>
<html>
    <head>
        <title>Listado de busquedas</title>
    <style>
        td {
            text-align: center;
        }
    </style>

    </head>
    <body>
   
        <h1>Busquedas recientes</h1>

        <div>
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Humedad(%)</th>
                    <th>Pais</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Fecha de consulta</th>
                </thead>
                <tbody>
                    
                        <!-- Obtenemos y recorremos el registro de busqueda de countrys -->
                        @forelse($registers as $register)
                        <tr>
                            <td>{{ $register->name }}</td>
                            <td>{{ $register->humidity }}</td>
                            <td>{{ $register->country }}</td>
                            <td>{{ $register->latitude }}</td>
                            <td>{{ $register->longitude }}</td>
                            <td><b>{{ $register->created_at }}</b></td>
                        </tr>
                        @empty
                            <td><p>SIN REGISTROS A LA FECHA.</p></td>
                        @endforelse
                    
                </tbody>
            </table><br>

            <a href="{{ route('weather.index') }}">Realizar nueva busqueda</a>


        </div>

    </body>
</html>

