<?php

namespace App\Models;

use CodeIgniter\Model;

class FileModel extends Model
{
    protected $table      = 'files';
    protected $primaryKey = 'Files_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;  // Habilitar soft deletes

    protected $allowedFields = [
        'Files_name',
        'Files_rute',
        'Files_type',
        'Files_size',
        'Files_extension',
    ];

    protected $useTimestamps = true;  // Habilitar timestamps
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'Files_name'      => 'required|max_length[35]',
        'Files_rute'      => 'required|max_length[100]',
        'Files_type'      => 'required|max_length[10]',
        'Files_size'      => 'required|max_length[20]',
        'Files_extension' => 'required|max_length[10]',
    ];
    protected $validationMessages = [
        'Files_name' => [
            'required' => 'The file name is required.',
            'max_length' => 'The file name cannot exceed 35 characters.',
        ],
        'Files_rute' => [
            'required' => 'The file route is required.',
            'max_length' => 'The file route cannot exceed 100 characters.',
        ],
        'Files_type' => [
            'required' => 'The file type is required.',
            'max_length' => 'The file type cannot exceed 10 characters.',
        ],
        'Files_size' => [
            'required' => 'The file size is required.',
            'max_length' => 'The file size cannot exceed 20 characters.',
        ],
        'Files_extension' => [
            'required' => 'The file extension is required.',
            'max_length' => 'The file extension cannot exceed 10 characters.',
        ],
    ];

    protected $skipValidation     = false;
}
