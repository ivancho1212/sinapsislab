<?php

namespace App\Models;

use CodeIgniter\Model;

class Customers extends Model
{
    protected $table      = 'customers';
    protected $primaryKey = 'Customers_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Cambia a 'object' si prefieres.
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Customers_name', 
        'Customers_email', 
        'Customers_phone', 
        'Customers_address', 
        'Customers_document', 
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
        'Customers_name' => 'required|max_length[20]',
        'Customers_email' => 'required|valid_email|max_length[35]',
        'Customers_phone' => 'required|max_length[15]',
        'Customers_address' => 'required|max_length[80]',
        'Customers_document' => 'required|max_length[11]',
        'Document_type_fk' => 'permit_empty|is_natural_no_zero',
        'User_fk' => 'permit_empty|is_natural_no_zero',
        'Subscriber_fk' => 'permit_empty|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Customers_name' => [
            'required' => 'El nombre del cliente es obligatorio.',
            'max_length' => 'El nombre del cliente no puede exceder los 20 caracteres.'
        ],
        'Customers_email' => [
            'required' => 'El correo electrónico del cliente es obligatorio.',
            'valid_email' => 'Debe proporcionar un correo electrónico válido.',
            'max_length' => 'El correo electrónico del cliente no puede exceder los 35 caracteres.'
        ],
        'Customers_phone' => [
            'required' => 'El teléfono del cliente es obligatorio.',
            'max_length' => 'El teléfono del cliente no puede exceder los 15 caracteres.'
        ],
        'Customers_address' => [
            'required' => 'La dirección del cliente es obligatoria.',
            'max_length' => 'La dirección del cliente no puede exceder los 80 caracteres.'
        ],
        'Customers_document' => [
            'required' => 'El documento del cliente es obligatorio.',
            'max_length' => 'El documento del cliente no puede exceder los 11 caracteres.'
        ],
        'Document_type_fk' => [
            'permit_empty' => 'El tipo de documento es opcional.',
            'is_natural_no_zero' => 'El tipo de documento debe ser un número natural no cero.'
        ],
        'User_fk' => [
            'permit_empty' => 'El usuario es opcional.',
            'is_natural_no_zero' => 'El usuario debe ser un número natural no cero.'
        ],
        'Subscriber_fk' => [
            'permit_empty' => 'El suscriptor es opcional.',
            'is_natural_no_zero' => 'El suscriptor debe ser un número natural no cero.'
        ],
    ];
}
