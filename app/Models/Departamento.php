<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion'];

    // Relación: Un departamento tiene muchos empleados
    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
