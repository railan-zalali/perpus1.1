<?php

class admin extends Controller
{

    public function addpinjam()
    {
        $id_user = $_SESSION['id_user'];
        if ($this->model('admin_model')->addpinjam($_POST, $id_user) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        }
    }
    public function addbuku()
    {
        $id_user = $_SESSION['id_user'];
        if ($this->model('admin_model')->addbuku($_POST, $id_user) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        }
    }
    public function addanggota()
    {
        if ($this->model('admin_model')->addanggota($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        }
    }
    public function addpetugas()
    {
        if ($this->model('admin_model')->addpetugas($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        }
    }












    public function updatepinjam()
    {
        if ($this->model('admin_model')->updatedatapinjam($_POST, $_POST['id_pinjam']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            // var_dump($_POST);
            // die();
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        }
    }

    public function getupdatepinjam($id_pinjam)
    {
        echo json_encode($this->model('admin_model')->getpinjambyid($id_pinjam));
    }

    public function updatebuku()
    {
        if ($this->model('admin_model')->updatedatabuku($_POST, $_POST['id_buku_induk']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            // var_dump($_POST);
            // die();
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        }
    }

    public function getupdatebuku($id_buku_induk)
    {
        echo json_encode($this->model('admin_model')->getbukubyid($id_buku_induk));
    }

    public function updatepetugas()
    {
        if ($this->model('admin_model')->updatedatapetugas($_POST, $_POST['id_user']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        }
    }
    public function getupdatepetugas($id_user)
    {
        echo json_encode($this->model('admin_model')->getpetugasbyid($id_user));
    }
    public function updateanggota()
    {
        if ($this->model('admin_model')->updatedataanggota($_POST, $_POST['id_anggota']) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'error');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        }
    }
    public function getupdateanggota($id_anggota)
    {
        echo json_encode($this->model('admin_model')->getanggotabyid($id_anggota));
    }











    public function deletepinjam($id_pinjam)
    {
        if ($this->model('admin_model')->deletepinjam($id_pinjam) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/pinjam');
            exit;
        }
    }
    public function deletebuku($id_buku_induk)
    {
        if ($this->model('admin_model')->deletebuku($id_buku_induk) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/buku');
            exit;
        }
    }
    public function deletepetugas($id_user)
    {
        if ($this->model('admin_model')->deletepetugas($id_user) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/petugas');
            exit;
        }
    }
    public function deleteanggota($id_anggota)
    {
        if ($this->model('admin_model')->deleteanggota($id_anggota) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'error');
            header('Location: ' . BASEURL . '/admin/anggota');
            exit;
        }
    }










    public function print_anggota()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data pinjam";
            $data['pinjam'] = $this->model('admin_model')->getpinjam();
            $data['kls'] = $this->model('admin_model')->getkelas();
            $data['buku'] = $this->model('admin_model')->getbuku();
            $data['anggota'] = $this->model('admin_model')->getanggota();
            // var_dump($data);
            // die();
            // $this->view('templates/admin/header', $data);
            $this->view('adminperpus/components/print_anggota', $data);
            // $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }
    public function pinjam()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data pinjam";
            $data['pinjam'] = $this->model('admin_model')->getpinjam();
            $data['kls'] = $this->model('admin_model')->getkelas();
            $data['buku'] = $this->model('admin_model')->getbuku();
            $data['anggota'] = $this->model('admin_model')->getanggota();
            // var_dump($data);
            // die();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/pinjam', $data);
            $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }

    public function buku()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data buku";
            $data['buku'] = $this->model('admin_model')->getbuku();
            $data['kls'] = $this->model('admin_model')->getkelas();
            // var_dump($data);
            // die();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/buku', $data);
            $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }
    public function anggota()
    {

        $data['judul'] = "Dashboard";
        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Data petugas";
            $data['anggota'] = $this->model('admin_model')->getanggota();
            $data['kls'] = $this->model('admin_model')->getkelas();
            // var_dump($data);
            // die();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/anggota', $data);
            $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }

    public function petugas()
    {
        if (isset($_SESSION['pegawai']) && isset($_SESSION['id_level']) && $_SESSION['id_level'] == 1) {
            $data['judul'] = "Data petugas";
            $data['user'] = $this->model('admin_model')->getpetugas();
            $data['level'] = $this->model('admin_model')->getlevel();
            $this->view('templates/admin/header', $data);
            $this->view('adminperpus/petugas', $data);
            $this->view('templates/admin/footer');
        } else {

            $this->view('admin/login');
        }
    }

    // public function petugas()
    // {
    //     $data['judul'] = "Dashboard";

    //     if (isset($_SESSION['pegawai'])) {
    //         if ($_SESSION['id_level'] == 1) {
    //             $data['judul'] = "Data petugas";
    //             $data['user'] = $this->model('admin_model')->getpetugas();
    //             $data['level'] = $this->model('admin_model')->getlevel();

    //             $this->view('templates/admin/header', $data);
    //             $this->view('adminperpus/petugas', $data);
    //             $this->view('templates/admin/footer');
    //         } else {
    //             $data['judul'] = "Dashboard";
    //             $data['countbuku'] = $this->model('admin_model')->countbuku();
    //             $data['countpinjam'] = $this->model('admin_model')->countbypinjam();
    //             $data['countkembali'] = $this->model('admin_model')->countbykembali();
    //             $data['countanggota'] = $this->model('admin_model')->countanggota();

    //             $this->view('templates/admin/header', $data);
    //             $this->view('admin/index', $data);
    //             $this->view('templates/admin/footer');
    //         }
    //     } else {
    //         $this->view('admin/login');
    //     }
    // }






    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['countbuku'] = $this->model('admin_model')->countbuku();
        $data['countpinjam'] = $this->model('admin_model')->countbypinjam();
        $data['countkembali'] = $this->model('admin_model')->countbykembali();
        $data['countanggota'] = $this->model('admin_model')->countanggota();
        $data['countpetugas'] = $this->model('admin_model')->countpetugas();
        $data['pinjam'] = $this->model('admin_model')->getpinjam();

        if (isset($_SESSION['pegawai']) && isset($_SESSION['status']) && $_SESSION['status'] === 'aktif') {
            $data['judul'] = "Dashboard";
            $this->view('templates/admin/header', $data);
            $this->view('admin/index', $data);
            $this->view('templates/admin/footer');
        } else {
            $this->view('admin/login');
        }
    }







    public function register()
    {
        // if (isset($_SESSION['pegawai']) && isset($_SESSION['status']) && $_SESSION['status'] === 'aktif') {
        // $data['judul'] = "Dashboard";
        // $this->view('templates/admin/header', $data);
        // $this->view('admin/register');
        // $this->view('templates/admin/footer');
        // } else {

        if (isset($_SESSION['pegawai'])) {
            $data['judul'] = "Dashboard";
            $this->view('templates/admin/header', $data);
            $this->view('admin/index');
            $this->view('templates/admin/footer');
        } else {

            $this->view('admin/register');
        }
    }


    public function admin_register()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $admin_model = $this->model('admin_model');

            if ($admin_model->register_admin($_POST['nama_user'], $_POST['username'], $_POST['email'], $_POST['password']) > 0) {

                Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
                $this->index();
                exit;
                // header('Location: ' . BASEURL . '/admin/index');
            } else {

                Flasher::setFlash('Gagal', 'Ditambahkan', 'error');
                header('Location: ' . BASEURL . '/admin/index');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'Mohon lengkapi semua field', 'error');
            header('Location: ' . BASEURL . '/admin/register');
            exit;
        }
    }



    public function admin_login()
    {
        $loginResult = $this->model('admin_model')->login_admin($_POST['email'], $_POST['password']);

        if ($loginResult !== 'error') {
            if (isset($_SESSION['status']) && $_SESSION['status'] == "aktif") {
                if (isset($_SESSION['pegawai'])) {
                    Flasher::setLogin('Berhasil', 'Login', 'success');
                    header('Location: ' . BASEURL . '/admin/index');
                } else {
                    $_SESSION['error'] = true;
                    Flasher::setLogin('Gagal', 'Login', 'error');
                    header('Location: ' . BASEURL . '/admin/login');
                }
            } else {
                $_SESSION['error'] = true;
                Flasher::setLogin('Gagal', 'Anda Harus Konfirmasi Terlebih Dulu', 'error');
                header('Location: ' . BASEURL . '/admin/login');
            }
        } else {
            $_SESSION['error'] = true;
            Flasher::setLogin('Gagal', 'Login', 'error');
            header('Location: ' . BASEURL . '/admin/login');
        }

        exit;
    }
}
