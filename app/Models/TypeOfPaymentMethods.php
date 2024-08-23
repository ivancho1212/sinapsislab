<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeOfPaymentMethods extends Model
{
    protected $table      = 'type_of_payment_methods';
    protected $primaryKey = 'Type_of_payment_methods_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['Type_of_payment_methods_name', 'Type_of_payment_methods_phone'];

    protected $validationRules = [
        'Type_of_payment_methods_name' => 'required|min_length[3]|max_length[100]',
        'Type_of_payment_methods_phone' => 'required|permit_empty|regex_match[/^[0-9+]{1,20}$/]',
    ];

    protected $validationMessages = [
        'Type_of_payment_methods_name' => [
            'required'    => 'El nombre del método de pago es obligatorio.',
            'min_length'  => 'El nombre del método de pago debe tener al menos 3 caracteres.',
            'max_length'  => 'El nombre del método de pago no puede exceder los 100 caracteres.',
        ],
        'Type_of_payment_methods_phone' => [
            'required'    => 'El teléfono del método de pago es obligatorio.',
            'regex_match' => 'El teléfono del método de pago debe contener solo números y el signo +.',
        ],
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
