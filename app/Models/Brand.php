<?php

namespace App\Models;

use CodeIgniter\Model;

class Brand extends Model
{
    protected $table      = 'brand';
    protected $primaryKey = 'Brand_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Brand_name', 'Brand_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Brand_name' => 'required|min_length[3]|max_length[20]|is_unique[brand.Brand_name]',
        'Brand_description' => 'permit_empty|max_length[100]',
    ];

    protected $validationMessages = [
        'Brand_name' => [
            'required' => 'El nombre de la marca es obligatorio.',
            'min_length' => 'El nombre de la marca debe tener al menos 3 caracteres.',
            'max_length' => 'El nombre de la marca no puede exceder los 20 caracteres.',
            'is_unique' => 'El nombre de la marca ya existe en la base de datos.',
        ],
        'Brand_description' => [
            'max_length' => 'La descripción de la marca no puede exceder los 100 caracteres.',
        ],
    ];

    protected $skipValidation = false;
}
