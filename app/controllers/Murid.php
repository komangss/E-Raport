<?php

require __DIR__ . '\..\utility\Session.php';

class Murid extends Controller
{
    public function index()
    {
        $this->view('siswa/siswa');
    }

    public function showraport()
    {
        $this->view('siswa/show_raport');
    }

    public function be()
    {
        // Get All
        $data['data_siswa'] = $this->model('Siswa_model')->getAllSiswa();
        Session::init_session();
        $data['session_data'] = Session::get_session("session_data");
        // get siswa id 1
        $data["siswa_id_1"] = $this->model("Siswa_model")->getSiswaById(1);

        if ($_POST['keyword']) {
            $data['dataSiswaFromSearch'] = $this->model('Siswa_model')->searchDataSiswa(
                $_POST
            );
        } else {
            $data['dataSiswaFromSearch'] = "data siswa nya ga ada";
        }

        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function insert()
    {
        // var_dump($_POST); die;
        if ($this->model('Siswa_model')->insertDataSiswa($_POST) > 0) { // kalo saya panggil model lalu di dalalmya saya panggil method tambahdatamahasiswa yg mengirimkan nilai $_POST itu lebih besar dari 0 //  berarti ada baris baru yg ditambahkan
            // set flash message
            // Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else { // kalo gagal
            // Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function update()
    {
        $_POST['id'] = 1;
        // var_dump($_POST); die;
        if ($this->model('Siswa_model')->updateDataSiswa($_POST) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function delete()
    {
        if ($this->model('Siswa_model')->deleteSiswaById($_POST['id']) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
}
