<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <div class="flexbg">
        <div class="bg"> 
            <img src="image/bgregister.svg" alt="Autentikasi">
        </div>
        <div class="loginform"> 
            <form action="#" class="form">
                <h1>Selamat Datang!</h1>
                <div class="inputs">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" placeholder="Nama Lengkap" id="fullname">
                </div>
                <div class="inputs">
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Email" id="email">
                </div>
                <div class="inputs">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Username" id="username">
                </div>
                <div class="inputs">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password">
                </div>
                <div class="inputs">
                    <label for="confirm-password">Konfirmasi Password</label>
                    <input type="password" placeholder="Konfirmasi password" id="confirm-password">
                </div>
                <input type="submit" class="button" value="DAFTAR">
                <p>Sudah punya akun? <a href="login.php"><span>Login di sini</span></a></p>
            </form>
        </div>
    </div>
</body>
</html>
