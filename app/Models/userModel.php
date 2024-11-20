<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'tbl_user';
    protected $primarykey = 'user_id';
    protected $allowedFields = ['username', 'password', 'fullname', 'email', 'role', 'image', 'status'];
}
