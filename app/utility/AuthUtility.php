<?php
namespace Utility;
use Utility\Session as Session;

class AuthUtility {
   
    /**
     * Check Authenticated: Checks to see if the user is authenticated,
     * destroying the session and redirecting to a specific location if the user
     * session doesn't exist.
     * @access public
     * @param string $redirect
     * @since 1.0.2
     */
    public static function checkAuthenticated($redirect = "/login") {
        Session::init_session();
        if (!Session::exists_session("session_data")) {
            Session::destroy_session();
            self::redirectTo(BASEURL . $redirect);
        }
    }

    /**
     * Check Unauthenticated: Checks to see if the user is unauthenticated,
     * redirecting to a specific location if the user session exist.
     * @access public
     * @param string $redirect
     * @since 1.0.2
     */
    public static function checkUnauthenticated($redirect = "") {
        Session::init_session();
        if (Session::exists_session("session_data")) {
            self::redirectTo(BASEURL . $redirect);
        }
    }

    public function redirectTo($location = "")
    {
        header("Location: " . $location);
    }
}

?>