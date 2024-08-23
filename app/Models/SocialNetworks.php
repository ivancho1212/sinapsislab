<?php

namespace App\Models;

use CodeIgniter\Model;

class SocialNetwork extends Model
{
    protected $table      = 'social_networks';
    protected $primaryKey = 'Social_networks_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['Social_networks_nombre', 'Social_networks_link'];

    protected $validationRules = [
        'Social_networks_nombre' => 'required|string|max_length[100]',
        'Social_networks_link'   => 'required|valid_url|max_length[255]',
    ];

    protected $validationMessages = [
        'Social_networks_nombre' => [
            'required'   => 'El nombre de la red social es obligatorio.',
            'string'     => 'El nombre de la red social debe ser una cadena de texto.',
            'max_length' => 'El nombre de la red social no puede superar los 100 caracteres.',
        ],
        'Social_networks_link' => [
            'required'   => 'El enlace de la red social es obligatorio.',
            'valid_url'  => 'El enlace de la red social debe ser una URL válida.',
            'max_length' => 'El enlace de la red social no puede superar los 255 caracteres.',
        ],
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
