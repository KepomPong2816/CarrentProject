<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'pelanggan';

    public function getuser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
    protected $primaryKey = 'id'; // Primary key tabel pengguna
    protected $allowedFields = ['email', 'password']; // Kolom yang dapat diisi pada tabel pengguna

    
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
    public function getUserById($id)
    {
        return $this->where('id', $id)->first();
    }
}
