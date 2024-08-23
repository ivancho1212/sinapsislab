<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitMeasurementModel extends Model
{
    protected $table      = 'unit_measurement';
    protected $primaryKey = 'Unit_measurement_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Unit_measurement_name', 'Unit_measurement_code', 'Unit_measurement_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validaciones
    protected $validationRules = [
        'Unit_measurement_name'        => 'required|max_length[20]|is_unique[unit_measurement.Unit_measurement_name]',
        'Unit_measurement_code'        => 'required|max_length[5]|is_unique[unit_measurement.Unit_measurement_code]',
        'Unit_measurement_description' => 'permit_empty|max_length[100]'
    ];

    protected $validationMessages = [
        'Unit_measurement_name' => [
            'required' => 'El nombre de la unidad de medida es obligatorio',
            'max_length' => 'El nombre de la unidad de medida no puede exceder los 20 caracteres',
            'is_unique' => 'El nombre de la unidad de medida ya existe en la base de datos'
        ],
        'Unit_measurement_code' => [
            'required' => 'El código de la unidad de medida es obligatorio',
            'max_length' => 'El código de la unidad de medida no puede exceder los 5 caracteres',
            'is_unique' => 'El código de la unidad de medida ya existe en la base de datos'
        ],
        'Unit_measurement_description' => [
            'max_length' => 'La descripción de la unidad de medida no puede exceder los 100 caracteres'
        ]
    ];

    protected $skipValidation = false;
}
