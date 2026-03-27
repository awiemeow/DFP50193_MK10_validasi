<?php
session_start();

$errors = $_SESSION['errors'] ?? [];
$data = $_SESSION['data'] ?? [];

extract($data);

// clear session
session_unset();
?>

<!DOCTYPE html>
<html>
<head>
<title>Keputusan Permohonan</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="body">

<div class="container">

<h2 class="title">Keputusan Permohonan</h2>

<?php if(!empty($errors)): ?>

    <?php foreach($errors as $e): ?>
        <p class='error'><?= $e ?></p>
    <?php endforeach; ?>

<?php else: ?>

    <p class='success'>Permohonan berjaya dihantar!</p>

    <p class='info'>Nama: <?= $nama ?></p>
    <p class='info'>No Matrik: <?= $matrik ?></p>
    <p class='info'>Umur: <?= $umur ?></p>
    <p class='info'>Tarikh: <?= $tarikh ?></p>
    <p class='info'>Program: <?= $program ?></p>
    <p class='info'>Jenis Komputer: <?= $jenis ?></p>

    <p class='info'>Spesifikasi:</p>
    <ul>
        <?php foreach($spec as $s): ?>
            <li class='info'><?= $s ?></li>
        <?php endforeach; ?>
    </ul>

    <p class='info'>Alasan: <?= $alasan ?></p>

<?php endif; ?>

<br><br>

<a href="borang.php" class="link">Kembali ke Borang</a>

</div>

</body>
</html>