<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi PMB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="assets/img/iconupj.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- bagian box formulir -->
    <section class="box-formulir">

        <h2 class="alert alert-primary">Pendaftaran Berhasil</h2>

        <div class="box">
            <h4>Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
            <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank"  class="btn btn-primary">Cetak Bukti Daftar</a>
        </div>
    </section>

</body>
</html>