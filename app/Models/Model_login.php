<?php namespace App\models;
use CodeIgniter\Model;

class Model_login extends Model
{

    public function cek_login($email, $password)
    {
        return $this->db->table('users')
        ->where(array('email'=> $email, 'password' => $password ))
        ->get()->getRowArray();
    }
}
