<?php

require __DIR__ . '\..\utility\Session.php';

class DataKelas extends Controller
{
    public function index($id_data_kelas)
    {
        Session::init_session();
        if ($id_data_kelas) {
            $data_kelas = $this->model('DataKelas_model')->getDataKelasById($id_data_kelas);
            // cek apakah yang masuk ke sini itu walinya?
            if ($data_kelas['id_wali'] == Session::get_session("session_data")['id_guru']) {
                // buat view untuk data kelas guru ini
            } else {
                echo "kamu bukan wali kelas ini ngapain kesini??";
            }
        } else {
            $data['data_kelas'] = $this->model('DataKelas_model')->getAllDataKelas();
    
            // data for insert
            $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
            $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
            $data['guru_not_wali'] = $this->model("Guru_model")->getGuruNotWaliKelas();
            $data['tahun'] = $this->model("Tahun_model")->getAllTahun();
            $data['data_siswa'] = $this->model('Siswa_model')->getAllSiswaNoKelas();

            $this->view('data_kelas/index', $data);
        }
    }

    public function insert()
    {
        $totalSiswaCreated = (int) $_POST['totalSiswaCreated'];
        $idIdSiswaArray = [];
        for ($i=0; $i < $totalSiswaCreated; $i++) { 
            $idIdSiswaArray[$i] = $_POST['idSiswa'.($i+1)];
            // update is kelas already mereka 
            $this->model('Siswa_model')->updateIsKelasAlready($idIdSiswaArray[$i]);
        }
        // update is wali kelas
        $this->model('Guru_model')->updateIsWali($_POST['guru']);

        $_POST['id_data_data_siswa'] = implode(',', $idIdSiswaArray);


        if ($this->model('DataKelas_model')->insertDataKelas($_POST) > 0) { // kalo saya panggil model lalu di dalalmya saya panggil method tambahdatamahasiswa yg mengirimkan nilai $_POST itu lebih besar dari 0 //  berarti ada baris baru yg ditambahkan
            // set flash message
            // Flasher::setFlash('berhasil ', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else { // kalo gagal
            // Flasher::setFlash('gagal ', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/');
            exit;
        }
    }
}
