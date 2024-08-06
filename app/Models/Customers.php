<?php

namespace App\Models;

use CodeIgniter\Model;

class Customers extends Model
{
    protected $table      = 'customers';
    protected $primaryKey = 'Customers_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Puedes cambiarlo a 'object' si prefieres.
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
        'Customers_name' => 'required|max_length[255]',
        'Customers_email' => 'required|valid_email|max_length[255]',
        'Customers_phone' => 'required|max_length[15]',
        'Customers_address' => 'required|max_length[255]',
        'Customers_document' => 'required|max_length[20]',
        'Document_type_fk' => 'required|integer',
        'User_fk' => 'required|integer',
        'Subscriber_fk' => 'required|integer',
    ];

    protected $validationMessages = [
        'Customers_name' => [
            'required' => 'El nombre del cliente es obligatorio.',
            'max_length' => 'El nombre del cliente no puede exceder los 255 caracteres.'
        ],
        'Customers_email' => [
            'required' => 'El correo electrónico del cliente es obligatorio.',
            'valid_email' => 'Debe proporcionar un correo electrónico válido.',
            'max_length' => 'El correo electrónico del cliente no puede exceder los 255 caracteres.'
        ],
        'Customers_phone' => [
            'required' => 'El teléfono del cliente es obligatorio.',
            'max_length' => 'El teléfono del cliente no puede exceder los 15 caracteres.'
        ],
        'Customers_address' => [
            'required' => 'La dirección del cliente es obligatoria.',
            'max_length' => 'La dirección del cliente no puede exceder los 255 caracteres.'
        ],
        'Customers_document' => [
            'required' => 'El documento del cliente es obligatorio.',
            'max_length' => 'El documento del cliente no puede exceder los 20 caracteres.'
        ],
        'Document_type_fk' => [
            'required' => 'El tipo de documento es obligatorio.',
            'integer' => 'El tipo de documento debe ser un número entero.'
        ],
        'User_fk' => [
            'required' => 'El usuario es obligatorio.',
            'integer' => 'El usuario debe ser un número entero.'
        ],
        'Subscriber_fk' => [
            'required' => 'El suscriptor es obligatorio.',
            'integer' => 'El suscriptor debe ser un número entero.'
        ],
    ];
}
