<?php

class Perpus_model
{

    private $table = 'user';
    private $table_level = 'level';
    private $table_kelas = 'kelas';
    private $table_anggota = 'anggota';
    private $table_buku = 'buku_induk';
    private $table_pinjam = 'pinjaman';


    private $db;

    public function __construct()
    {
        $this->db = new database;
    }

    // public function getAllPerpus()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultSet();
    // }
    // public function countPerpusByStatus($status = 'dipinjam')
    // {
    //     $this->db->query('SELECT COUNT(*) AS count FROM ' . $this->table . ' WHERE status=:status');
    //     $this->db->bind('status', $status);
    //     $row = $this->db->single();
    //     return $row['count'];
    // }










    public function caridata()
    {
        $keyword = $_POST['keyword'];
        $query = 'SELECT ' .
            $this->table_pinjam . '.*, ' .
            $this->table_buku . '.judul_buku, ' .
            $this->table_anggota . '.nama_anggota, ' .
            $this->table_kelas . '.*
    
FROM ' . $this->table_pinjam . '
JOIN ' . $this->table_buku . ' ON ' . $this->table_pinjam . '.id_buku_induk = ' . $this->table_buku . '.id_buku_induk
JOIN ' . $this->table_anggota . ' ON ' . $this->table_pinjam . '.id_anggota = ' . $this->table_anggota . '.id_anggota
JOIN ' . $this->table_kelas . ' ON ' . $this->table_anggota . '.id_kelas = ' . $this->table_kelas . '.id_kelas
WHERE ' . $this->table_pinjam . '.tanggal LIKE :keyword OR ' . $this->table_buku . '.judul_buku LIKE :keyword OR ' . $this->table_anggota . '.nama_anggota LIKE :keyword';

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }




















    public function register($data)
    {

        $query = "INSERT INTO user
        VALUES 
        ('', null, :nama_user, :username, :email, :password, :keterangan)";

        $this->db->query($query);
        $this->db->bind('nama_user', $data['nama_user']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }







    public function login_user($username, $password)
    {

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username && password = :password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);

        $this->db->execute();
        if ($this->db->rowCount() === 1) {
            $data = $this->db->single();

            if ($password == $data['password']) {
                $_SESSION['id_user'] = $data['id_user'];
                $_SESSION['id_level'] = $data['id_level'];
                $_SESSION['nama_user'] = $data['nama_user'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['user'] = true;
                return $_SESSION['user'];
            }
        }
        $_SESSION['error'] = true;
        return 'error';
    }
}
