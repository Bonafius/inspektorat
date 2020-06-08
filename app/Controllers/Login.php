<?php namespace App\Controllers;
use App\Models\Model_login;
use App\Controllers\Home;
class Login extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [ 
            'title' => 'Login',
            'isi' => 'Login/login',
        ];
        echo view ('layout/login', $data);
    }

    public function cek_login()
    {
        $this->Model_login = new Model_login();
        $email = $this->request->getpost('email');
        $password = $this->request->getpost('password');

        $cek = $this->Model_login->cek_login($email, $password);

        if(($cek['email']==$email) &&($cek['password']==$password)) {
            session()->set('email',$cek['email']);
            session()->set('password',$cek['password']);
            return redirect()->to(base_url('dashboard'));
        } else {
            session()->setFlashdata('gagal', 'Email atau Password salah!');
            return redirect()->to(base_url('login'));
        
        }
    }
}