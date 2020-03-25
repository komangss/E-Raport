<?php
// pakai nama user_model supaya tidak bentrokan dengan siapa tau buat class user di controller 
class Guru_model
{
    private $table = 'guru',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGuru()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGuruById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_guru=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertDataGuru($data)
    {
        $query = "INSERT INTO Guru
                    VALUES ('', :nama_guru, :nis, :password)";

        $this->db->query($query);
        $this->db->bind('nama_Guru', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        // buat ngembaliin data
        return $this->db->rowCount();
    }

    public function updateDataGuru($data)
    {
        $query = "UPDATE Guru SET
                    nama_guru = :nama,
                    nip = :nip,
                    password = :password
                  WHERE id_Guru = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchDataGuru($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM $this->table WHERE nama_guru LIKE :keyword"; // gabisa pake %keyword% sekarang karena nanti kalo stmt->prepare() punyanya PDO nanti ga bakal jalan
        $this->db->query($query);
        // persennya taruh disini
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function deleteGuruById($id) {
        $query = "DELETE FROM $this->table WHERE id_guru LIKE :id"; // gabisa pake %keyword% sekarang karena nanti 
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        return $this->db->rowCount();
    }

    // dibuat saat buat data kelas
    public function getGuruNotWaliKelas() {
        $this->db->query("SELECT * FROM $this->table WHERE is_wali_kelas=0");
        return $this->db->resultSet();
    }

    public function updateIsWali($id)
    {
        $query = "UPDATE $this->table SET
                    is_wali_kelas = 1
                  WHERE id_guru = $id";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
