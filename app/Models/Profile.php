<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model
{
    protected $table      = 'profile';
    protected $primaryKey = 'Profile_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Puedes cambiarlo a 'object' si prefieres.
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Profile_name', 
        'Profile_last_name', 
        'Profile_email', 
        'Profile_phone', 
        'Profile_address', 
        'Profile_photo', 
        'User_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Profile_name' => 'required|max_length[50]',
        'Profile_last_name' => 'required|max_length[50]',
        'Profile_email' => 'required|valid_email|max_length[100]',
        'Profile_phone' => 'required|max_length[20]',
        'Profile_address' => 'required|max_length[255]',
        'Profile_photo' => 'permit_empty|max_length[255]',
        'User_fk' => 'permit_empty|is_natural_no_zero' // Cambiado de required a permit_empty
    ];    

    protected $validationMessages = [
        'Profile_name' => [
            'required' => 'El nombre del perfil es obligatorio',
            'max_length' => 'El nombre del perfil no puede exceder los 50 caracteres'
        ],
        'Profile_last_name' => [
            'required' => 'El apellido del perfil es obligatorio',
            'max_length' => 'El apellido del perfil no puede exceder los 50 caracteres'
        ],
        'Profile_email' => [
            'required' => 'El correo electrónico del perfil es obligatorio',
            'valid_email' => 'El correo electrónico debe ser válido',
            'max_length' => 'El correo electrónico no puede exceder los 100 caracteres'
        ],
        'Profile_phone' => [
            'required' => 'El teléfono del perfil es obligatorio',
            'max_length' => 'El teléfono no puede exceder los 20 caracteres'
        ],
        'Profile_address' => [
            'required' => 'La dirección del perfil es obligatoria',
            'max_length' => 'La dirección no puede exceder los 255 caracteres'
        ],
        'Profile_photo' => [
            'max_length' => 'La foto del perfil no puede exceder los 255 caracteres'
        ],
        'User_fk' => [
            'required' => 'El ID del usuario es obligatorio',
            'is_natural_no_zero' => 'El ID del usuario debe ser un número natural no cero'
        ]
    ];
}
