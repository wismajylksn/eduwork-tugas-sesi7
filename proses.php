<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    if (empty($nama) || empty($harga) || empty($deskripsi)) {
        echo "Semua field harus diisi!";
    } else {
        echo "<h3>Data Produk:</h3>";
        echo "Nama: $nama <br>";
        echo "Harga: Rp$harga <br>";
        echo "Deskripsi: $deskripsi <br>";
    }
}
?>
