<?php

namespace App\Models;

use CodeIgniter\Model;

class Packing extends Model
{
    protected $table      = 'packing';
    protected $primaryKey = 'Packing_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Packing_name',
        'Packing_description',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'Packing_name' => 'required|string|max_length[20]',
        'Packing_description' => 'permit_empty|string|max_length[100]',
    ];

    protected $validationMessages = [
        'Packing_name' => [
            'required' => 'The packing name is required.',
            'string' => 'The packing name must be a string.',
            'max_length' => 'The packing name cannot exceed 20 characters.',
        ],
        'Packing_description' => [
            'string' => 'The packing description must be a string.',
            'max_length' => 'The packing description cannot exceed 100 characters.',
        ],
    ];

    protected $skipValidation = false;
}
