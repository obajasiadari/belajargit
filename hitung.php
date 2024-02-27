<html>

<head>
    <title>Tutorial Menghitung Total Bayar dengan Script PHP</title>
</head>

<body>
    <h3>Form Hitung Total Bayar</h3>
    <form method="POST">
        <table>
            <tr>
                Bagi Lansia diskon 10%
            </tr>
            <br><br>
            <a href="index.html/">Kembali ke Halaman Tiket</a>
            <br><br>
            <select name="kelas" id="kelas" class="form-control">
                <option value="10000" name="kelas" id="ekonomi">Ekonomi</option>
                <option value="50000" nama="kelas" id="bisnis">Bisnis</option>
                <option value="200000" name="kelas" id="eksekutif"> Eksekutif</option>
                <!--<tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga" value="10000"></td>
                    <input type="hidden" name="a" value="10000">
                    <label for="harga" name="harga" value="10000"></label>
                    <input type="hidden" name="b" value="8000">
                -->
                </tr>
                <tr>
                    <td>Normal</td>
                    <td>:</td>
                    <td><input type="text" name="normal"></td>
            </select>
            </td>
            </tr>
            <tr>
                <td>Lansia</td>
                <td>:</td>
                <td><input type="text" name="lansia"></td>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil :</h3>
    <!-- Coding PHP hitung total bayar ketik disini    qty*-(harga*nama)-->
    <?php
    if (isset($_POST['hitung'])) {
        $kelas = $_POST['kelas'];
        $kelas1 = intval($kelas); //AMAN
        $normal =  $_POST['normal'];
        $normal1 = intval($normal);
        $jumlah_normal = $normal1 * $kelas;

        $lansia = $_POST['lansia'];
        $lansia1 = intval($lansia);
        $lansia2 = $lansia1 * $kelas1;
        $diskon = $lansia2 * 90 / 100;
        $lansia3 = $kelas1 * $lansia1; //AMAN
        $diskon2 = $lansia3 - $diskon;


        $total = $diskon + $jumlah_normal;


        echo "
            <table border='1' cellpadding='4'>
                <tr>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                    <td>Total Harga</td>
                </tr>
                <tr>
                    <td align='right'>";
        echo number_format($jumlah_normal, 0, ',', '.');
        echo "</td>
                    <td align='right'>";
        echo number_format($diskon, 0, ',', '.');
        echo "</td>
                    <td align='right'>";
        echo number_format($total, 0, ',', '.');
        echo "</td>
                </tr>
            </table>
        ";
    }
    ?>
    <a href="cetak2.php" target="_BLANK">PRINT</a>

</body>

</html>