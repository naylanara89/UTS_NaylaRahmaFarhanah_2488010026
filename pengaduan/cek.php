<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Cek Status - SIGMA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins';
    background: linear-gradient(135deg, #ffe5ec, #ffc2d1);
}

/* CARD */
.card {
    border-radius: 25px;
}

/* STATUS BADGE */
.badge-status {
    padding: 8px 15px;
    border-radius: 20px;
    color: white;
    font-size: 14px;
}

.menunggu { background: #ffc107; }
.diproses { background: #0d6efd; }
.selesai { background: #198754; }

/* TITLE */
.title {
    font-weight: 600;
}
</style>

</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width:400px">

<h4 class="text-center mb-3">🔍 Cek Status Pengaduan</h4>

<form method="GET">
<input type="text" name="kode" placeholder="Masukkan kode SIGMA..." class="form-control mb-3" required>
<button class="btn btn-danger w-100">Cek Status</button>
</form>

<?php
if(isset($_GET['kode'])){
    $kode = $_GET['kode'];

    $data = mysqli_query($conn, "SELECT * FROM pengaduan WHERE kode='$kode'");
    $d = mysqli_fetch_array($data);

    if($d){
        $statusClass = strtolower($d['status']);
?>

<hr>

<h5 class="title"><?= $d['judul'] ?></h5>

<p><?= $d['isi'] ?></p>

<p>
Status:
<span class="badge-status <?= $statusClass ?>">
<?= $d['status'] ?>
</span>
</p>

<?php
    } else {
        echo "<p class='text-danger mt-3'>❌ Kode tidak ditemukan</p>";
    }
}
?>

<a href="index.php" class="btn btn-outline-secondary w-100 mt-3">Kembali</a>

</div>
<?php include 'footer.php'; ?>
</body>
</html>