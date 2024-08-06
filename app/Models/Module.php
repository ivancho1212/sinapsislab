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

    protected $useTtimestamps = true;
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
            'required' => 'The module name is required.',
            'max_length' => 'The module name cannot exceed 30 characters.'
        ],
        'Module_icons' => [
            'required' => 'The module icon is required.',
            'max_length' => 'The module icon cannot exceed 10 characters.'
        ],
        'Module_route' => [
            'required' => 'The module route is required.',
            'max_length' => 'The module route cannot exceed 20 characters.'
        ],
        'Module_major' => [
            'required' => 'The module major flag is required.',
            'boolean' => 'The module major flag must be a boolean value.'
        ],
        'Module_sub' => [
            'integer' => 'The module sub must be an integer.'
        ],
        'Module_description' => [
            'max_length' => 'The module description cannot exceed 100 characters.'
        ],
    ];

    protected $skipValidation = false;
}
