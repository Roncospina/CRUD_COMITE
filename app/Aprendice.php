<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprendice
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $documento
 * @property $correo
 * @property $telefono
 * @property $antecedentes
 * @property $programa_formacion
 * @property $direccion
 * @property $ficha_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ficha $ficha
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aprendice extends Model
{

  static $rules = [
    'nombres' => 'required',
    'apellidos' => 'required',
    'documento' => 'required',
    'correo' => 'required',
    'telefono' => 'required',
    'antecedentes' => 'required',
    'programa_formacion' => 'required',
    'direccion' => 'required',
    'ficha_id' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombres', 'apellidos', 'documento', 'correo', 'telefono', 'antecedentes', 'programa_formacion', 'direccion', 'ficha_id'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function ficha()
  {
    return $this->belongsTo(Ficha::class, 'ficha_id');
  }

  public function programa()
  {
    return $this->belongsTo(Programa::class, 'programa_formacion');
  }
}
