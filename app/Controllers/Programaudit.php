<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_Program;
class Programaudit extends BaseController
{
	public function index()
	{
        $model =  new Model_program ();
        $data = [ 
            'title' => 'Program Kerja Audit',
            'isi' => 'Program_Audit/program_audit',
            'surat' => $model->lihat_data()->getResult()
        ];
        echo view ('layout/wrapper', $data);
    }
}


