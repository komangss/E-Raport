<?php
// pakai nama user_model supaya tidak bentrokan dengan siapa tau buat class user di controller 
class Kelas_model
{
    private $table = 'kelas',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKelas()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKelasById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kelas=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertDataKelas($data)
    {
        $query = "INSERT INTO kelas
                    VALUES ('', :nama_kelas)";

        $this->db->query($query);
        $this->db->bind('nama_kelas', $data['nama_kelas']);

        $this->db->execute();

        // buat ngembaliin data
        return $this->db->rowCount();
    }

    public function updateKelas($data)
    {
        $query = "UPDATE kelas SET
                    nama_kelas = :nama
                  WHERE id_kelas = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchKelas($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM $this->table WHERE nama_kelas LIKE :keyword"; // gabisa pake %keyword% sekarang karena nanti kalo stmt->prepare() punyanya PDO nanti ga bakal jalan
        $this->db->query($query);
        // persennya taruh disini
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function deleteKelas($id) {
        $query = "DELETE FROM kelas WHERE id_kelas= :id_kelas"; // gabisa pake %keyword% sekarang karena nanti 
        $this->db->query($query);
        $this->db->bind('id_kelas', $id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }
}
