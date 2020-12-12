<?php
include 'conn.php';

$nim = $_POST['id'];

$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
$hasil = mysqli_query($kon, $query);
