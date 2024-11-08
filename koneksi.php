<?php
$mysqli = new mysqli("localhost", "root", "", "biodata");
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>