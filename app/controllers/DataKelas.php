<?php
class DataKelas extends Controller
{
    public function index()
    {
        $data['data_kelas'] = $this->model('DataKelas_model')->getAllDataKelas();
        // var_dump($data['data_kelas'][0]['nama_kelas']);die;

        // data for insert
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
        $data['guru_not_wali'] = $this->model("Guru_model")->getGuruNotWaliKelas();
        $data['tahun'] = $this->model("Tahun_model")->getAllTahun();
        $data['data_siswa'] = $this->model('Siswa_model')->getAllSiswaNoKelas();
        // var_dump($data['tahun']); die;

        $this->view('data_kelas/index', $data);
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
