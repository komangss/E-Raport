<?php

class Jurusan extends Controller
{
    public function index()
    {
        // Get All
        $data['get_jurusan'] = $this->model('Jurusan_model')->getAllJurusan();

        // get siswa id 1
        $data["jurusan_id_1"] = $this->model("Jurusan_model")->getJurusanById(1);

        if ($_POST['keyword']) {
            $data['JurusanSearch'] = $this->model('Jurusan_model')->searchJurusan($_POST
        );
        } else {
            $data['JurusanSearch'] = "Jurusan tidak tersedia";
        }

        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }

    public function insert()
    {
        // var_dump($_POST); die;
        if ($this->model('Jurusan_model')->insertJurusan($_POST) > 0) { // kalo saya panggil model lalu di dalalmya saya panggil method tambahdatamahasiswa yg mengirimkan nilai $_POST itu lebih besar dari 0 //  berarti ada baris baru yg ditambahkan
            // set flash message
            // Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else { // kalo gagal
            // Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function update()
    {
        $_POST['id'] = 1;
        // var_dump($_POST); die;
        if ($this->model('Jurusan_model')->updateJurusan($_POST) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function delete()
    {
        
        if ($this->model('Jurusan_model')->deleteJurusan($_POST['id']) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }
}
