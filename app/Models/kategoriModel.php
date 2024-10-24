<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tbl_kategori';
    protected $primaryKey = 'kategori_id';
    protected $allowedFields = ['nama_kategori']; // Add other fields if necessary
}
