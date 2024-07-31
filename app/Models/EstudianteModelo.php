<?php

namespace App\Models;

use CodeIgniter\Model;

class EstudianteModelo extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombre', 
        'matricula', 
        'curso', 
        'calificacion'];
}
