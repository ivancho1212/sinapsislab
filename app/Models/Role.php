<?php

namespace App\Models;

use CodeIgniter\Model;

class Role extends Model
{
    protected $table      = 'role';
    protected $primaryKey = 'Role_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Role_name', 
        'Role_description', 
        'Company_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Role_name' => 'required|max_length[50]',
        'Role_description' => 'permit_empty|max_length[255]',
        'Company_fk' => 'required|is_natural_no_zero'
    ];

    protected $validationMessages = [
        'Role_name' => [
            'required' => 'El nombre del rol es obligatorio',
            'max_length' => 'El nombre del rol no puede exceder los 50 caracteres'
        ],
        'Role_description' => [
            'max_length' => 'La descripción del rol no puede exceder los 255 caracteres'
        ],
        'Company_fk' => [
            'required' => 'El ID de la empresa es obligatorio',
            'is_natural_no_zero' => 'El ID de la empresa debe ser un número natural no cero'
        ]
    ];
}
