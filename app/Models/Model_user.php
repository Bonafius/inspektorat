<?php namespace App\Models;
use CodeIgniter\Model;

class Model_user extends Model
{
    protected $table = "users";
    function __construct()
    {
        $this->db = db_connect();
    }
    function lihat_data(){

        return $this->db->table('users')->get();

    }
}

?>