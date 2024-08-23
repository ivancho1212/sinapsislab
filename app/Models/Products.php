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
        'Products_name_large', // Agregado
        'Products_description',
        'Products_price_net', // Modificado
        'Products_price_gross', // Modificado
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
        'Products_name_large' => 'required|string|max_length[55]', // Agregado
        'Products_description' => 'required|string|max_length[100]',
        'Products_price_net' => 'required|integer', // Modificado
        'Products_price_gross' => 'required|integer', // Modificado
        'Product_type_fk' => 'required|integer',
        'Packing_fk' => 'required|integer',
        'Brand_fk' => 'required|integer',
        'Unit_measurement_fk' => 'required|integer',
        'Product_status_fk' => 'required|integer',
        'Suppliers_fk' => 'required|integer',
    ];

    protected $validationMessages = [
        'Products_name' => [
            'required' => 'El nombre del producto es obligatorio.',
            'string' => 'El nombre del producto debe ser una cadena.',
            'max_length' => 'El nombre del producto no puede exceder los 35 caracteres.',
        ],
        'Products_name_large' => [
            'required' => 'El nombre largo del producto es obligatorio.',
            'string' => 'El nombre largo del producto debe ser una cadena.',
            'max_length' => 'El nombre largo del producto no puede exceder los 55 caracteres.',
        ],
        'Products_description' => [
            'required' => 'La descripción del producto es obligatoria.',
            'string' => 'La descripción del producto debe ser una cadena.',
            'max_length' => 'La descripción del producto no puede exceder los 100 caracteres.',
        ],
        'Products_price_net' => [
            'required' => 'El precio neto del producto es obligatorio.',
            'integer' => 'El precio neto del producto debe ser un entero.',
        ],
        'Products_price_gross' => [
            'required' => 'El precio bruto del producto es obligatorio.',
            'integer' => 'El precio bruto del producto debe ser un entero.',
        ],
        'Product_type_fk' => [
            'required' => 'El tipo de producto es obligatorio.',
            'integer' => 'El tipo de producto debe ser un entero.',
        ],
        'Packing_fk' => [
            'required' => 'El embalaje es obligatorio.',
            'integer' => 'El embalaje debe ser un entero.',
        ],
        'Brand_fk' => [
            'required' => 'La marca es obligatoria.',
            'integer' => 'La marca debe ser un entero.',
        ],
        'Unit_measurement_fk' => [
            'required' => 'La unidad de medida es obligatoria.',
            'integer' => 'La unidad de medida debe ser un entero.',
        ],
        'Product_status_fk' => [
            'required' => 'El estado del producto es obligatorio.',
            'integer' => 'El estado del producto debe ser un entero.',
        ],
        'Suppliers_fk' => [
            'required' => 'El proveedor es obligatorio.',
            'integer' => 'El proveedor debe ser un entero.',
        ],
    ];

    protected $skipValidation = false;
}
