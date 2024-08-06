<?php

namespace App\Models;

use CodeIgniter\Model;

class Permissions extends Model
{
    protected $table      = 'permissions';
    protected $primaryKey = 'Permissions_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Permissions_name', 
        'Permissions_description'
    ];

    protected $useTimestamps = true;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';
    protected $deletedField   = 'deleted_at';

    protected $validationRules = [
        'Permissions_name' => 'required|string|max_length[20]',
        'Permissions_description' => 'permit_empty|string|max_length[20]',
    ];

    protected $validationMessages = [
        'Permissions_name' => [
            'required' => 'The permissions name is required.',
            'string' => 'The permissions name must be a string.',
            'max_length' => 'The permissions name cannot exceed 20 characters.',
        ],
        'Permissions_description' => [
            'string' => 'The permissions description must be a string.',
            'max_length' => 'The permissions description cannot exceed 20 characters.',
        ],
    ];

    protected $skipValidation = false;
}
