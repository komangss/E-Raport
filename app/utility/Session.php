<?php


class Session
{

    /**
     * Delete: Deletes the value of a specific key of the session.
     * @access public
     * @param string $key
     * @return boolean
     */
    public static function delete_session($key)
    {
        if (self::exists_session($key)) {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }

    /**
     * Destroy: Deletes the session.
     * @access public
     * @return void
     */
    public static function destroy_session()
    {
        session_destroy();
    }

    /**
     * Exists: Checks if a specific key of a session exists.
     * @access public
     * @param string $key
     * @return boolean
     */
    public static function exists_session($key)
    {
        return (isset($_SESSION[$key]));
    }

    /**
     * Get: Returns the value of a specific key of the session if it exists.
     * @access public
     * @param string $key
     * @return string|nothing
     */
    public static function get_session($key)
    {
        if (self::exists_session($key)) {
            return ($_SESSION[$key]);
        }
    }

    /**
     * Init: Starts the session.
     * @access public
     * @return void
     */
    public static function init_session()
    {
        // If no session exist, start the session.
        if (session_id() == "") {
            session_start();
        }
    }

    /**
     * Put: Sets a specific value to a specific key of the session.
     * @access public
     * @param string $key
     * @param string $value
     * @return string
     */
    public static function put_session($key, $value)
    {
        return ($_SESSION[$key] = $value);
    }

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
        self::init_session();
        self::put_session('flash', [
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
        self::init_session();
        if (self::exists_session('flash')) {
            $flash = self::get_session('flash');
            echo '
            <div class="alert alert-' . $flash['tipe'] . '" style="width: 100%;">
                <strong>' . $flash['pesan'] . '</strong>
                <button class="btn-alert">X</button>
            </div>';
            // hapus sessionnnya
            self::delete_session('flash');
        }
    }
}
