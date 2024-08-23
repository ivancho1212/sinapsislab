<?php

namespace App\Models;

use CodeIgniter\Model;

class Module extends Model
{
    protected $table      = 'module';
    protected $primaryKey = 'Module_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Module_name', 
        'Module_icons', 
        'Module_route', 
        'Module_major', 
        'Module_sub', 
        'Module_description'
    ];

    protected $useTimestamps = true; // Corregido
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';
    protected $deletedField   = 'deleted_at';

    protected $validationRules = [
        'Module_name'        => 'required|max_length[30]',
        'Module_icons'       => 'required|max_length[10]',
        'Module_route'       => 'required|max_length[20]',
        'Module_major'       => 'required|boolean',
        'Module_sub'         => 'permit_empty|integer',
        'Module_description' => 'permit_empty|max_length[100]',
    ];

    protected $validationMessages = [
        'Module_name' => [
            'required' => 'El nombre del módulo es obligatorio.',
            'max_length' => 'El nombre del módulo no puede exceder los 30 caracteres.'
        ],
        'Module_icons' => [
            'required' => 'El icono del módulo es obligatorio.',
            'max_length' => 'El icono del módulo no puede exceder los 10 caracteres.'
        ],
        'Module_route' => [
            'required' => 'La ruta del módulo es obligatoria.',
            'max_length' => 'La ruta del módulo no puede exceder los 20 caracteres.'
        ],
        'Module_major' => [
            'required' => 'El indicador principal del módulo es obligatorio.',
            'boolean' => 'El indicador principal del módulo debe ser un valor booleano.'
        ],
        'Module_sub' => [
            'integer' => 'El sub-módulo debe ser un número entero.'
        ],
        'Module_description' => [
            'max_length' => 'La descripción del módulo no puede exceder los 100 caracteres.'
        ],
    ];

    protected $skipValidation = false;
}
