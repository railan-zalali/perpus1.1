<?php 
// cek apakah didalam aplikasi tidak terdeteksi session_id maka jalankan session_start
if (!session_id() ) session_start();
require_once '../app/init.php';

$app = new App;