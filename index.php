<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi OSIS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card">
        <h1>FORM PENDAFTARAN <br> OSIS</h1>
        <form action="./input_data.php" method="post">
            <label for="username">username:</label>
            <input type="username" name="username" id="username" maxlength="20" class="form-input" required><br>

            <label for="password">password:</label>
            <input type="password" name="password" id="password" maxlength="20" class="form-input" required><br>

            <label for="nis">NIS:</label>
            <input type="nis" name="nis" id="nis" maxlength="20" class="form-input" required><br>

            <label for="kelas">Kelas:</label>
            <input type="kelas" name="kelas" id="kelas" maxlength="20" class="form-input" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" maxlength="20" class="form-input" required><br>

            <textarea name="alamat" id="alamat" placeholder="Alamat" cols="30" class="form-input" required rows="5"></textarea><br>


            <button type="submit" id="btn-kirim">Kirim</button>
        </form>
    </div>

</body>

</html>