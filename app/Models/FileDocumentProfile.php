<?php

namespace App\Models;

use CodeIgniter\Model;

class FileDocumentProfile extends Model
{
    protected $table      = 'file_document_profile';
    protected $primaryKey = 'Files_document_profile_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['Files_id', 'Profile_id'];

    // Validaciones opcionales
    protected $validationRules = [
        'Files_id'    => 'required|is_natural_no_zero',
        'Profile_id'  => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Files_id' => [
            'required'           => 'El ID del archivo es obligatorio.',
            'is_natural_no_zero' => 'El ID del archivo debe ser un número natural mayor que cero.',
        ],
        'Profile_id' => [
            'required'           => 'El ID del perfil es obligatorio.',
            'is_natural_no_zero' => 'El ID del perfil debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
