<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ficha
 *
 * @property $id
 * @property $no_ficha
 * @property $fecha_inicio_lectiva
 * @property $fecha_fin_lectiva
 * @property $fecha_inicio_productiva
 * @property $fecha_fin_productiva
 * @property $modalidad
 * @property $jornada
 * @property $gru_programa
 * @property $created_at
 * @property $updated_at
 *
 * @property Aprendice[] $aprendices
 * @property Programa $programa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ficha extends Model
{
    protected $attributes = [
        'gru_programa' => null, // Establece el valor predeterminado como nulo
    ];



    static $rules = [
        'no_ficha' => 'required',
        'fecha_inicio_lectiva' => 'required',
        'fecha_fin_lectiva' => 'required',
        'fecha_inicio_productiva' => 'required',
        'fecha_fin_productiva' => 'required',
        'modalidad' => 'required',
        'jornada' => 'required',
        'gru_programa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['no_ficha', 'fecha_inicio_lectiva', 'fecha_fin_lectiva', 'fecha_inicio_productiva', 'fecha_fin_productiva', 'modalidad', 'jornada', 'gru_programa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aprendices()
    {
        return $this->hasMany(Aprendice::class, 'ficha_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Programa', 'id', 'gru_programa');
    }
}
