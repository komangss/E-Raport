<?php


class Session
{

    /**
     * Delete: Deletes the value of a specific key of the session.
     * @access public
     * @param string $key
     * @return boolean
     * @since 1.0.1
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
     * @since 1.0.1
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
     * @since 1.0.1
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
     * @since 1.0.1
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
     * @since 1.0.1
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
     * @since 1.0.1
     */
    public static function put_session($key, $value)
    {
        return ($_SESSION[$key] = $value);
    }
}
