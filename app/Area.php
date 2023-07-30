<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Instructore[] $instructores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{

  static $rules = [
    'nombre' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function instructores()
  {
    return $this->hasMany('App\Instructore', 'area_id', 'id');
  }
}
