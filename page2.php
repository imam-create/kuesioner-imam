<?php
// Mengambil data dari halaman 1
$nama = $_POST['nama'];
$pendidikan = $_POST['pendidikan'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kuesioner - Halaman 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Kuesioner</h1>
        <form action="page3.php" method="POST">
            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
            <input type="hidden" name="pendidikan" value="<?php echo $pendidikan; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">

            <label for="pertanyaan1">Pertanyaan 1: Apa yang Anda harapkan dari website ini?</label>
            <textarea name="pertanyaan1" id="pertanyaan1" required></textarea>

            <label for="pertanyaan2">Pertanyaan 2: Apakah Anda menemukan kesulitan dalam menggunakan website ini?</label>
            <textarea name="pertanyaan2" id="pertanyaan2" required></textarea>

            <label for="pertanyaan3">Pertanyaan 3: Saran untuk perbaikan website ini?</label>
            <textarea name="pertanyaan3" id="pertanyaan3" required></textarea>

            <button type="submit">Kirim Kuesioner</button>
        </form>
    </div>
</body>
</html>
