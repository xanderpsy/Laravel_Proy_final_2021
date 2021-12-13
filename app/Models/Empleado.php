<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $nacimiento
 * @property $mail
 * @property $rfc
 * @property $ingreso
 * @property $nomina
 * @property $horario
 * @property $curp
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'nacimiento' => 'required',
		'mail' => 'required',
		'rfc' => 'required',
		'ingreso' => 'required',
		'nomina' => 'required',
		'horario' => 'required',
		'curp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','nacimiento','mail','rfc','ingreso','nomina','horario','curp'];



}
