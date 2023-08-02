<html>

<head>
    <title>Menghitung Luas Bangun Datar</title>
</head>

<body>
    <h2>Form Hitung Luas Persegi Panjang</h2>
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <!-- Tulis kode PHP disini -->
    <?php
    if (isset($_POST['submit'])) {
        $panjang    = $_POST['panjang'];
        $lebar        = $_POST['lebar'];

        // menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang * $lebar;
        // menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2 * ($panjang + $lebar);

        echo "Hasil hitung luas persegi panjang adalah sebagai berikut: <br/>";
        echo "Diketahui;<br/>";
        echo "Panjang = $panjang<br/>";
        echo "Lebar = $lebar<br/>";
        echo "Maka luas persegi panjang sama dengan ( $panjang x $lebar ) = $luas_persegi_panjang<br/>";
        echo "Maka keliling persegi panjang sama dengan  2 x ($panjang + $lebar)  = $keliling_persegi_panjang";
    }
    ?>


    <h2>Form Hitung Luas Persegi</h2>
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Sisi</td>
                <td>:</td>
                <td><input type="text" name="sisi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <!-- Tulis kode PHP disini -->
    <?php
    if (isset($_POST['simpan'])) {
        $sisi    = $_POST['sisi'];

        // menghitung luas
        $luas_persegi = $sisi * $sisi * $sisi * $sisi;

        echo "Hasil hitung luas persegi adalah sebagai berikut: <br/>";
        echo "Diketahui;<br/>";
        echo "Lebar = $sisi<br/>";
        echo "Maka luas persegi sama dengan ( $sisi x $sisi x $sisi x $sisi ) = $luas_persegi<br/>";
    }
    ?>


    <h2>Form Hitung Luas Segitiga</h2>
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <!-- Tulis kode PHP disini -->
    <?php
    if (isset($_POST['save'])) {
        $alas    = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // menghitung luas
        $luas_segitiga = 1 / 2 * $alas * $tinggi;

        echo "Hasil hitung luas segitiga adalah sebagai berikut: <br/>";
        echo "Diketahui;<br/>";
        echo "Alas = $alas<br/>";
        echo "Tinggi = $tinggi<br/>";
        echo "Maka luas segitiga sama dengan 1/2 ( $alas x $tinggi ) = $luas_segitiga<br/>";
    }
    ?>


</body>

</html>