<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyDocumentsFiles extends Model
{
    protected $table      = 'company_documents_files';
    protected $primaryKey = 'Company_documents_files_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['Company_id', 'Files_id'];

    // Validaciones opcionales
    protected $validationRules = [
        'Company_id' => 'required|is_natural_no_zero',
        'Files_id'   => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Company_id' => [
            'required'           => 'El ID de la empresa es obligatorio.',
            'is_natural_no_zero' => 'El ID de la empresa debe ser un número natural mayor que cero.',
        ],
        'Files_id' => [
            'required'           => 'El ID del archivo es obligatorio.',
            'is_natural_no_zero' => 'El ID del archivo debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = false;
}
