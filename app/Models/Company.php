<?php

namespace App\Models;

use CodeIgniter\Model;

class Company extends Model
{
    protected $table      = 'company';
    protected $primaryKey = 'Company_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // Puedes cambiarlo a 'object' si prefieres.
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Company_name', 
        'Company_address', 
        'Company_phone', 
        'Company_email', 
        'Company_type_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Company_name' => 'required|max_length[255]',
        'Company_address' => 'required|max_length[255]',
        'Company_phone' => 'required|max_length[20]',
        'Company_email' => 'required|valid_email|max_length[255]',
        'Company_type_fk' => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Company_email' => [
            'valid_email' => 'Debes proporcionar una dirección de correo electrónico válida.',
        ],
        'Company_type_fk' => [
            'required' => 'El campo Company Type es obligatorio.',
            'is_natural_no_zero' => 'El campo Company Type debe contener solo números naturales distintos de cero.'
        ],
    ];
}
