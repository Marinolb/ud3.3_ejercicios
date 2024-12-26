<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'notas', 'asignatura_id', 'alumno_id')
                    ->withPivot('nota');
    }
}
