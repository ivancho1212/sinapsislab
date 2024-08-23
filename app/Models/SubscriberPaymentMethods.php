<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriberPaymentMethods extends Model
{
    protected $table      = 'subscriber_payment_methods';
    protected $primaryKey = 'Subscriber_payment_methods_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['Subscriber_payment_methods_image', 'Subscriber_profile_id', 'Type_of_payment_methods_id'];

    // Validaciones opcionales
    protected $validationRules = [
        'Subscriber_payment_methods_image' => 'permit_empty|is_image[subscriber_payment_methods_image]|max_size[subscriber_payment_methods_image,2048]',
        'Subscriber_profile_id'            => 'required|is_natural_no_zero',
        'Type_of_payment_methods_id'       => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Subscriber_payment_methods_image' => [
            'is_image' => 'El archivo debe ser una imagen.',
            'max_size' => 'La imagen no puede exceder los 2 MB.',
        ],
        'Subscriber_profile_id' => [
            'required'           => 'El ID del perfil del suscriptor es obligatorio.',
            'is_natural_no_zero' => 'El ID del perfil del suscriptor debe ser un número natural mayor que cero.',
        ],
        'Type_of_payment_methods_id' => [
            'required'           => 'El ID del método de pago es obligatorio.',
            'is_natural_no_zero' => 'El ID del método de pago debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = false;
}
