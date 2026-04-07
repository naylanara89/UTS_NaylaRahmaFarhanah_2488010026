<?php include '../header.php'; ?>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../koneksi.php';

// ambil data
$data = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id DESC LIMIT 5");

$total = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan"))['total'];
$menunggu = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan WHERE status='Menunggu'"))['total'];
$proses = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan WHERE status='Diproses'"))['total'];
$selesai = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM pengaduan WHERE status='Selesai'"))['total'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin - SIGMA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins';
    background: linear-gradient(135deg, #f5b6c3, #f881a1);
}

/* NAVBAR */
.navbar {
    background: white;
    border-radius: 20px;
    margin: 20px;
    padding: 15px 25px;
}

/* CONTAINER */
.container-box {
    max-width: 1000px;
    margin: auto;
}

/* STAT CARD */
.stat-card {
    border-radius: 20px;
    padding: 20px;
    text-align: center;
    color: white;
}

.menunggu { background: #f8cf53; }
.proses { background: #5c99f5; }
.selesai { background: #4eb484; }

/* TABLE */
.card {
    border-radius: 20px;
    border: none;
}
</style>

</head>

<body>

<!-- NAVBAR -->
<div class="navbar shadow-sm d-flex justify-content-between align-items-center">
    <h5 class="mb-0">
        <i class="bi bi-megaphone-fill text-danger"></i> SIGMA
    </h5>

    <a href="logout.php" class="btn btn-danger btn-sm">
        <i class="bi bi-box-arrow-right"></i> Logout
    </a>
</div>

<!-- CONTENT -->
<div class="container-box">

<!-- DESKRIPSI -->
<div class="text-center mb-4">
    <h4 style="font-weight:600;">
        <i class="bi bi-speedometer2 text-danger"></i> Dashboard SIGMA
    </h4>
    <p class="text-muted" style="font-size:14px;">
        Sistem Informasi Guna Masyarakat membantu mengelola laporan secara cepat, transparan, dan efisien.
    </p>
    <h4 style="font-weight:600; letter-spacing:1px;">
</div>

<!-- STATISTIK -->
<div class="row text-center mb-4">

<div class="col-md-4">
<div class="stat-card menunggu shadow">
    <i class="bi bi-hourglass-split fs-3"></i>
    <h6 class="mt-2">Menunggu</h6>
    <h4><?= $menunggu ?></h4>
</div>
</div>

<div class="col-md-4">
<div class="stat-card proses shadow">
    <i class="bi bi-gear-fill fs-3"></i>
    <h6 class="mt-2">Diproses</h6>
    <h4><?= $proses ?></h4>
</div>
</div>

<div class="col-md-4">
<div class="stat-card selesai shadow">
    <i class="bi bi-check-circle-fill fs-3"></i>
    <h6 class="mt-2">Selesai</h6>
    <h4><?= $selesai ?></h4>
</div>
</div>

</div>

<!-- DATA -->
<div class="card shadow p-3">

<h5><i class="bi bi-file-earmark-text"></i> Laporan Terbaru</h5>

<table class="table mt-3">
<thead>
<tr>
    <th>Kode</th>
    <th>Judul</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php while($d = mysqli_fetch_array($data)) { ?>
<tr>
    <td><?= $d['kode'] ?></td>
    <td><?= $d['judul'] ?></td>
    <td><?= $d['status'] ?></td>
    <td>
        <a href="detail.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-danger">
            Detail
        </a>
    </td>
</tr>
<?php } ?>
</tbody>

</table>

</div>

</div>
<?php include '../footer.php'; ?>
</body>
</html>