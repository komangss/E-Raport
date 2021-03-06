<?php

use Utility\Session;

class Guru extends Controller
{
    public function index() {
        $data['data_guru'] = $this->model('Guru_model')->getAllGuru();
        $this->view('guru/index', $data);
    }

    public function dashboard() {
        Session::init_session();
        $id_guru = Session::get_session("session_data")['id_guru'];
        $data['nama'] = $this->model("Guru_model")->getGuruById($id_guru)['nama_guru'];
        $data['flash'] = Session::flash();
        $this->view('guru/dashboard-guru', $data);
        
    }
    
    public function wali() {
        Session::init_session();
        $data['id_guru'] = Session::get_session('session_data')['id_guru'];
        $data['id_data_kelas'] = Session::get_session("session_data")['id_data_kelas'];
        $data['flash'] = Session::flash();
        $this->view('guru/wali/index', $data);
    
    }

    public function mapel()
    {
        $this->view('guru/mapel/index');
    }
    
}
