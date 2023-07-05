<?php

namespace App\Models;

use CodeIgniter\Model;

class UserReg extends Model
{
    protected $table = 'pelanggan';
    public function userdata($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    protected $primaryKey = 'id'; // Primary key tabel pengguna
    protected $allowedFields = ['email','password']; // Kolom yang dapat diisi pada tabel pengguna
}