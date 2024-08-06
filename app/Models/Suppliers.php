<?php

namespace App\Models;

use CodeIgniter\Model;

class Suppliers extends Model
{
    protected $table      = 'suppliers';
    protected $primaryKey = 'Suppliers_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Suppliers_name', 
        'Suppliers_email', 
        'Suppliers_phone', 
        'Suppliers_address', 
        'Suppliers_document', 
        'Document_type_fk', 
        'User_fk', 
        'Subscriber_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Suppliers_name' => 'required|max_length[255]',
        'Suppliers_email' => 'required|valid_email|max_length[100]',
        'Suppliers_phone' => 'required|max_length[20]',
        'Suppliers_address' => 'required|max_length[255]',
        'Suppliers_document' => 'required|max_length[50]',
        'Document_type_fk' => 'required|is_natural_no_zero',
        'User_fk' => 'required|is_natural_no_zero',
        'Subscriber_fk' => 'required|is_natural_no_zero'
    ];

    protected $validationMessages = [
        'Suppliers_name' => [
            'required' => 'El nombre del proveedor es obligatorio',
            'max_length' => 'El nombre del proveedor no puede exceder los 255 caracteres'
        ],
        'Suppliers_email' => [
            'required' => 'El correo electrónico del proveedor es obligatorio',
            'valid_email' => 'El correo electrónico del proveedor debe ser válido',
            'max_length' => 'El correo electrónico del proveedor no puede exceder los 100 caracteres'
        ],
        'Suppliers_phone' => [
            'required' => 'El teléfono del proveedor es obligatorio',
            'max_length' => 'El teléfono del proveedor no puede exceder los 20 caracteres'
        ],
        'Suppliers_address' => [
            'required' => 'La dirección del proveedor es obligatoria',
            'max_length' => 'La dirección del proveedor no puede exceder los 255 caracteres'
        ],
        'Suppliers_document' => [
            'required' => 'El documento del proveedor es obligatorio',
            'max_length' => 'El documento del proveedor no puede exceder los 50 caracteres'
        ],
        'Document_type_fk' => [
            'required' => 'El tipo de documento es obligatorio',
            'is_natural_no_zero' => 'El tipo de documento debe ser un número natural no cero'
        ],
        'User_fk' => [
            'required' => 'El ID del usuario es obligatorio',
            'is_natural_no_zero' => 'El ID del usuario debe ser un número natural no cero'
        ],
        'Subscriber_fk' => [
            'required' => 'El ID del suscriptor es obligatorio',
            'is_natural_no_zero' => 'El ID del suscriptor debe ser un número natural no cero'
        ]
    ];
}
