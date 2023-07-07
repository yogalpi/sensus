<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <img class="profil" src="image/man.png" alt="">
        </div>
    </div>
    <div class="full">
        <div class="container">
            <div class="shadow">
                <div class="navbar">
                    <div class="parent">
                        <img class="wheat" src="image/wheat.png" alt="">
                        <button class="button">Input Data Pertanian</button>
                        <button class="button">Tampil Data Pertanian</button>
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
                                    <td><input class="input" type="number" required></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><input class="input" type="text" size="30" required></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><input type="radio" name="jk" value="Laki-laki" id="lk"><label for="lk"> Laki-laki</label>
                                    <td><input type="radio" name="jk" value="Perempuan" id="pr"><label for="pr"> Perempuan</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><input class="input" type="date" required></td>
                                </tr>
                                <tr>
                                    <td>Luas Lahan</td>
                                    <td>:</td>
                                    <td><input class="input" type="number" required><label for=""> m².</label></td>
                                </tr>
                                <tr  valign="top">
                                    <td>Jenis Tanaman &<br>Hasil Panen</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" id="pd" value=""><label for="pd"> Padi</label> <br>
                                        <!-- <input type="checkbox" id="jg"><label for="jg"><label for=""> Jagung</label> <br>
                                        <input type="checkbox" id="pd"><label for="pd"><label for=""> Cabai</label> <br>
                                        <input type="checkbox" id="pd"><label for="pd"><label for=""> Singkong</label> <br>
                                        <input type="checkbox" id="pd"><label for="pd"><label for=""> Semangka</label>  -->
                                    </td>
                                    <td>
                                        <input class="input" type="number" size="5" disabled><label for=""> Kg.</label><br>
                                    </td>
                                </tr>
                            </table>
                                <div class="button-action">
                                    <input class="button-simpan" type="submit" value="Simpan">
                                    <input class="button-batal" type="reset" value="Batal">
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

</body>
</html>