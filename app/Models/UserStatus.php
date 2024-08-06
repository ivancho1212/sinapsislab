<?php

namespace App\Models;

use CodeIgniter\Model;

class UserStatus extends Model
{
    protected $table      = 'user_status';
    protected $primaryKey = 'User_status_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['User_status_name', 'User_status_description'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
