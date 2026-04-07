<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Login Admin - SIGMA</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins';
    background: linear-gradient(135deg, #ffe5ec, #ffc2d1);
}

.card {
    border-radius: 25px;
}

.logo {
    font-weight: bold;
    color: #ff4d6d;
}
</style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width:350px">

<h4 class="text-center logo mb-3">
<i class="bi bi-shield-lock-fill"></i> SIGMA Admin
</h4>

<form action="proses_login.php" method="POST">

<input type="text" name="username" placeholder="Username" class="form-control mb-3" required>

<input type="password" name="password" placeholder="Password" class="form-control mb-3" required>

<button class="btn btn-danger w-100">
<i class="bi bi-box-arrow-in-right"></i> Login
</button>

</form>

</div>

</body>
</html>