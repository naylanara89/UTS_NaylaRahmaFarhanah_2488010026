<?php
session_start();
include '../koneksi.php';
<?php include '../header.php'; ?>
$id = $_GET['id'];
$d = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pengaduan WHERE id='$id'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Detail Pengaduan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg, #fff0f3, #ffe5ec);
    font-family: 'Poppins', sans-serif;
}

/* CARD */
.card {
    border-radius: 20px;
}

/* JUDUL */
h5 {
    font-weight: 600;
}

/* TEXT */
p {
    font-size: 14px;
    color: #444;
}
</style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width:400px">

<h5><?= $d['judul'] ?></h5>
<hr>

<p><b>Nama:</b> <?= $d['nama'] ?></p>
<p><b>Isi:</b><br><?= $d['isi'] ?></p>
<p><b>Status:</b> <?= $d['status'] ?></p>

<form action="update_status.php" method="POST">
<input type="hidden" name="id" value="<?= $d['id'] ?>">

<select name="status" class="form-control mb-3">
<option>Menunggu</option>
<option>Diproses</option>
<option>Selesai</option>
</select>

<button class="btn btn-danger w-100">Update Status</button>
</form>

<a href="data.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
<?php include '../footer.php'; ?>
</body>
</html>