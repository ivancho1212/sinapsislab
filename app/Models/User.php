<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'User_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['User_user', 'User_password', 'User_status_fk', 'Role_fk'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'User_user' => 'required|max_length[255]',
        'User_password' => 'required|max_length[255]',
        'User_status_fk' => 'required|is_natural_no_zero',
        'Role_fk' => 'required|is_natural_no_zero'
    ];

    protected $validationMessages = [
        'User_user' => [
            'required' => 'El nombre de usuario es obligatorio',
            'max_length' => 'El nombre de usuario no puede exceder los 255 caracteres'
        ],
        'User_password' => [
            'required' => 'La contraseña es obligatoria',
            'max_length' => 'La contraseña no puede exceder los 255 caracteres'
        ],
        'User_status_fk' => [
            'required' => 'El estado del usuario es obligatorio',
            'is_natural_no_zero' => 'El estado del usuario debe ser un número natural no cero'
        ],
        'Role_fk' => [
            'required' => 'El rol del usuario es obligatorio',
            'is_natural_no_zero' => 'El rol del usuario debe ser un número natural no cero'
        ]
    ];
}
