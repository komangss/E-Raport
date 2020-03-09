<?php

class Auth_model
{
    private $table_siswa = 'siswa', $table_guru = 'guru',
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    function loginSiswa($input)
    {
        // Validate the login form inputs.
        $this->db->query('SELECT * FROM ' . $this->table_siswa . ' WHERE nama_siswa=:nama_siswa');
        $this->db->bind('nama_siswa', $input['username']);

        $result = $this->db->single();

        if ($result) {
            // user nya ada... cek passwordnya

            // UNTUK SEMENTARA PAKAI CEK BIASA DULU PAS DI REGISTER PASSWORD DI PAKAI HASh BARU 
            // PAKAI password_verify
            // if (password_verify($input['password'], $result['password'])) {

            if ($result['password'] == $input['password']) {
                // buat session
                $session_data = [
                    "is_active" => 1,
                    "id_siswa" => $result['id_siswa']
                ];
                Session::put_session("session_data", $session_data);
                header("Location: ", "/siswa"); // header nya gamaw
            } else {
                // password salah
                echo "password salah";
            }
        } else {
            echo "ga ada user yang terdaftar";
            // ga ada user yang terdaftar
        }
        // Check if the provided password fits the hashed password in the
        // database.

        // Write all necessary data into the session as the login has been
        // successful.
    }

    function loginGuru($input)
    {
    }
}
