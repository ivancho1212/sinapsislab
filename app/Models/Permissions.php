<?php

namespace App\Models;

use CodeIgniter\Model;

class Permissions extends Model
{
    protected $table      = 'permissions';
    protected $primaryKey = 'Permissions_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Permissions_name', 
        'Permissions_description'
    ];

    protected $useTimestamps = true;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';
    protected $deletedField   = 'deleted_at';

    protected $validationRules = [
        'Permissions_name' => 'required|string|max_length[20]',
        'Permissions_description' => 'permit_empty|string|max_length[100]', // Longitud corregida para coincidir con la migración
    ];

    protected $validationMessages = [
        'Permissions_name' => [
            'required' => 'El nombre del permiso es obligatorio.',
            'string' => 'El nombre del permiso debe ser una cadena de texto.',
            'max_length' => 'El nombre del permiso no puede exceder los 20 caracteres.',
        ],
        'Permissions_description' => [
            'string' => 'La descripción del permiso debe ser una cadena de texto.',
            'max_length' => 'La descripción del permiso no puede exceder los 100 caracteres.', // Longitud corregida para coincidir con la migración
        ],
    ];

    protected $skipValidation = false;
}
