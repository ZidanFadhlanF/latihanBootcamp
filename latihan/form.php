<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian</title>
</head>
<body>
    <fieldset>
        <legend>Form Pembelian</legend>
        <pre>------------------------------------------</pre>
    <h4>******Toko Cat Guna Bangun Jaya******</h4>
        <pre>------------------------------------------</pre>
    <form action="tampil.php" method="POST">
        <pre>Nama Customer : <input type="text" name="Nama"></pre>
        <pre>Alamat        : <input type="text" name="Alamat"></pre>
        <pre>Jenis Cat     : <select name="Jenis_Cat" id="">
            <option value="-">-</option>
            <option value="Bituminous Paint">Bituminous Paint</option>
            <option value="Chlorinated Rubber">Chlorinated Rubber</option>
            <option value="Vinyl">Vinyl</option>
        </select></pre>
        <pre>Warna Cat     : <input type="radio" name="Warna" id="" value="Merah">Merah <input type="radio" name="Warna" id="" value="Biru">Biru <input type="radio" name="Warna" id="" value="Kuning">Kuning</pre>
        <pre>Jumlah Beli   : <input type="text" name="jumlah_beli"></pre>
        <pre>------------------------------------------</pre>
        <input type="submit" name="btn_hitung" value="Hitung">
        <input type="reset" name="btn_batal" value="Batal">
        <pre>------------------------------------------</pre>
    </form>
    </fieldset>
</body>
</html>
