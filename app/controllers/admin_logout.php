<?php
class Admin_logout
{

    public function logout()
    {
        $_SESSION[''];
        session_unset();
        session_destroy();
        header('location: ' . BASEURL . '/admin/login');
    }
}
