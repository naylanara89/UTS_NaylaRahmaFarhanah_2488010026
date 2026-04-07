<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>SIGMA - Sistem Informasi Guna Masyarakat</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">


<style>
body {
    font-family: 'Poppins';
    background: linear-gradient(135deg, #fff0f3, #ffe5ec);
}

/* HERO */
.hero {
    background: linear-gradient(135deg, #ff4d6d, #ff8fab);
    color: white;
    padding: 90px 20px;
    text-align: center;
    border-bottom-left-radius: 60px;
    border-bottom-right-radius: 60px;
}

.logo {
    font-size: 42px;
    font-weight: 700;
    letter-spacing: 3px;
}

/* BUTTON */
.btn-main {
    background: white;
    color: #ff4d6d;
    border-radius: 30px;
    padding: 10px 20px;
    margin-top: 15px;
    font-weight: 500;
}

.btn-main:hover {
    background: #ffe5ec;
}

/* FORM */
.form-box {
    background: white;
    margin-top: -60px;
    border-radius: 25px;
    padding: 35px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* INPUT */
.form-control {
    border-radius: 12px;
}

/* INFO CARD */
.info-box {
    background: white;
    border-radius: 20px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.icon {
    font-size: 30px;
    color: #ff4d6d;
}

/* FOOTER */
.footer {
    text-align: center;
    margin-top: 40px;
    color: #999;
}
</style>

</head>

<body>

<!-- HERO -->
<div class="hero">
    <div class="logo"><i class="bi bi-megaphone-fill"></i> SIGMA</div>
    <p>Sistem Informasi Guna Masyarakat</p>
    <p class="mt-3">Platform resmi untuk menyampaikan aspirasi dan pengaduan masyarakat secara cepat dan transparan</p>

    <a href="cek.php" class="btn btn-main">
        <i class="bi bi-search"></i> Cek Status
    </a>
</div>

<!-- FORM -->
<div class="container">
<div class="form-box">

<h4 class="mb-3 text-center">
<i class="bi bi-pencil-square"></i> Form Pengaduan
</h4>

<form action="kirim.php" method="POST">

<input type="text" name="nama" placeholder="Nama Anda" class="form-control mb-3" required>

<input type="text" name="judul" placeholder="Judul Pengaduan" class="form-control mb-3" required>

<textarea name="isi" class="form-control mb-3" rows="4" placeholder="Tulis laporan Anda..." required></textarea>

<button class="btn btn-danger w-100">
<i class="bi bi-send-fill"></i> Kirim Pengaduan
</button>

</form>

</div>

<!-- INFO -->
<div class="row mt-4">

<div class="col-md-4">
<div class="info-box">
<div class="icon"><i class="bi bi-lightning-charge-fill"></i></div>
<h6>Cepat</h6>
<p>Laporan diproses dengan cepat oleh admin</p>
</div>
</div>

<div class="col-md-4">
<div class="info-box">
<div class="icon"><i class="bi bi-shield-check"></i></div>
<h6>Aman</h6>
<p>Data laporan dijaga dengan aman</p>
</div>
</div>

<div class="col-md-4">
<div class="info-box">
<div class="icon"><i class="bi bi-eye"></i></div>
<h6>Transparan</h6>
<p>Status dapat dicek secara real-time</p>
</div>
</div>

</div>

<div class="footer">
<p>© SIGMA 2026 | Sistem Informasi Guna Masyarakat</p>
</div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>
