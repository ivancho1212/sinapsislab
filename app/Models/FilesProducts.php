<?php

namespace App\Models;

use CodeIgniter\Model;

class FilesProducts extends Model
{
    protected $table      = 'files_products';
    protected $primaryKey = 'Files_products_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['Files_id', 'Products_id'];

    // Validaciones opcionales
    protected $validationRules = [
        'Files_id'    => 'required|is_natural_no_zero',
        'Products_id' => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Files_id' => [
            'required'           => 'El ID del archivo es obligatorio.',
            'is_natural_no_zero' => 'El ID del archivo debe ser un número natural mayor que cero.',
        ],
        'Products_id' => [
            'required'           => 'El ID del producto es obligatorio.',
            'is_natural_no_zero' => 'El ID del producto debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
