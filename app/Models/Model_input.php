<?php namespace App\Models;
use CodeIgniter\Model;

class Model_input extends Model
{
    protected $table = "surat_tugas";
    function __construct()
    {
        $this->db = db_connect();
    }
    function lihat_data(){

        return $this->db->table('surat_tugas')->get();

    }
}

?>