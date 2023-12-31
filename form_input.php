<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/wheat.png">
    <title>Form input Data Pertanian</title>
</head>

<body>
    <div class="atas">
        <div class="top">
            <img class="icon" src="image/Logo ST2023_Full Color.png" alt="">
            <img class="icon" src="image/Asset alt 2.png" alt="">
        </div>
        <div class="utilities">
            <p>Hallo... Mas Ellon</p>
            <img class="profil" id="profil" src="image/man.png" alt="">
            <div id="menu" class="menu">
                <div class="segitiga">
                </div>
                <div class="opsi">
                    <div class="information">
                        <!-- <p>Masih kosong</p> -->
                        <a href=""><button class="opsi">Information</button></a>
                        <a href=""><button class="opsi">Options</button></a>
                        <a href=""><button class="opsi">Sign Out</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="full">
        <div class="container">
            <div class="shadow">
                <div class="navbar">
                    <div class="parent">
                        <img class="wheat" src="image/wheat.png" alt="">
                        <a href="form_input.php"><button class="button-input">Input Data Pertanian</button></a>
                        <a href="tampil_data.php"><button class="button">Tampil Data Pertanian</button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="header">
                    <div class="judul">
                        <h1>Input Data Pertanian</h1>
                    </div>
                </div>
                <div class="isi">
                    <div class="form">
                        <form action="" method="POST">
                            <table class="table" border="0" cellspacing="19px" cellpadding="0">
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td><input class="input" type="number" name="nik" required></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><input class="input" type="text" size="30" name="nama" required></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><input type="radio" name="jk" value="Laki-laki" id="lk"><label for="lk">
                                            Laki-laki</label>
                                    <td><input type="radio" name="jk" value="Perempuan" id="pr"><label for="pr">
                                            Perempuan</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><input class="input" type="date" name="tgl_lahir" required></td>
                                </tr>
                                <tr>
                                    <td>Luas Lahan</td>
                                    <td>:</td>
                                    <td><input class="input" type="number" name="luas_lahan" required><label for="">
                                            m².</label></td>
                                </tr>
                                <tr valign="top">
                                    <td>Jenis Tanaman &<br>Hasil Panen</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" id="pd_check" name="tanaman[]" value="padi"><label
                                            for="pd_check"> Padi</label><br>
                                        <input type="checkbox" id="jg_check" name="tanaman[]" value="jagung"><label
                                            for="jg_check"> Jagung</label><br>
                                        <input type="checkbox" id="cb_check" name="tanaman[]" value="cabai"><label
                                            for="cb_check"> Cabai</label><br>
                                        <input type="checkbox" id="sg_check" name="tanaman[]" value="singkong"><label
                                            for="sg_check"> Singkong</label><br>
                                        <input type="checkbox" id="sm_check" name="tanaman[]" value="semangka"><label
                                            for="sm_check"> Semangka</label><br>
                                    </td>
                                    <td>
                                        <input class="input-disabled" id="pd" name="hasil[]" type="number"
                                            disabled><label> Kg.</label><br>
                                        <input class="input-disabled" id="jg" name="hasil[]" type="number"
                                            disabled><label> Kg.</label><br>
                                        <input class="input-disabled" id="cb" name="hasil[]" type="number"
                                            disabled><label> Kg.</label><br>
                                        <input class="input-disabled" id="sg" name="hasil[]" type="number"
                                            disabled><label> Kg.</label><br>
                                        <input class="input-disabled" id="sm" name="hasil[]" type="number"
                                            disabled><label> Kg.</label><br>
                                    </td>
                                </tr>
                            </table>
                            <div class="button-action">
                                <input class="button-simpan" name="submit" type="submit" value="Simpan">
                                <input class="button-batal" name="batal" type="reset" value="Batal">
                            </div>
                        </form>
                    </div>
                    <div class="patern">
                        <div class="gambar">
                            <img class="gambar1" src="image/bang.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/script.js"></script>
</body>

</html>


<?php

include_once 'koneksi.php';

if (isset($_POST['submit'])) {

    if ($_POST['nik'] && $_POST['jk'] && $_POST['tanaman'] && $_POST['hasil'] !== null) {

        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jk'];
        $ttl = $_POST['tgl_lahir'];
        $luas_lahan = $_POST['luas_lahan'];
        $jenis_tanaman = $_POST['tanaman'];
        $hasil = $_POST['hasil'];

        try {

            $koneksi->begin_transaction();

            $koneksi->query("INSERT INTO petani (nik, nama, jenis_kelamin, tanggal_lahir, luas_lahan) VALUES ('$nik','$nama','$jenis_kelamin','$ttl','$luas_lahan')");

            foreach ($jenis_tanaman as $tanaman) {

                $lama_tanam = mysqli_fetch_object($koneksi->query("SELECT lama_tanam FROM tanaman WHERE jenis_tanaman='$tanaman'"));

                $lama_tanam = $lama_tanam->lama_tanam;

                $koneksi->query("INSERT INTO hasil (nik, jenis_tanaman, lama_tanam, hasil) VALUES ('$nik','$tanaman','$lama_tanam', 0)");

            }

            $commit = $koneksi->commit();

            if ($commit) {
                $b = 0;
                foreach ($jenis_tanaman as $tanaman) {
                    while ($b < count($hasil)) {
                        $koneksi->query("UPDATE hasil SET hasil='$hasil[$b]' WHERE nik='$nik' AND jenis_tanaman='$tanaman'");
                        $b++;
                        break;
                    }
                }

                echo "<script>Swal.fire(
                    'Sukses!',
                    'Data berhasil ditambahkan',
                    'success'
                  )</script>";

            }

        } catch (\Throwable $th) {

            $koneksi->rollback();
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Data sudah terdaftar!',
              })
              </script>";

        }

    } else {
        echo "<script>Swal.fire(
            'Data Kosong',
            'Pastikan semua data telah diisi!',
            'warning'
          )</script>";
    }

}

?>