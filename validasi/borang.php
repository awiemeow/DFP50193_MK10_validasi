<!DOCTYPE html>
<html>
<head>
    <title>Borang Permohonan Skim Pinjaman Komputer Riba</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">

<div class="container">
<h2 class="title">Permohonan Skim Pinjaman Komputer Riba</h2>

<form class="form" action="proses.php" method="POST">

<label class="label">Nama Pelajar</label>
<input type="text" name="nama" class="input">

<label class="label">No. Matrik</label>
<input type="text" name="matrik" class="input">

<label class="label">Umur</label>
<input type="number" name="umur" class="input">

<label class="label">Tarikh Permohonan</label>
<input type="date" name="tarikh" class="input">

<label class="label">Program Pengajian</label>
<select name="program" class="input">
    <option value="">-- Pilih Program --</option>
    <option value="Diploma IT">Diploma IT</option>
    <option value="Diploma CS">Diploma Computer Science</option>
    <option value="Diploma IS">Diploma Information System</option>
</select>

<label class="label">Jenis Komputer</label><br>

<input type="radio" name="jenis" value="Laptop" class="radio"> Laptop
<input type="radio" name="jenis" value="Desktop" class="radio"> Desktop
<br><br>

<label class="label">Spesifikasi Diperlukan</label><br>

<input type="checkbox" name="spec[]" value="RAM 8GB" class="checkbox"> RAM 8GB
<input type="checkbox" name="spec[]" value="SSD 512GB" class="checkbox"> SSD 512GB
<input type="checkbox" name="spec[]" value="Graphic Card" class="checkbox"> Graphic Card
<br><br>

<label class="label">Alasan Permohonan</label>
<textarea name="alasan" class="textarea"></textarea>

<br><br>

<button type="submit" name="hantar" class="buttonSubmit">Hantar</button>
<button type="reset" class="buttonReset">Tetap Semula</button>

</form>

</div>

</body>
</html>