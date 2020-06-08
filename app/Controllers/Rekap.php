<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_rekap;
class Rekap extends BaseController
{
	public function index()
	{
        $model =  new Model_rekap ();
        $data = [ 
            'title' => 'Rekap Audit',
            'isi' => 'Rekap_Audit/rekap_audit',
            'surat' => $model->lihat_data()->getResult()
        ];
        echo view ('layout/wrapper', $data);
    }
}


