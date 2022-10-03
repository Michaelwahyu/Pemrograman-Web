<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){

        // ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran1");
        $d = mysqli_fetch_object($getMaxId);
        $generateId ='P'.date('Y').sprintf("%05s", $d->id + 1);

        // proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran1 VALUES (
                '".$generateId."',
                '".$_POST['nama_lengkap']."',
                '".$_POST['no_hp']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['kewarganegaraan']."',
                '".$_POST['jenis_kelamin']."',
                '".$_POST['alamat_email']."',
                '".$_POST['tempat_lahir']."',
                '".$_POST['nik_noktp']."'
        )");

    if($insert){
        echo '<script>window.location="konfirmasipmb.php?id='.$generateId.'"</script>';
    }else{
        echo 'huft'.mysqli_error($conn);
    }

    }
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
</head>
<body>
    
    <!-- bagian box formulir -->
    <section class="box-formulir">

        <h2>Seleksi Penerimaan Mahasiswa Baru</h2>

        <!-- bagian form -->
        <form action="" method="post">

            <div class="box">
                <table class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2022/2023" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="">-- Pilih Salah Satu --</option>
                                <option value="S1 - Desain Produk">S1 - Desain Produk</option>
                                <option value="S1 - Desain Komunikasi Visual">S1 - Desain Komunikasi Visual</option>
                                <option value="S1 - Manajemen">S1 - Manajemen</option>
                                <option value="S1 - Akuntansi">S1 - Akuntansi</option>
                                <option value="S1 - Psikologi">S1 - Psikologi</option>
                                <option value="S1 - Ilmu Komunikasi">S1 - Ilmu Komunikasi</option>
                                <option value="S1 - Informatika">S1 - Informatika</option>
                                <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                                <option value="S1 - Teknik Sipil">S1 - Teknik Sipil</option>
                                <option value="S1 - Arsitektur">S1 - Arsitektur</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Data Diri Calon Mahasiswa</h3>
            <div class="box">
                <table class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama_lengkap" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="no_hp" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="kewarganegaraan">
                                <option value="">-- Pilih Salah Satu --</option>
                                <option value="Afganistan">Afganistan</option>
                                <option value="Arab Saudi">Arab Saudi</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Brunei">Brunei</option>
                                <option value="China">China</option>
                                <option value="Filipina">Filipina</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Irak">Irak</option>
                                <option value="Israel">Israel</option>
                                <option value="Jepang">Jepang</option>
                                <option value="Kamboja">Kamboja</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kirgistan">Kirgistan</option>
                                <option value="Korea Selatan">Korea Selatan</option>
                                <option value="Korea Utara">Korea Utara</option>
                                <option value="Laos">Laos</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maladewa">Maladewa</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Oman">Oman</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jenis_kelamin" class="input-control" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Email</td>
                        <td>:</td>
                        <td>
                            <input type="name" name="alamat_email" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tempat_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>NIK / No. KTP</td>
                        <td>:</td>
                        <td>
                            <input type="name" name="nik_noktp" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Daftar Sekarang" class="btn-daftar">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>

</body>
</html>