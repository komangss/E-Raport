<?php

class Tahun extends Controller
{
    public function index()
    {
        // Get All
        $data['data_tahun'] = $this->model('Tahun_model')->getAllTahun();

        // get siswa id 1
        $data["tahun_id_1"] = $this->model("Tahun_model")->getTahunById(1);

        if ($_POST['keyword']) {
            $data['tahunFromSearch'] = $this->model('Tahun_model')->searchTahun($_POST
        );
        } else {
            $data['tahunFromSearch'] = "Tahun ajaran tidak tersedia";
        }

        $this->view('templates/header', $data);
        $this->view('tahun/index', $data);
        $this->view('templates/footer');
    }

    public function insert()
    {
        // var_dump($_POST); die;
        if ($this->model('Tahun_model')->insertDataTahun($_POST) > 0) { // kalo saya panggil model lalu di dalalmya saya panggil method tambahdatamahasiswa yg mengirimkan nilai $_POST itu lebih besar dari 0 //  berarti ada baris baru yg ditambahkan
            // set flash message
            // Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/tahun');
            exit;
        } else { // kalo gagal
            // Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/tahun');
            exit;
        }
    }

    public function update()
    {
        $_POST['id'] = 1;
        // var_dump($_POST); die;
        if ($this->model('Tahun_model')->updateTahun($_POST) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/tahun');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/tahun');
            exit;
        }
    }

    public function delete()
    {
        if ($this->model('Tahun_model')->deleteTahun($_POST['id']) > 0) {
            // Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/tahun');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/tahun');
            exit;
        }
    }
}
