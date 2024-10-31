<?php

namespace App\Models;

use CodeIgniter\Model;

class statusModel extends Model
{
    protected $table = 'tbl_status';
    protected $primaryKey = 'status_id';
    protected $allowedFields = ['nama_status']; // Add other fields if necessary
}
