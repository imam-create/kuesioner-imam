<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kuesioner - Halaman 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulir Kuesioner</h1>
        <form action="page2.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="pendidikan">Pendidikan:</label>
            <input type="text" name="pendidikan" id="pendidikan" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <button type="submit">Lanjutkan</button>
        </form>
    </div>
</body>
</html>
