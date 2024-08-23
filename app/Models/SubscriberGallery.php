<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriberGallery extends Model
{
    protected $table      = 'subscriber_gallery';
    protected $primaryKey = 'Subscriber_gallery_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['Subscriber_profile_id', 'Files_id'];

    // Validaciones opcionales
    protected $validationRules = [
        'Subscriber_profile_id' => 'required|is_natural_no_zero',
        'Files_id'              => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Subscriber_profile_id' => [
            'required'           => 'El ID del perfil del suscriptor es obligatorio.',
            'is_natural_no_zero' => 'El ID del perfil del suscriptor debe ser un número natural mayor que cero.',
        ],
        'Files_id' => [
            'required'           => 'El ID del archivo es obligatorio.',
            'is_natural_no_zero' => 'El ID del archivo debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = false;
}
