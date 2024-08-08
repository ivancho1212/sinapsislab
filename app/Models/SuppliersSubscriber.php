<?php

namespace App\Models;

use CodeIgniter\Model;

class SuppliersSubscriber extends Model
{
    protected $table      = 'suppliers_subscriber';
    protected $primaryKey = 'Suppliers_subscriber_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['Suppliers_id', 'Subscriber_id'];

    // Opcional: puedes agregar validaciones si las necesitas
    protected $validationRules = [
        'Suppliers_id' => 'required|is_natural_no_zero',
        'Subscriber_id' => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Suppliers_id' => [
            'required' => 'El ID del proveedor es obligatorio.',
            'is_natural_no_zero' => 'El ID del proveedor debe ser un número natural mayor que cero.',
        ],
        'Subscriber_id' => [
            'required' => 'El ID del suscriptor es obligatorio.',
            'is_natural_no_zero' => 'El ID del suscriptor debe ser un número natural mayor que cero.',
        ],
    ];
}
