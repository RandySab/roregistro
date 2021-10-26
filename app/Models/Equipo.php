<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $user_id
 * @property $nombre
 * @property $rama
 * @property $ciudad
 * @property $estado
 * @property $pais
 * @property $created_at
 * @property $updated_at
 *
 * @property Jugadore[] $jugadores
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'nombre' => 'required',
		'rama' => 'required',
		'ciudad' => 'required',
		'estado' => 'required',
		'pais' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','nombre','rama','ciudad','estado','pais'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jugadores()
    {
        return $this->hasMany('App\Models\Jugadore', 'equipos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
