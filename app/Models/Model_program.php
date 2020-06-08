<?php namespace App\Models;
use CodeIgniter\Model;

class Model_program extends Model
{
    protected $table = "audit";
    function __construct()
    {
        $this->db = db_connect();
    }
    function lihat_data(){

        return $this->db->table('audit')->get();

    }
}

?>