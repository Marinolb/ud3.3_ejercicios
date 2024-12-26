<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email'];

    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'notas', 'alumno_id', 'asignatura_id')
                    ->withPivot('nota'); 
    }

    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'usuario_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'usuario_id');
    }
}
