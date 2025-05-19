<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'dni', 'departamento_id'];

    // Relación: Un empleado pertenece a un departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
