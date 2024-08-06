<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriberProfile extends Model
{
    protected $table      = 'subscriber_profile';
    protected $primaryKey = 'Subscriber_profile_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Subscriber_profile_name',
        'Subscriber_profile_email',
        'Subscriber_profile_phone',
        'Subscriber_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'Subscriber_profile_name' => 'required|string|max_length[256]',
        'Subscriber_profile_email' => 'required|valid_email|max_length[20]',
        'Subscriber_profile_phone' => 'required|string|max_length[50]',
        'Subscriber_fk' => 'required|is_natural_no_zero'
    ];

    protected $validationMessages = [
        'Subscriber_profile_name' => [
            'required' => 'El campo Nombre es obligatorio.',
            'string' => 'El campo Nombre debe ser una cadena de texto.',
            'max_length' => 'El campo Nombre no puede exceder los 256 caracteres.'
        ],
        'Subscriber_profile_email' => [
            'required' => 'El campo Correo Electrónico es obligatorio.',
            'valid_email' => 'El campo Correo Electrónico debe contener una dirección de correo válida.',
            'max_length' => 'El campo Correo Electrónico no puede exceder los 20 caracteres.'
        ],
        'Subscriber_profile_phone' => [
            'required' => 'El campo Teléfono es obligatorio.',
            'string' => 'El campo Teléfono debe ser una cadena de texto.',
            'max_length' => 'El campo Teléfono no puede exceder los 50 caracteres.'
        ],
        'Subscriber_fk' => [
            'required' => 'El campo Subscriber_fk es obligatorio.',
            'is_natural_no_zero' => 'El campo Subscriber_fk debe ser un número natural mayor que cero.'
        ]
    ];
}
