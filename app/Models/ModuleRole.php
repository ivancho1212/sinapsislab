<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuleRole extends Model
{
    protected $table      = 'module_role';
    protected $primaryKey = 'Module_role_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Module_role_name', 
        'Module_fk', 
        'Role_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';
    protected $deletedField   = 'deleted_at';

    protected $validationRules = [
        'Module_role_name' => 'required|string|max_length[100]',
        'Module_fk'        => 'required|integer',
        'Role_fk'          => 'required|integer',
    ];

    protected $validationMessages = [
        'Module_role_name' => [
            'required'   => 'El nombre del rol del módulo es obligatorio.',
            'string'     => 'El nombre del rol del módulo debe ser una cadena de caracteres.',
            'max_length' => 'El nombre del rol del módulo no puede exceder los 100 caracteres.'
        ],
        'Module_fk' => [
            'required'   => 'La clave externa del módulo es obligatoria.',
            'integer'    => 'La clave externa del módulo debe ser un número entero.'
        ],
        'Role_fk' => [
            'required'   => 'La clave externa del rol es obligatoria.',
            'integer'    => 'La clave externa del rol debe ser un número entero.'
        ],
    ];

    protected $skipValidation = false;
}
