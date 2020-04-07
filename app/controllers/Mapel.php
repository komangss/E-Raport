<?php 

class Mapel extends Controller {
    public function index () {
        echo "index";
    }

    public function nilaimurid()
    {
        $this->view("guru/mapel/nilai_murid");
    }

    // url : http://localhost/E-Raport/mapel/testfetch
    public function testfetch() {
        // $json = json_encode(array("anton", "alex"));
        // var_dump($json);die;
        header('Content-Type: application/json');
        return json_encode(array("anton", "alex"));
    }
}