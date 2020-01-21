<?php

class Home extends Controller {
    public function index(){
        // saya panggil class User_model melalui method model() yg ada di core/controller.php, lalu panggil method getUser()
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        // memanggil fungsi view yg ada di core/controller
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}