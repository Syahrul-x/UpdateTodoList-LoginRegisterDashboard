<?php
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

// Cek apakah ada pesan error
$error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
unset($_SESSION['error']);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <div class="flexbg">
        <div class="bg"> 
            <img src="image/bgregister.svg" alt="Autentikasi">
        </div>
        <div class="loginform"> 
            <form action="login_process.php" method="POST" class="form">
                <h1> Selamat Datang!</h1>
                <?php if ($error): ?>
                    <p class="error-message"><?php echo $error; ?></p>
                <?php endif; ?>
                <div class="inputs">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="inputs">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" class="button" value="Masuk">
                <p>Belum punya akun? <a href="index.php"><span>Daftar sekarang</span></a></p>
            </form>
        </div>
    </div>
</body>
</html>
