<?php
    include 'koneksi.php';

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran1 WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>
    
    <h2>Bukti Pendaftaran</h2>
    <table class="table-data">
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
            <td><?php echo $p->id_pendaftaran ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $p->nama_lengkap ?></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td><?php echo $p->no_hp ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal lahir</td>
            <td>:</td>
            <td><?php echo $p->tempat_lahir.', '.$p->tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td><?php echo $p->kewarganegaraan ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $p->jenis_kelamin ?></td>
        </tr>
        <tr>
            <td>Alamat Email</td>
            <td>:</td>
            <td><?php echo $p->alamat_email ?></td>
        </tr>
        <tr>
            <td>NIK / No. KTP</td>
            <td>:</td>
            <td><?php echo $p->nik_noktp ?></td>
        </tr>
    </table>
</body>
</html>