@extends('layouts.principal')

@section('title', 'Historial')

@section('content')

    <h1>Busquedas recientes</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Humedad(%)</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Latitud</th>
                    <th>Longitud</th>
                    <th scope="col">Fecha de consulta</th>
                </tr>
            </thead>
            <tbody>
                <!-- Obtenemos y recorremos el registro de busqueda de countrys -->
                @forelse($registers as $key => $register)
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
        </table>
    </div>

@stop

