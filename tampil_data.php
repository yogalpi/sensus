<?php

require_once 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="icon" type="image/x-icon" href="image/wheat.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Press+Start+2P&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
        }

        .atas {
            display: flex;
        }

        .full {
            height: 92vh;
        }

        .top {
            width: 50vw;
            height: 8vh;
            display: flex;
            align-items: center;
            background-color: #F5F5F5;
        }

        .container {
            display: flex;
            place-items: center;
            justify-content: center;
            background-color: #F5F5F5;
            height: 92vh;
        }

        .icon {
            height: 6.5vh;
            margin-left: 3vh;
            margin-top: 3vh;

        }

        .utilities {
            width: 50vw;
            height: 8vh;
            background-color: #F5F5F5;
            display: flex;
            place-items: center;
            justify-content: right;
        }

        p {
            margin-top: 4vh;
            font-size: 1.2vw;
            margin-right: -5vh;
            font-style: italic;
            font-weight: bold;
        }

        .profil {
            margin-top: 4vh;
            margin-left: 4vw;
            margin-right: 5vw;
            background-color: white;
            height: 8vh;
            border-radius: 50%;
            box-shadow: 5px 5px 6px #D1E9D2;
        }

        .parent>.button:first-child {
            display: inline;
            text-align: center;
            margin-top: 10vh;
        }

        .shadow {
            box-shadow: 20px 20px 20px #D1E9D2;
            border-radius: 10px 10px 10px 10px;
            width: 15vw;
            height: 80vh;
        }

        .navbar {
            border-radius: 10px 10px 10px 10px;
            width: 15vw;
            height: 80vh;
            background-color: #95C11F;
            display: inline-block;
            text-align: center;
            overflow: hidden;
            box-shadow: inset 0 0 10px #006633;
        }

        .wheat {
            margin-left: -8vw;
            height: 60vh;
            opacity: 85%;
        }

        .button {
            height: 6vh;
            width: 13vw;
            margin-top: .5vh;
            margin-bottom: 2.5vh;
            border: none;
            border-radius: 13px;
            font-weight: bold;
            letter-spacing: 1px;
            color: #006633;
            transition: .7s;
        }

        .button-tampil {
            height: 6vh;
            width: 13vw;
            margin-top: .5vh;
            margin-bottom: 2.5vh;
            border: none;
            border-radius: 13px;
            font-weight: bold;
            letter-spacing: 1px;
            color: white;
            transition: .7s;
            background-color: #006633;
        }

        .button:hover {
            background-color: #006633;
            color: white;
        }


        .content {
            border-radius: 10px 10px 10px 10px;
            box-shadow: 20px 20px 20px #D1E9D2;
            width: 75vw;
            height: 80vh;
            background-color: white;
            display: inline;
        }

        table {
            margin-top: -1vh;
            height: 55vh;
        }

        .judul {
            /* background-color: red; */
            height: 10vh;
            width: 75vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .isi {
            display: flex;
        }

        .form {
            /* background-color: tomato; */
            margin-left: 1vw;
            margin-right: 1vw;
            margin-top: 2vw;
            height: 70vh;
            width: 75vw;
        }

        .patern {
            display: flex;
            justify-content: end;
            align-items: end;
            /* background-color: aqua; */
            width: 15vw;
        }

        .gambar {
            margin-right: 6px;
        }

        .gambar1 {
            height: 20vh;
        }

        .button-action {
            /* background-color: red; */
            padding-top: 4vh;
            text-align: center;
        }

        .table {
            padding-top: 1vw;
            padding-left: 14vh;
        }

        .button-simpan {
            width: 6vw;
            height: 5vh;
            margin-right: 2.5vh;
            background-color: #146C94;
            border-radius: 11px;
            border: none;
            font-weight: bold;
            letter-spacing: 1px;
            color: white;
            transition: .7s;
        }

        .button-simpan:hover {
            width: 6vw;
            height: 5vh;
            margin-right: 2.5vh;
            background-color: #19A7CE;
            letter-spacing: 1px;
            border: solid 2px;
            border-color: #146C94;
            color: white;
        }

        .button-batal {
            margin-left: 2.5vh;
            width: 6vw;
            height: 5vh;
            background-color: #ca5800;
            border-radius: 11px;
            border: none;
            font-weight: bold;
            letter-spacing: 1px;
            color: white;
            transition: .7s;
        }

        .button-batal:hover {
            width: 6vw;
            height: 5vh;
            margin-left: 2.5vh;
            background-color: #FFA41B;
            letter-spacing: 1px;
            border: solid 2px;
            border-color: #ca5800;
            color: white;
        }

        .input {
            height: 3.4vh;
            border-radius: 7px;
            padding-left: 1vh;
            padding-right: 1vh;
            outline: none;
            border-color: #F5F5F5;
            box-shadow: 1px 1px 2px #F5F5F5;
            /* border-color: #ffffff; */
            caret-color: cadetblue;
        }


        input[type=checkbox] {
            margin-bottom: 2vh;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .input:focus {
            outline: none;
            /* important */
            height: 3.4vh;
            border-radius: 7px;
            padding-left: 1vh;
            padding-right: 1vh;
            border: 2px solid #95C11F;
            box-shadow: 1px 1px 2px #F5F5F5;
        }

        .navigasi {
            /* background-color: red; */
            margin-top: 4vh;
            text-align: center;
        }

        a {
            text-decoration: none;
            margin: 0 .6vw 0 .6vw;
            color: black;
        }
    </style>
    <title>Daftar Data Pertanian</title>
</head>

<body>
    <div class="atas">
        <div class="top">
            <img class="icon" src="image/Logo ST2023_Full Color.png" alt="">
            <img class="icon" src="image/Asset alt 2.png" alt="">
        </div>
        <div class="utilities">
            <p>Hallo... Mas Ellon</p>
            <img class="profil" src="image/man.png" alt="">
        </div>
    </div>
    <div class="full">
        <div class="container">
            <div class="shadow">
                <div class="navbar">
                    <div class="parent">
                        <img class="wheat" src="image/wheat.png" alt="">
                        <a href="form_input.php"><button class="button">Input Data Pertanian</button></a>
                        <a href="tampil_data.php"><button class="button-tampil">Tampil Data Pertanian</button></a>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="header">
                    <div class="judul">
                        <h1>Daftar Data Pertanian</h1>
                    </div>
                </div>
                <div class="isi">
                    <div class="form">
                        <table class="table is-hoverable">
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Luas Lahan</th>
                                <th>Cek Detail</th>
                                <th>Opsional</th>
                            </tr>
                            <?php 
                            
                            $batas = 6;
                            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                            $previous = $halaman - 1;
                            $next = $halaman + 1;

                            $data = mysqli_query($koneksi, "SELECT nik,nama,jenis_kelamin,tanggal_lahir,luas_lahan FROM petani");
                            $jumlah_data = mysqli_num_rows($data);
                            $total_halaman = ceil($jumlah_data / $batas);

                            $query = mysqli_query($koneksi, "SELECT nik,nama,jenis_kelamin,tanggal_lahir,luas_lahan FROM petani LIMIT $halaman_awal , $batas");
                            
                            $nomor = $halaman + 1;
                            while ($data = mysqli_fetch_object($query)) : 
                            
                            ?>
                                <tr>
                                    <td><?= $data->nik; ?></td>
                                    <td><?= $data->nama; ?></td>
                                    <td><?= $data->jenis_kelamin; ?></td>
                                    <td><?= $data->tanggal_lahir; ?></td>
                                    <td><?= $data->luas_lahan; ?></td>
                                    <td style="text-align:center;"><a href=""><i class="fa-regular fa-eye fa-xl" style="color: #9DB2BF;"></i></a></td>
                                    <td style="text-align:center;"><a href=""><i class="fa-regular fa-pen-to-square fa-xl" style="color: #9DB2BF;"></i></a>
                                        <a href=""><i class="fa-solid fa-trash fa-xl" style="color: #9DB2BF; margin-left: 1vw;"></i></a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </table>

                        <div class="navigasi">
                            <a <?php if($halaman > 1){ echo "href='?halaman='$previous'";} ?>><i class="fa-solid fa-chevron-right fa-rotate-180 fa-2xl" style="color: #9DB2BF; margin-right:2vw;"></i></a> 
                            
                            <?php for($x=1;$x<=$total_halaman;$x++):?>
                                <a href="?halaman=<?= $x; ?>"><b> <?= $x; ?> </b></a> 
                            <?php endfor; ?>

                            <a <?php if($halaman < $total_halaman){ echo "href='?halaman=$next'"; } ?>><i class="fa-solid fa-chevron-right fa-2xl" style="color: #9DB2BF; margin-left: 2vw;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/59ba3b5196.js" crossorigin="anonymous"></script>

</html>