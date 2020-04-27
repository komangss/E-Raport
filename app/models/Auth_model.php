<?php

use Utility\Session;

class Auth_model
{
    private $table_siswa = 'siswa', $table_guru = 'guru',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($input)
    {
        $this->db->query('SELECT * FROM user WHERE username= :username');
        $this->db->bind('username', $input['username']);
        $this->db->execute();
        $data = [];
        $data['user'] = $this->db->single();
        $data['rowCount'] = $this->db->rowCount();
        return $data;
        // if ($this->db->rowCount() > 0) {
        //     if ($user['password'] == $input['password']) {
        //         // buat session
        //         $session_data = [
        //             "is_active" => 1,
        //             "id_guru" => $user['id_guru'],
        //             "id_data_kelas" => $user['id_data_kelas']
        //         ];
        //         Session::setFlash('selamat login anda telah berhasil', 'success');
        //         Session::put_session("session_data", $session_data);
        //         header('Location: ' . BASEURL . '/guru/dashboard'); // header nya gamaw
        // } else {
        //     echo "password salah";
        // }
        // } else {
        //     echo "tidak ada username yang terdaftar";
        // }
    }
}
