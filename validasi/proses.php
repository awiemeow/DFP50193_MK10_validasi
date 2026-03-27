<?php
session_start();

$nama = $_POST['nama'] ?? "";
$matrik = $_POST['matrik'] ?? "";
$umur = $_POST['umur'] ?? "";
$tarikh = $_POST['tarikh'] ?? "";
$program = $_POST['program'] ?? "";
$jenis = $_POST['jenis'] ?? "";
$spec = $_POST['spec'] ?? [];
$alasan = $_POST['alasan'] ?? "";

$errors = [];

// Validation
if($nama == ""){
    $errors[] = "Nama tidak boleh kosong";
}

if($matrik == ""){
    $errors[] = "No Matrik tidak boleh kosong";
}

if($umur == ""){
    $errors[] = "Umur tidak boleh kosong";
}

if($tarikh == ""){
    $errors[] = "Tarikh tidak boleh kosong";
}

if($program == ""){
    $errors[] = "Program mesti dipilih";
}

if($jenis == ""){
    $errors[] = "Jenis komputer mesti dipilih";
}

if(empty($spec)){
    $errors[] = "Sila pilih sekurang-kurangnya satu spesifikasi";
}

if($alasan == ""){
    $errors[] = "Alasan tidak boleh kosong";
} else if(strlen($alasan) < 25){
    $errors[] = "Alasan mesti sekurang-kurangnya 25 aksara";
}

// Simpan dalam session
$_SESSION['errors'] = $errors;
$_SESSION['data'] = compact('nama','matrik','umur','tarikh','program','jenis','spec','alasan');

// Redirect ke view
header("Location: result.php");
exit();