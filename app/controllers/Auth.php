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
        AuthUtility::checkUnauthenticated();
        $result = $this->model("Auth_model")->login($_POST);
        if ($result['rowCount'] > 0 ) {
            if ($result['user']['password'] == $_POST['password']) {
                header('Location:'. BASEURL. 'dashboard');
            } else {
                echo "password salah";
            }
        } else {
            echo "tidak ada username yang terdaftar";
        }
    }

    public function logout(){
        AuthUtility::checkAuthenticated();
    
        Session::destroy_session();
        header('Location: ' . BASEURL . '/auth');
        exit;
    }
}
