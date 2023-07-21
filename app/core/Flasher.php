<?php 

class Flasher{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash']= [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
        $_SESSION['login']= [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    public static function setLogin($pesan, $aksi, $tipe)
    {
        $_SESSION['login']= [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function Flash()
    {
        
        if (isset($_SESSION['flash'])) {
            echo "<script>
            Swal.fire({
              position: 'center',
              icon: '" . $_SESSION['flash']['tipe'] . "',
              title: '" . $_SESSION['flash']['pesan'] .' '. $_SESSION['flash']['aksi']. "',
              showConfirmButton: false,
              timer: 1300
              });
              </script>";
              unset($_SESSION['flash']);
        }
    }
    public static function Login()
    {
        
        if (isset($_SESSION['login'])) {
            echo "<script>
            Swal.fire({
              position: 'center',
              icon: '" . $_SESSION['login']['tipe'] . "',
              title: 'Kamu " . $_SESSION['login']['pesan'] .' '. $_SESSION['login']['aksi']. "',
              showConfirmButton: false,
              timer: 1300
              });
              </script>";
              unset($_SESSION['login']);
        }
    }
}