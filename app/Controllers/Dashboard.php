<?php namespace App\Controllers;
use codeigniter\Controller;
class Dashboard extends BaseController
{
	public function index()
	{
        $data = [ 
            'title' => 'Dashboard Admin',
            'isi' => 'admin/index'

        ];
        echo view ('layout/wrapper', $data);
    }
}
	//--------------------------------------------------------------------

