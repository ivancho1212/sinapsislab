<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyType extends Model
{
    protected $table      = 'company_type';
    protected $primaryKey = 'Company_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Company_type_name', 'Company_type_code', 'Company_type_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'Company_type_name' => 'required|max_length[50]',
        'Company_type_code' => 'required|max_length[20]',
        'Company_type_description' => 'permit_empty|string'
    ];

    protected $validationMessages = [
        'Company_type_name' => [
            'required' => 'Company type name is required.',
            'max_length' => 'Company type name cannot exceed 50 characters.'
        ],
        'Company_type_code' => [
            'required' => 'Company type code is required.',
            'max_length' => 'Company type code cannot exceed 20 characters.'
        ],
        'Company_type_description' => [
            'string' => 'Company type description must be a valid string.'
        ]
    ];
}
