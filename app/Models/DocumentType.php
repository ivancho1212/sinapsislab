<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentType extends Model
{
    protected $table      = 'document_type';
    protected $primaryKey = 'Document_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Puedes cambiarlo a 'object' si prefieres.
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Document_type_name', 'Document_type_code', 'Document_type_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Document_type_name' => 'required|max_length[255]',
        'Document_type_code' => 'required|max_length[50]',
        'Document_type_description' => 'max_length[255]'
    ];

    protected $validationMessages = [
        'Document_type_name' => [
            'required' => 'El nombre del tipo de documento es obligatorio.',
            'max_length' => 'El nombre del tipo de documento no puede exceder los 255 caracteres.'
        ],
        'Document_type_code' => [
            'required' => 'El código del tipo de documento es obligatorio.',
            'max_length' => 'El código del tipo de documento no puede exceder los 50 caracteres.'
        ],
        'Document_type_description' => [
            'max_length' => 'La descripción del tipo de documento no puede exceder los 255 caracteres.'
        ]
    ];
}
