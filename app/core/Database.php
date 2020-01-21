<?php

class Database
{
    private $host = DB_HOST,
        $user = DB_USER,
        $pass = DB_PASS,
        $db_name = DB_NAME;

    // variabel untuk koneksi
    private $dbh, $stmt;


    public function __construct()
    {
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->db_name;
        $option = [
            PDO::ATTR_PERSISTENT => true, // untuk membuat database kita terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // untuk mode errornya tampilkan exception
        ];

        // cek apakah koneksinya berhasil atau tidak
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass,$option); // satu lagi parameter baru untuk optionnya. biasanya digunakan untuk mengoptimasi database kitA
        } catch (PDOException $e) { // ketika error tangkap exceptionya lalu masukan ke variabel e
            die($e->getMessage());
        }
    }


    public function query($query) // ini akan kita buat jadi generic, jadi querynya bisa dipakai untuk apapun. baik select/insert/update/delete.
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // kalo sudah querynya disiapin kita siapin binding nya. siapa tau di dalam querynya ada WHERE, misalkan
    public function bind($param,$value,$type = null) 
    {
        if (is_null($type)) {
            switch ( true ) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    // kita asumsikan adalah string
                    $type = PDO::PARAM_STR;
            }
            // kenapa kita bind? kenapa kita gak masukin kedalam querynya? : supaya aman. dengan ini pasti terhindar dari sql injection. karena query di eksekusi setelah querynya dibersihin duli
        }
        $this->stmt->bindValue($param,$value,$type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    // kita tentukan. setelah di eksekusi pengen hasilnya banyak atau cuma satu aja

    // kalo banyak 

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // kalo satu 
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function rowCount()
    {
        return $this->stmt->rowCount(); // ini methodnya PDO
    }



}
