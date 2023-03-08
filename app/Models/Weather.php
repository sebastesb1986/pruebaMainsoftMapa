<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    // Campos tabla weatherSearch
    protected $table = "weathersearchs";
    protected $fillable = [ 'name', 'humidity', 'country', 'latitude', 'longitude'];
}
