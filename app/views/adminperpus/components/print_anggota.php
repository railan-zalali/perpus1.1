<!DOCTYPE html>
<html>

<head>
    <title>Tombol Buka Kartu Anggota</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            /* width: 210mm; */
            /* Lebar kertas A4 dalam milimeter */
            /* height: 297mm; */
            /* Tinggi kertas A4 dalam milimeter */
            /* margin: 0 auto; */
        }

        .card {
            width: 323px;
            height: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background: #fff;
            margin: 10px;
        }

        .logo {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        .info {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .status {
            font-size: 14px;
            font-weight: bold;
            color: green;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php
    $no = 1;
    foreach ($data['anggota'] as $anggota) : ?>
        <div class="card">
            <img src="<?= BASEURL; ?>/img/logo.png" alt="Logo" class="logo">
            <div class="info">Nama: <?= $anggota['nama_anggota']; ?></div>
            <div class="info">Kelas: <?= $anggota['nama_kelas'] . $anggota['abjad']; ?></div>
            <div class="info">Email: <?= $anggota['email']; ?></div>
            <div class="info">Nomor HP: <?= $anggota['no_hp']; ?></div>
            <div class="status">Status: Aktif</div>
        </div>

    <?php endforeach; ?>
</body>

</html>