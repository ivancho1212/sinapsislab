<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'Products_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Products_name',
        'Products_description',
        'Products_price',
        'Product_type_fk',
        'Packing_fk',
        'Brand_fk',
        'Unit_measurement_fk',
        'Product_status_fk',
        'Suppliers_fk',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'Products_name' => 'required|string|max_length[35]',
        'Products_description' => 'required|string|max_length[100]',
        'Products_price' => 'required|integer',
        'Product_type_fk' => 'required|integer',
        'Packing_fk' => 'required|integer',
        'Brand_fk' => 'required|integer',
        'Unit_measurement_fk' => 'required|integer',
        'Product_status_fk' => 'required|integer',
        'Suppliers_fk' => 'required|integer',
    ];

    protected $validationMessages = [
        'Products_name' => [
            'required' => 'The product name is required.',
            'string' => 'The product name must be a string.',
            'max_length' => 'The product name cannot exceed 35 characters.',
        ],
        'Products_description' => [
            'required' => 'The product description is required.',
            'string' => 'The product description must be a string.',
            'max_length' => 'The product description cannot exceed 100 characters.',
        ],
        'Products_price' => [
            'required' => 'The product price is required.',
            'integer' => 'The product price must be an integer.',
        ],
        'Product_type_fk' => [
            'required' => 'The product type is required.',
            'integer' => 'The product type must be an integer.',
        ],
        'Packing_fk' => [
            'required' => 'The packing is required.',
            'integer' => 'The packing must be an integer.',
        ],
        'Brand_fk' => [
            'required' => 'The brand is required.',
            'integer' => 'The brand must be an integer.',
        ],
        'Unit_measurement_fk' => [
            'required' => 'The unit measurement is required.',
            'integer' => 'The unit measurement must be an integer.',
        ],
        'Product_status_fk' => [
            'required' => 'The product status is required.',
            'integer' => 'The product status must be an integer.',
        ],
        'Suppliers_fk' => [
            'required' => 'The suppliers is required.',
            'integer' => 'The suppliers must be an integer.',
        ],
    ];

    protected $skipValidation = false;
}
