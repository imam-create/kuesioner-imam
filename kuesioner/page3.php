<?php
include 'config.php';

// Mengambil data dari halaman 2
$nama = $_POST['nama'];
$pendidikan = $_POST['pendidikan'];
$email = $_POST['email'];
$pertanyaan1 = $_POST['pertanyaan1'];
$pertanyaan2 = $_POST['pertanyaan2'];
$pertanyaan3 = $_POST['pertanyaan3'];

// Menyimpan data ke database
$query = "INSERT INTO jawaban (nama, pendidikan, email, pertanyaan1, pertanyaan2, pertanyaan3) 
          VALUES ('$nama', '$pendidikan', '$email', '$pertanyaan1', '$pertanyaan2', '$pertanyaan3')";
if ($conn->query($query) === TRUE) {
    // Kirim email terima kasih
    $to = $email;
    $subject = "Terima Kasih Telah Mengisi Kuesioner";
    $message = "Halo $nama,\n\nTerima kasih telah mengisi kuesioner kami. Jawaban Anda telah terekam.\n\nBest regards,\nWebsite Kuesioner";
    $headers = "From: no-reply@kuesioner.com";

    mail($to, $subject, $message, $headers);

    echo "<h1>Jawaban Anda Sudah Terekam</h1>";
    echo "<p>Terima kasih telah mengisi kuesioner. Kami menghargai waktu dan pendapat Anda!</p>";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
