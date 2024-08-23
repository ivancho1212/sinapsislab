<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductType extends Model
{
    protected $table      = 'product_type';
    protected $primaryKey = 'Product_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Product_type_name',
        'Product_type_description',
    ];

    protected $useTimestamps = true; // Corregido aquí
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'Product_type_name' => 'required|string|max_length[20]',
        'Product_type_description' => 'permit_empty|string|max_length[100]',
    ];

    protected $validationMessages = [
        'Product_type_name' => [
            'required' => 'The product type name is required.',
            'string' => 'The product type name must be a string.',
            'max_length' => 'The product type name cannot exceed 20 characters.',
        ],
        'Product_type_description' => [
            'string' => 'The product type description must be a string.',
            'max_length' => 'The product type description cannot exceed 100 characters.',
        ],
    ];

    protected $skipValidation = false;
}
