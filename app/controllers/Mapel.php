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
            header('Content-Type: application/json');
            $json = json_encode(array($_POST['idkelas'], "post berhasil"));
            echo $json;
        } else {
            header('Content-Type: application/json');
            $json = json_encode(array("gagal post"));
            echo $json;
        }
    }
} 