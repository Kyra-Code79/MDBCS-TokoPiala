<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivationModel extends Model
{
    protected $table = 'tbl_activation_tokens';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'token', 'created_at', 'expired_at'];
    protected $useTimestamps = false;
}
