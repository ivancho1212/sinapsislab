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
        'Module_role_name' => 'required|integer|max_length[11]',
        'Module_fk'        => 'required|integer|max_length[11]',
        'Role_fk'          => 'required|integer|max_length[11]',
    ];

    protected $validationMessages = [
        'Module_role_name' => [
            'required'   => 'The module role name is required.',
            'integer'    => 'The module role name must be an integer.',
            'max_length' => 'The module role name cannot exceed 11 characters.'
        ],
        'Module_fk' => [
            'required'   => 'The module foreign key is required.',
            'integer'    => 'The module foreign key must be an integer.',
            'max_length' => 'The module foreign key cannot exceed 11 characters.'
        ],
        'Role_fk' => [
            'required'   => 'The role foreign key is required.',
            'integer'    => 'The role foreign key must be an integer.',
            'max_length' => 'The role foreign key cannot exceed 11 characters.'
        ],
    ];

    protected $skipValidation = false;
}
