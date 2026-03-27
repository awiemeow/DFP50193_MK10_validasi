<!DOCTYPE html>
<html>
<head>
<title>Proses Permohonan</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="body">

<div class="container">

<h2 class="title">Keputusan Permohonan</h2>

<?php

$nama = $_POST['nama'];
$matrik = $_POST['matrik'];
$umur = $_POST['umur'];
$tarikh = $_POST['tarikh'];
$program = $_POST['program'];
$jenis = $_POST['jenis'] ?? "";
$spec = $_POST['spec'] ?? [];
$alasan = $_POST['alasan'];

$error = false;

if($nama == ""){
    echo "<p class='error'>Nama tidak boleh kosong</p>";
    $error = true;
}

if($matrik == ""){
    echo "<p class='error'>No Matrik tidak boleh kosong</p>";
    $error = true;
}

if($umur == ""){
    echo "<p class='error'>Umur tidak boleh kosong</p>";
    $error = true;
}

if($tarikh == ""){
    echo "<p class='error'>Tarikh tidak boleh kosong</p>";
    $error = true;
}

if($program == ""){
    echo "<p class='error'>Program mesti dipilih</p>";
    $error = true;
}

if($jenis == ""){
    echo "<p class='error'>Jenis komputer mesti dipilih</p>";
    $error = true;
}

if(empty($spec)){
    echo "<p class='error'>Sila pilih sekurang-kurangnya satu spesifikasi</p>";
    $error = true;
}

if($alasan == ""){
    echo "<p class='error'>Alasan tidak boleh kosong</p>";
    $error = true;
}
else if(strlen($alasan) < 25){
    echo "<p class='error'>Alasan mesti sekurang-kurangnya 25 aksara</p>";
    $error = true;
}

if(!$error){

    echo "<p class='success'>Permohonan berjaya dihantar!</p>";

    echo "<p class='info'>Nama: $nama</p>";
    echo "<p class='info'>No Matrik: $matrik</p>";
    echo "<p class='info'>Umur: $umur</p>";
    echo "<p class='info'>Tarikh: $tarikh</p>";
    echo "<p class='info'>Program: $program</p>";
    echo "<p class='info'>Jenis Komputer: $jenis</p>";

    echo "<p class='info'>Spesifikasi:</p>";

    foreach($spec as $s){
        echo "<li class='info'>$s</li>";
    }

    echo "<p class='info'>Alasan: $alasan</p>";
}

?>

<br><br>

<a href="borang.php" class="link">Kembali ke Borang</a>

</div>

</body>
</html>