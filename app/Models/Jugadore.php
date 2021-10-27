<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jugadore
 *
 * @property $id
 * @property $equipos_id
 * @property $user_id
 * @property $nombre
 * @property $apellidos
 * @property $nick
 * @property $edad
 * @property $sexo
 * @property $telefono
 * @property $email
 * @property $ciudadnac
 * @property $ciudadres
 * @property $estudiante
 * @property $escuela
 * @property $profesion
 * @property $hoby
 * @property $foto
 * @property $ficha
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Jugadore extends Model
{
    
    static $rules = [
		'equipos_id' => 'required',
		'user_id' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'nick' => 'nullable',
		'edad' => 'required',
		'sexo' => 'required',
        'estatura' => 'nullable',
        'num' => 'nullable',
		'telefono' => 'nullable',
		'email' => 'nullable',
		'ciudadnac' => 'required',
		'ciudadres' => 'required',
		'estudiante' => 'required',
		'escuela' => 'required',
		'profesion' => 'nullable',
		'hoby' => 'nullable',
		'foto' => 'nullable',
		'ficha' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipos_id','user_id','nombre','apellidos','nick','edad','sexo','telefono','email','ciudadnac','ciudadres','estudiante','escuela','profesion','hoby','foto','ficha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'equipos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
