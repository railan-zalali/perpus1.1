<?php
class users_logout
{

    public function logout()
    {
        $_SESSION[''];
        session_unset();
        session_destroy();
        header('location: ' . BASEURL . '/home/login');
    }
}
