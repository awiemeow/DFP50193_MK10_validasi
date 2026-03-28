<?php
session_start();

$data = [
    'nama' => $_POST['nama'] ?? "",
    'matrik' => $_POST['matrik'] ?? "",
    'umur' => $_POST['umur'] ?? "",
    'tarikh' => $_POST['tarikh'] ?? "",
    'program' => $_POST['program'] ?? "",
    'jenis' => $_POST['jenis'] ?? "",
    'spec' => $_POST['spec'] ?? [],
    'alasan' => $_POST['alasan'] ?? ""
];

$errors = [];

// Field wajib isi
$requiredFields = [
    'nama' => "Nama tidak boleh kosong",
    'matrik' => "No Matrik tidak boleh kosong",
    'umur' => "Umur tidak boleh kosong",
    'tarikh' => "Tarikh tidak boleh kosong",
    'program' => "Program mesti dipilih",
    'jenis' => "Jenis komputer mesti dipilih"
];

foreach ($requiredFields as $field => $message) {
    if (empty($data[$field])) {
        $errors[] = $message;
    }
}

// Check spec (array)
if (empty($data['spec'])) {
    $errors[] = "Sila pilih sekurang-kurangnya satu spesifikasi";
}

// Check alasan
if (empty($data['alasan'])) {
    $errors[] = "Alasan tidak boleh kosong";
} elseif (strlen($data['alasan']) < 25) {
    $errors[] = "Alasan mesti sekurang-kurangnya 25 aksara";
}

// Simpan session
$_SESSION['errors'] = $errors;
$_SESSION['data'] = $data;

// Redirect
header("Location: result.php");
exit();