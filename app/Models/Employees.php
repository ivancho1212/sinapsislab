<?php

namespace App\Models;

use CodeIgniter\Model;

class Employees extends Model
{
    protected $table      = 'employees';
    protected $primaryKey = 'Employees_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Puedes cambiarlo a 'object' si prefieres.
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Employees_name', 
        'Employees_email', 
        'Employees_phone', 
        'Employees_address', 
        'Employees_document', 
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
        'Employees_name' => 'required|max_length[20]',
        'Employees_email' => 'required|valid_email|max_length[35]',
        'Employees_phone' => 'required|max_length[15]',
        'Employees_address' => 'required|max_length[80]',
        'Employees_document' => 'required|max_length[11]',
        'Document_type_fk' => 'permit_empty|is_natural_no_zero',
        'User_fk' => 'permit_empty|is_natural_no_zero',
        'Subscriber_fk' => 'permit_empty|is_natural_no_zero'
    ];

    protected $validationMessages = [
        'Employees_name' => [
            'required' => 'El nombre del empleado es obligatorio.',
            'max_length' => 'El nombre del empleado no puede exceder los 20 caracteres.'
        ],
        'Employees_email' => [
            'required' => 'El correo electrónico del empleado es obligatorio.',
            'valid_email' => 'El correo electrónico del empleado debe ser válido.',
            'max_length' => 'El correo electrónico no puede exceder los 35 caracteres.'
        ],
        'Employees_phone' => [
            'required' => 'El teléfono del empleado es obligatorio.',
            'max_length' => 'El teléfono no puede exceder los 15 caracteres.'
        ],
        'Employees_address' => [
            'required' => 'La dirección del empleado es obligatoria.',
            'max_length' => 'La dirección no puede exceder los 80 caracteres.'
        ],
        'Employees_document' => [
            'required' => 'El documento del empleado es obligatorio.',
            'max_length' => 'El documento no puede exceder los 11 caracteres.'
        ],
        'Document_type_fk' => [
            'permit_empty' => 'El tipo de documento es opcional.',
            'is_natural_no_zero' => 'El tipo de documento debe ser un número natural no cero.'
        ],
        'User_fk' => [
            'permit_empty' => 'El ID del usuario es opcional.',
            'is_natural_no_zero' => 'El ID del usuario debe ser un número natural no cero.'
        ],
        'Subscriber_fk' => [
            'permit_empty' => 'El ID del suscriptor es opcional.',
            'is_natural_no_zero' => 'El ID del suscriptor debe ser un número natural no cero.'
        ]
    ];
}
