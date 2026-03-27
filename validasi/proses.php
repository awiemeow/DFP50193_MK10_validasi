<?php

if (isset($_POST['hantar'])) {

    $nama   = $_POST['nama'];
    $matrik = $_POST['matrik'];
    $umur   = $_POST['umur'];
    $tarikh = $_POST['tarikh'];
    $program = $_POST['program'];
    $jenis  = $_POST['jenis'];
    $alasan = $_POST['alasan'];

    // checkbox (array)
    if (isset($_POST['spec'])) {
        $spec = implode(", ", $_POST['spec']);
    } else {
        $spec = "Tiada";
    }

    // Papar data (sementara)
    echo "<h2>Maklumat Permohonan</h2>";
    echo "Nama: $nama <br>";
    echo "No Matrik: $matrik <br>";
    echo "Umur: $umur <br>";
    echo "Tarikh: $tarikh <br>";
    echo "Program: $program <br>";
    echo "Jenis Komputer: $jenis <br>";
    echo "Spesifikasi: $spec <br>";
    echo "Alasan: $alasan <br>";

}
?>
