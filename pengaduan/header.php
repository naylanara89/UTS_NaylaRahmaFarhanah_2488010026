<!DOCTYPE html>
<html>
<head>
<title>SIGMA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #fff0f3, #ffe5ec);
}

/* HEADER */
.navbar-custom {
    background: white;
    border-radius: 20px;
    margin: 20px;
    padding: 12px 25px;
}

/* LOGO */
.logo {
    font-weight: 600;
    color: #ff4d6d;
    letter-spacing: 1px;
}

/* LINK */
.nav-link {
    color: #555 !important;
}

.nav-link:hover {
    color: #f57088 !important;
}
</style>

</head>

<body>

<!-- HEADER -->
<div class="navbar-custom shadow-sm d-flex justify-content-between align-items-center">

    <div class="logo">
        <i class="bi bi-megaphone-fill"></i> SIGMA
    </div>

    <div>
        <a href="index.php" class="nav-link d-inline">Beranda</a>
        <a href="cek.php" class="nav-link d-inline">Cek Status</a>
    </div>

</div>