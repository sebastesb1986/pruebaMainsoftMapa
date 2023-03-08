<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Weather;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        // Lista de countrys a consultar
        $countrys = [
                    ["id" => "miami", "name" => "Miami"],
                    ["id" => "new york", "name" => "Nueva York"],
                    ["id" => "orlando", "name" => "Orlando"],
        ];

        return view('weather.index')->with(['countrys' => $countrys]);
    }

    public function store(Request $request)
    {
        // Datos obtenidos desde la vista para guardar la consulta de busqueda de countrys
        $data = [

            'name' => $request->name,
            'humidity' => $request->humidity,
            'country' => $request->country,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,

        ];

        // Creación del registro de busqueda de countrys
        $weather = Weather::create($data);

        if($weather){
            // Si cumple
            return response()->json(
                [
                    'success'=> 'Busqueda capturada exitosamente!',
                    'code'=>200
                ]);

        }
            
        else{
            // No cumple
            return response()->json([
                'error'=> 'Error al registrar la busqueda!',
                'code' => 500
            ]);
        }
        
    }

    public function searchList(Request $request)
    {
        // Lista de countrys a consultar
        $registers = Weather::select("name", "humidity", "country", "latitude", "longitude", "created_at")
                            ->get();

        return view('weather.list')->with(['registers' => $registers]);
    }
}
