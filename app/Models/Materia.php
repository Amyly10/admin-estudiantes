<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $Creditos
 * @property $Nombre
 * @property $Profesor
 * @property $Turno
 * @property $Disponible
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'Creditos' => 'required',
		'Nombre' => 'required',
		'Profesor' => 'required',
		'Turno' => 'required',
		'Disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Creditos','Nombre','Profesor','Turno','Disponible'];



}
