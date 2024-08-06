<?php

namespace App\Models;

use CodeIgniter\Model;

class Subscriber extends Model
{
    protected $table      = 'subscriber';
    protected $primaryKey = 'Subscriber_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Subscriber_name', 
        'Subscriber_last_name', 
        'Subscriber_email', 
        'Subscriber_phone', 
        'Subscriber_address', 
        'Company_fk', 
        'User_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Subscriber_name' => 'required|max_length[50]',
        'Subscriber_last_name' => 'required|max_length[50]',
        'Subscriber_email' => 'required|valid_email|max_length[100]',
        'Subscriber_phone' => 'required|max_length[20]',
        'Subscriber_address' => 'permit_empty|max_length[255]',
        'Company_fk' => 'required|is_natural_no_zero',
        'User_fk' => 'required|is_natural_no_zero'
    ];

    protected $validationMessages = [
        'Subscriber_name' => [
            'required' => 'El nombre del suscriptor es obligatorio',
            'max_length' => 'El nombre del suscriptor no puede exceder los 50 caracteres'
        ],
        'Subscriber_last_name' => [
            'required' => 'El apellido del suscriptor es obligatorio',
            'max_length' => 'El apellido del suscriptor no puede exceder los 50 caracteres'
        ],
        'Subscriber_email' => [
            'required' => 'El correo electrónico del suscriptor es obligatorio',
            'valid_email' => 'El correo electrónico del suscriptor debe ser válido',
            'max_length' => 'El correo electrónico del suscriptor no puede exceder los 100 caracteres'
        ],
        'Subscriber_phone' => [
            'required' => 'El teléfono del suscriptor es obligatorio',
            'max_length' => 'El teléfono del suscriptor no puede exceder los 20 caracteres'
        ],
        'Subscriber_address' => [
            'max_length' => 'La dirección del suscriptor no puede exceder los 255 caracteres'
        ],
        'Company_fk' => [
            'required' => 'El ID de la empresa es obligatorio',
            'is_natural_no_zero' => 'El ID de la empresa debe ser un número natural no cero'
        ],
        'User_fk' => [
            'required' => 'El ID del usuario es obligatorio',
            'is_natural_no_zero' => 'El ID del usuario debe ser un número natural no cero'
        ]
    ];
}
