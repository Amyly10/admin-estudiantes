<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\materiasController;

class materiasModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Creditos', 'Nombre',
        'Profesor', 'Turno',
        'Disponible'    ];
}
