<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductStatus extends Model
{
    protected $table      = 'product_status';
    protected $primaryKey = 'Product_status_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Product_status_name',
        'Product_status_description',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'Product_status_name' => 'required|string|max_length[20]',
        'Product_status_description' => 'permit_empty|string|max_length[100]',
    ];

    protected $validationMessages = [
        'Product_status_name' => [
            'required' => 'The product status name is required.',
            'string' => 'The product status name must be a string.',
            'max_length' => 'The product status name cannot exceed 20 characters.',
        ],
        'Product_status_description' => [
            'string' => 'The product status description must be a string.',
            'max_length' => 'The product status description cannot exceed 100 characters.',
        ],
    ];

    protected $skipValidation = false;
}
