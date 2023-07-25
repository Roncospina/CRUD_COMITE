<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $nivel_formacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Ficha[] $fichas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programa extends Model
{
    protected $table = 'programa';
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'nivel_formacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','nivel_formacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichas()
    {
        return $this->hasMany('App\Ficha', 'gru_programa', 'id');
    }
    public function aprendices()
    {
        return $this->hasMany(Aprendice::class, 'programa_formacion');
    }
    

}
