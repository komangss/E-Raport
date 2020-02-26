<?php
// pakai nama user_model supaya tidak bentrokan dengan siapa tau buat class user di controller 
class Tahun_model
{
    private $table = 'tahun',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTahun()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTahunById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_tahun=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertDataTahun($data)
    {
        $query = "INSERT INTO tahun
                    VALUES ('', :tahun)";

        $this->db->query($query);
        $this->db->bind('tahun', $data['tahun']);

        $this->db->execute();

        // buat ngembaliin data
        return $this->db->rowCount();
    }

    public function updateTahun($data)
    {
        $query = "UPDATE tahun SET
                    tahun = :tahun
                  WHERE id_tahun = :id";

        $this->db->query($query);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchTahun($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM $this->table WHERE tahun LIKE :keyword"; // gabisa pake %keyword% sekarang karena nanti kalo stmt->prepare() punyanya PDO nanti ga bakal jalan
        $this->db->query($query);
        // persennya taruh disini
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function deleteTahun($id) {
        $query = "DELETE FROM tahun WHERE id_tahun= :id_tahun"; // gabisa pake %keyword% sekarang karena nanti 
        $this->db->query($query);
        $this->db->bind('id_tahun', $id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }
}
