<?php
// pakai nama user_model supaya tidak bentrokan dengan siapa tau buat class user di controller 
class Siswa_model
{
    private $table = 'siswa',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllSiswaNoKelas()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE is_kelas_already=0');
        return $this->db->resultSet();
    }

    public function getSiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_siswa=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertDataSiswa($data)
    {
        $query = "INSERT INTO siswa
                    VALUES ('', :nama_siswa, :nis, :password, :is_kelas_already)";

        $this->db->query($query);
        $this->db->bind('nama_siswa', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('is_kelas_already', $data['is_kelas_already']);

        $this->db->execute();

        // buat ngembaliin data
        return $this->db->rowCount();
    }

    public function updateDataSiswa($data)
    {
        $query = "UPDATE siswa SET
                    nama_siswa = :nama,
                    nis = :nis,
                    password = :password
                  WHERE id_siswa = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchDataSiswa($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM $this->table WHERE nama_siswa LIKE :keyword"; // gabisa pake %keyword% sekarang karena nanti kalo stmt->prepare() punyanya PDO nanti ga bakal jalan
        $this->db->query($query);
        // persennya taruh disini
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function deleteSiswaById($id) {
        $query = "DELETE FROM $this->table WHERE id_siswa LIKE :id"; // gabisa pake %keyword% sekarang karena nanti 
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        return $this->db->rowCount();
    }

    public function updateIsKelasAlready($id)
    {
        $query = "UPDATE siswa SET
                    is_kelas_already = 1
                  WHERE id_siswa = $id";

        $this->db->query($query);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
