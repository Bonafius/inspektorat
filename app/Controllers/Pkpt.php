<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_pkpt;
class Pkpt extends BaseController
{
	public function index()
	{
        $data = [ 
            'title' => 'Upload PKPT',
            'isi' => 'Upload_Pkpt/upload_pkpt'

        ];
        echo view ('layout/wrapper', $data);
    }
}


