<?php
include 'koneksi.php';
<?php include 'header.php'; ?>
// buat kode SIGMA (tanggal + random)
$kode = "SIG-" . date("YmdHis") . rand(10,99);

$nama  = $_POST['nama'];
$judul = $_POST['judul'];
$isi   = $_POST['isi'];

// simpan ke database
mysqli_query($conn, "INSERT INTO pengaduan VALUES (NULL,'$kode','$nama','$judul','$isi',NOW(),'Menunggu')");
?>

<!DOCTYPE html>
<html>
<head>
<title>Pengaduan Berhasil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins';
    background: linear-gradient(135deg, #ffe5ec, #ffc2d1);
}

.card {
    border-radius: 25px;
}

.kode-box {
    font-size: 22px;
    font-weight: bold;
    color: #ff4d6d;
    letter-spacing: 2px;
}
</style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow text-center" style="width:400px">

<h4 class="mb-3">💖 Pengaduan Berhasil!</h4>

<p>Simpan kode ini untuk cek status laporan kamu yaa ✨</p>

<div class="kode-box mb-3" id="kode"><?= $kode ?></div>

<button onclick="copyKode()" class="btn btn-danger mb-2">Copy Kode</button>

<a href="index.php" class="btn btn-outline-secondary w-100">Kembali</a>

</div>

<script>
function copyKode() {
    var text = document.getElementById("kode").innerText;
    navigator.clipboard.writeText(text);
    alert("Kode berhasil disalin 💖");
}
</script>
<?php include 'footer.php'; ?>
</body>
</html>