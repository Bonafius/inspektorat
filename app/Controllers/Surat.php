<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_surat;
class Surat extends BaseController
{
	public function index()
	{
        $model =  new Model_surat ();
        $data = [ 
            'title' => 'Surat Tugas',
            'isi' => 'Surat_Tugas/surat_tugas',
            'surat' => $model->lihat_data()->getResult()
        ];
        echo view ('layout/wrapper', $data);
    }
}


