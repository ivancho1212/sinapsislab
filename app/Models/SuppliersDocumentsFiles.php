<?php

namespace App\Models;

use CodeIgniter\Model;

class SuppliersDocumentsFiles extends Model
{
    protected $table      = 'suppliers_documents_files';
    protected $primaryKey = 'Suppliers_documents_files_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['Suppliers_id', 'Files_id'];

    // Validaciones opcionales
    protected $validationRules = [
        'Suppliers_id' => 'required|is_natural_no_zero',
        'Files_id'     => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Suppliers_id' => [
            'required'           => 'El ID del proveedor es obligatorio.',
            'is_natural_no_zero' => 'El ID del proveedor debe ser un número natural mayor que cero.',
        ],
        'Files_id' => [
            'required'           => 'El ID del archivo es obligatorio.',
            'is_natural_no_zero' => 'El ID del archivo debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = false;
}
