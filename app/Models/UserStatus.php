<?php

namespace App\Models;

use CodeIgniter\Model;

class UserStatus extends Model
{
    protected $table      = 'user_status';
    protected $primaryKey = 'User_status_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['User_status_name', 'User_status_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'User_status_name' => 'required|min_length[3]|max_length[50]',
        'User_status_description' => 'permit_empty|max_length[255]',
    ];

    protected $validationMessages = [
        'User_status_name' => [
            'required' => 'El nombre del estado de usuario es obligatorio.',
            'min_length' => 'El nombre del estado de usuario debe tener al menos 3 caracteres.',
            'max_length' => 'El nombre del estado de usuario no puede exceder los 50 caracteres.',
        ],
        'User_status_description' => [
            'max_length' => 'La descripción del estado de usuario no puede exceder los 255 caracteres.',
        ],
    ];
}
