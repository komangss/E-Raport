<?php
require_once 'Session.php';

class Flasher
{
    /**
     * function setFlash()
     *
     * berguna untuk persiapan melakukan flash message.
     * data nya akan di taruh di session!
     * 
     * @param string $pesan apa yang ditampilkan
     * @param string $tipe tipe dari alert
     **/
    public static function setFlash($pesan, $tipe)
    {
        Session::init_session();
        Session::put_session('flash', [
            'pesan' => $pesan,
            'tipe' => $tipe
        ]);
    }

    /**
     * function flash()
     *
     * berguna untuk menampilkan flash message.
     * disini akan di cek apakah terdapat flash message.
     * setelah di tampilkan session flash akan dihapus.
     * 
     * @param string $pesan apa yang ditampilkan
     * @param string $tipe tipe dari alert
     **/
    public static function flash()
    {
        Session::init_session();
        if (Session::exists_session('flash')) {
            $flash = Session::get_session('flash');
            echo '
            <div class="alert alert-' . $flash['tipe'] . '">
                <strong>' . $flash['pesan'] . '</strong>
                <button class="btn-alert">X</button>
            </div>';
            // hapus sessionnnya
            Session::delete_session('flash');
        }
    }
}
