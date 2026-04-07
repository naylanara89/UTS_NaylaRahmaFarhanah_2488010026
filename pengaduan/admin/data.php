<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../koneksi.php';
<?php include '../header.php'; ?>
$data = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Pengaduan - SIGMA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg, #fff0f3, #ffe5ec);
    font-family: 'Poppins';
}

.navbar {
    background: white;
    margin: 20px;
    border-radius: 20px;
    padding: 15px 25px;
}

.card {
    border-radius: 20px;
    border: none;
}

.badge-status {
    padding: 6px 12px;
    border-radius: 20px;
    color: white;
    font-size: 12px;
}

.menunggu { background: #ffc107; }
.diproses { background: #0d6efd; }
.selesai { background: #198754; }
</style>
</head>

<body>

<div class="navbar shadow-sm d-flex justify-content-between">
    <h5><i class="bi bi-megaphone-fill text-danger"></i> SIGMA</h5>
    <a href="dashboard.php" class="btn btn-outline-danger btn-sm">Dashboard</a>
</div>

<div class="container">

<div class="card shadow p-3">
<h5><i class="bi bi-table"></i> Data Pengaduan</h5>

<table class="table mt-3">
<thead>
<tr>
<th>Kode</th>
<th>Nama</th>
<th>Judul</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>
<?php while($d = mysqli_fetch_array($data)) { 
$statusClass = strtolower($d['status']);
?>
<tr>
<td><?= $d['kode'] ?></td>
<td><?= $d['nama'] ?></td>
<td><?= $d['judul'] ?></td>

<td>
<span class="badge-status <?= $statusClass ?>">
<?= $d['status'] ?>
</span>
</td>

<td>
<a href="detail.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-danger">Detail</a>
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