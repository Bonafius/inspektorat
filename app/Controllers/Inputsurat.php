<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_input;
class Inputsurat extends BaseController
{
	public function index()
	{
        $data = [ 
            'title' => 'Input Surat',
            'isi' => 'Input_Surat/input_surat'

        ];
        echo view ('layout/wrapper', $data);
    }
}


