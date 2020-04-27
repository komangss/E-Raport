<?php

use Utility\Session;
use Utility\AuthUtility;

class Auth extends Controller
{
    public function index()
    {
        // cek apakah dia sudah login?
        AuthUtility::checkUnauthenticated();
        $data['flash'] = Session::flash();
        $this->view('auth/login', $data);
    }

    public function login()
    {
        AuthUtility::checkUnauthenticated();
        $result = $this->model('Auth_model')->login($_POST);
        if ($result['rowCount'] > 0 ) {
            if ($result['user']['password'] == $_POST['password']) {
                Session::setFlash('Login sukses dijalankan', 'success');
                header('Location:'. BASEURL. '/dashboard');
            } else {
                Session::setFlash('Password anda salah', 'danger');
                header('Location:'. BASEURL . '/auth');
            }
        } else {
            Session::setFlash('User tidak ditemukan', 'danger');
            header('Location:'. BASEURL . '/auth');
        }
    }

    public function logout(){
        AuthUtility::checkAuthenticated();
    
        Session::destroy_session();
        header('Location: ' . BASEURL . '/auth');
        exit;
    }
}
