<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_viewsurat;
class Viewsurat extends BaseController
{
	public function index()
	{
        $model =  new Model_viewsurat ();
        $data = [ 
            'title' => 'View Surat',
            'isi' => 'View_Surat/view_surat',
            'viewsurat' => $model->lihat_data()->getResult()
        ];
        echo view ('layout/wrapper', $data);
    }
}


