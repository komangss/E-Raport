<?php 

class Mapel extends Controller {
    public function index () {
        echo "index";
    }

    public function nilaimurid()
    {
        // cari kelasnya
        $data['data_kelas'] = $this->model('DataKelas_Model')->getAllDataKelas();
        // cari muridnya

        // tampilkan view
        $this->view("guru/mapel/nilai_murid", $data);
    }

    // url : http://localhost/E-Raport/mapel/testfetch
    public function testfetch() {
        header('Content-Type: application/json');
        $json = json_encode(array("anton", "alex"));
        echo $json;
    }
    
    public function getMuridFromKelas()
    {
        if ($_POST) {
            // ambil data kelas by id
            $data_kelas = $this->model('DataKelas_model')->getDataKelasById($_POST['idkelas']);
            $id_id_siswa = explode(',', $data_kelas['id_data_data_siswa']);
            $data_siswa = [];
            // ambil siswa siswa dari kelas tersebut
            for ($i=0; $i < count($id_id_siswa); $i++) { 
                $data_siswa[$i] = $this->model('Siswa_model')->getSiswaById($id_id_siswa[$i]);
            }
            
            header('Content-Type: application/json');
            $json = json_encode($data_siswa);
            echo $json;
        } else {
            header('Content-Type: application/json');
            $json = json_encode(array("gagal post"));
            echo $json;
        }
    }
} 