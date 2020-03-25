<?php
class DataKelas_model
{
    private $table = 'data_kelas',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataKelas()
    {

        $this->db->query(
            'SELECT data_kelas.index, jurusan.nama_jurusan, guru.nama_guru, kelas.nama_kelas
            FROM data_kelas 
            INNER JOIN kelas 
                ON data_kelas.id_kelas = kelas.id_kelas
            INNER JOIN jurusan
                ON data_kelas.id_jurusan = jurusan.id_jurusan
            INNER JOIN guru
                ON data_kelas.id_wali = guru.id_guru
            INNER JOIN tahun
                ON data_kelas.id_tahun = tahun.id_tahun'
            );
        return $this->db->resultSet();
    }

    public function insertDataKelas($data)
    {

        $idKelas = $data['kelas'];
        $idJurusan = $data['jurusan'];
        $index = $data['index'];
        $idWali = $data['guru'];
        $idDataDataSiswaString = $data['id_data_data_siswa'];
        $idTahun = $data['tahun'];


        $query = "INSERT INTO data_kelas
                    VALUES ('', :id_kelas, :id_jurusan, :index, :id_wali, :id_data_data_siswa, :id_tahun)";

        $this->db->query($query);
        $this->db->bind('id_kelas', $idKelas);
        $this->db->bind('id_jurusan', $idJurusan);
        $this->db->bind('index', $index);
        $this->db->bind('id_wali', $idWali);
        $this->db->bind('id_data_data_siswa', $idDataDataSiswaString);
        $this->db->bind('id_tahun', $idTahun);
      
        $this->db->execute();

        // buat ngembaliin data
        return $this->db->rowCount();
    }
}
