<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactSocialNetwork extends Model
{
    protected $table      = 'contact_social_networks';
    protected $primaryKey = 'Contact_social_networks_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['Subscriber_profile_id', 'Social_networks_id'];

    protected $validationRules = [
        'Subscriber_profile_id' => 'required|is_natural_no_zero',
        'Social_networks_id'    => 'required|is_natural_no_zero',
    ];

    protected $validationMessages = [
        'Subscriber_profile_id' => [
            'required'           => 'El ID del perfil del suscriptor es obligatorio.',
            'is_natural_no_zero' => 'El ID del perfil del suscriptor debe ser un número natural mayor que cero.',
        ],
        'Social_networks_id' => [
            'required'           => 'El ID de la red social es obligatorio.',
            'is_natural_no_zero' => 'El ID de la red social debe ser un número natural mayor que cero.',
        ],
    ];

    protected $useTimestamps = false;
}
