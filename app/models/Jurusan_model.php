<?php
// pakai nama user_model supaya tidak bentrokan dengan siapa tau buat class user di controller 
class Jurusan_model
{
    private $table = 'jurusan',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJurusan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getJurusanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_jurusan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertJurusan($data)
    {
        $query = "INSERT INTO jurusan
                    VALUES ('', :nama_jurusan)";

        $this->db->query($query);
        $this->db->bind('nama_jurusan', $data['nama_jurusan']);
      
        $this->db->execute();

        // buat ngembaliin data
        return $this->db->rowCount();
    }

    public function updateJurusan($data)
    {
        $query = "UPDATE jurusan SET
                    nama_jurusan = :nama
                  WHERE id_jurusan = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }       

    public function searchJurusan($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM $this->table WHERE nama_jurusan LIKE :keyword"; // gabisa pake %keyword% sekarang karena nanti kalo stmt->prepare() punyanya PDO nanti ga bakal jalan
        $this->db->query($query);

        // persennya taruh disini
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

    public function deleteJurusan($id) 
    {
        $query = "DELETE FROM jurusan WHERE id_jurusan = :id_jurusan";  
        $this->db->query($query);
        $this->db->bind('id_jurusan', $id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }
}
