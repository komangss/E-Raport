<?php

use Utility\Session;
use Utility\AuthUtility;

class Auth extends Controller
{
    public function index()
    {
        // cek apakah dia sudah login?
        AuthUtility::checkUnauthenticated();
        
        $this->view('auth/login');
    }

    public function login()
    {
        // TODO: cek apakah ini berasal dari webnya
        AuthUtility::checkUnauthenticated();
        if ($_POST['role'] == '1') {// siswa
            $this->model('Auth_model')->loginSiswa($_POST);
        } else if ($_POST['role'] == '2') {
            $this->model('Auth_model')->loginGuru($_POST);    
        }
    }

    public function logout(){
        AuthUtility::checkAuthenticated();
    
        Session::destroy_session();
        header('Location: ' . BASEURL . '/auth');
        exit;
    }

    public function login_admin () {
        // AuthUtility::checkAuthenticated();

        $this->view("admin/index");
    }
}
