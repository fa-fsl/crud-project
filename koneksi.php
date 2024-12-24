<?php
    $conn = new mysqli("localhost", "root", "", "konsep");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>