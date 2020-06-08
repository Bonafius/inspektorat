<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_peta;
class Peta extends BaseController
{
	public function index()
	{
        $model =  new Model_peta ();
        $data = [ 
            'title' => 'Peta Audit',
            'isi' => 'Peta_Audit/peta_audit',
            'surat' => $model->lihat_data()->getResult()
        ];
        echo view ('layout/wrapper', $data);
    }
}


