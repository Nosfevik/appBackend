<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calle
 *
 * @property $id
 * @property $descripcion
 * @property $region_id
 * @property $provincia_id
 * @property $ciudad_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calle extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['descripcion', 'region_id', 'provincia_id', 'ciudad_id'];


}
