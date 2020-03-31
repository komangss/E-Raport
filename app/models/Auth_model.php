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
        $this->db->query('SELECT * FROM ' . $this->table_siswa . ' WHERE nis=:input_nis');
        $this->db->bind('input_nis', $input['username']);

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
                header('Location: ' . BASEURL . '/siswa'); // header nya gamaw
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
        // Validate the login form inputs.
        $this->db->query('SELECT * FROM ' . $this->table_guru . ' WHERE nip=:nip_guru');
        $this->db->bind('nip_guru', $input['username']);

        $result = $this->db->single();


        if ($result) {
            // user nya ada... cek passwordnya

            // UNTUK SEMENTARA PAKAI CEK BIASA DULU PAS DI REGISTER PASSWORD DI PAKAI HASh BARU 
            // PAKAI password_verify
            // if (password_verify($input['password'], $result['password'])) {

            if ($result['password'] == $input['password']) {
                
                $this->db->query("SELECT * FROM data_kelas WHERE id_wali = :id");
                $this->db->bind("id", $result['id_guru']);
                $this->db->execute();

                $result_kelas = $this->db->single();

                // buat session
                $session_data = [
                    "is_active" => 1,
                    "id_guru" => $result['id_guru'],
                    "id_data_kelas" => $result_kelas['id_data_kelas']
                ];
                Session::setFlash('selamat login anda telah berhasil', 'success');
                Session::put_session("session_data", $session_data);
                header('Location: ' . BASEURL . '/guru/dashboard'); // header nya gamaw
            } else {
                // password salah
                echo "password salah";
            }
        } else {
            // ga ada user yang terdaftar
            echo "ga ada user yang terdaftar";
        }
    }
}
