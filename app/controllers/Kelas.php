<?php

class Kelas extends Controller
{
    public function index($id_kelas)
    {
        if (!isset($id_kelas)) {
            // Get All
            $data['data_kelas'] = $this->model('Kelas_model')->getAllKelas();
    
            // get siswa id 1
            $data["kelas_id_1"] = $this->model("Kelas_model")->getKelasById(1);
    
            if ($_POST['keyword']) {
                $data['kelasFromSearch'] = $this->model('Kelas_model')->searchKelas($_POST
            );
            } else {
                $data['kelasFromSearch'] = "Kelas tidak tersedia";
            }
    
            $this->view('templates/header', $data);
            $this->view('kelas/index', $data);
            $this->view('templates/footer');
        } else {
            // get siswa id 1
            $data["kelas_id_1"] = $this->model("Kelas_model")->getKelasById($id_kelas);
            var_dump($data); die;
        }
    }

    public function insert()
    {
        // var_dump($_POST); die;
        if ($this->model('Kelas_model')->insertDataKelas($_POST) > 0) { // kalo saya panggil model lalu di dalalmya saya panggil method tambahdatamahasiswa yg mengirimkan nilai $_POST itu lebih besar dari 0 //  berarti ada baris baru yg ditambahkan
            // set flash message
            // Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else { // kalo gagal
            // Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function update()
    {
        $_POST['id'] = 1;
        // var_dump($_POST); die;
        if ($this->model('Kelas_model')->updateKelas($_POST) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function delete()
    {
        if ($this->model('Kelas_model')->deleteKelas($_POST['id']) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }
}
