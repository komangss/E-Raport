<?php

class Guru extends Controller
{
    public function index() {
        $data['data_guru'] = $this->model('Guru_model')->getAllGuru();
        $this->view('guru/index', $data);
    }
}
