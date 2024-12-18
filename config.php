<?php
$host = 'localhost'; // Host MySQL
$username = 'root';  // Username MySQL (default untuk XAMPP adalah root)
$password = '';      // Password MySQL (default untuk XAMPP adalah kosong)
$dbname = 'kuesioner'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
