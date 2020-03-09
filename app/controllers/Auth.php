<?php

require __DIR__ . '\..\utility\Session.php';
require __DIR__ . '\..\utility\AuthUtility.php';

class Auth extends Controller
{
    public function index()
    {
        // cek apakah dia sudah login? jika sudah maka tendang ke hello
        AuthUtility::checkUnauthenticated();
        
        $this->view('auth/login');
    }

    public function login()
    {
        AuthUtility::checkUnauthenticated();
        if ($_POST['role'] == '1') {// siswa
            $this->model('Auth_model')->loginSiswa($_POST);
        } else if ($_POST['role'] == '2') {
            
        }
    }

    public function logout(){
        AuthUtility::checkAuthenticated();
    
        Session::destroy_session();
        header('Location: ' . BASEURL . '/auth');
        exit;
    }
}