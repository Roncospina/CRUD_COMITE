<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Instructore
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $documento
 * @property $correo
 * @property $telefono
 * @property $area
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Ficha[] $fichas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instructore extends Model
{

    static $rules = [
        'nombres' => 'required',
        'apellidos' => 'required',
        'documento' => 'required',
        'correo' => 'required',
        'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres', 'apellidos', 'documento', 'correo', 'telefono', 'area_id'];

    // ...

    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichas()
    {
        return $this->hasMany('App\Ficha', 'instructor_cargo', 'id');
    }
}
