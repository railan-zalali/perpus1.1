<?php


class home extends Controller
{

    public function index()
    {
        $data['judul'] = 'Utama';

        // $data['pinjam'] = $this->model('Admin_model')->getPinjam();
        // $data['kls'] = $this->model('Admin_model')->getKelas();
        // $data['buku'] = $this->model('Admin_model')->getBuku();
        // $data['anggota'] = $this->model('Admin_model')->getAnggota();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }






    public function proses_register()
    {
        if ($this->model('perpus_model')->register($_POST) > 0) {
            Flasher::setLogin('Berhasil', 'Registrasi', 'success');
            header('Location: ' . BASEURL . '/home/index');
            exit;
        } else {
            Flasher::setLogin('Gagal', 'Registrasi', 'error');
            header('Location: ' . BASEURL . '/home/register');
            exit;
        }
    }



    public function proses_login()
    {

        if ($this->model('perpus_model')->login_user($_POST['username'], $_POST['password']) !== 'error') {
            if (isset($_SESSION['user'])) {
                Flasher::setLogin('Berhasil', 'Login', 'success');
                header('Location: ' . BASEURL . '/home/index');
                exit;
            }
        } else {
            $_SESSION['error'] = true;
            Flasher::setLogin('Gagal', 'Login', 'error');
            header('Location: ' . BASEURL . '/home/login');
            exit;
        }
    }




    public function cari()
    {
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Utama';
            $data['pinjam'] = $this->model('perpus_model')->caridata();
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        } else {
            $_SESSION['error'] = true;
            Flasher::setLogin('Gagal', 'Kamu Harus Login Terlebih Dahulu', 'error');
            header('Location: ' . BASEURL . '/home/login');
            exit;
        }
    }
}
