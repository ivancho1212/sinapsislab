<?php

namespace App\Models;

use CodeIgniter\Model;

class FileDocumentEmployee extends Model
{
    protected $table      = 'file_document_employees';
    protected $primaryKey = 'File_document_employee_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['Files_id', 'Employees_id'];

    // Validaciones opcionales
    protected $validationRules = [
        'Files_id'    => 'required|is_natural_no_zero',
        'Employees_id'=> 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Files_id' => [
            'required'           => 'El ID del archivo es obligatorio.',
            'is_natural_no_zero' => 'El ID del archivo debe ser un número natural mayor que cero.',
        ],
        'Employees_id' => [
            'required'           => 'El ID del empleado es obligatorio.',
            'is_natural_no_zero' => 'El ID del empleado debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = false;
}
