<?php namespace App\Controllers;
use codeigniter\Controller;
use App\Models\Model_user;
class User extends BaseController
{
	public function index()
	{
        $model =  new Model_user ();
        $data = [ 
            'title' => 'User Admin',
            'isi' => 'admin/user',
            'user' => $model->lihat_data()->getResult()
        ];
        echo view ('layout/wrapper', $data);
    }
}


