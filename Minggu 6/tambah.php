<?php
    include "conn.php";

    $id_buku = $_POST["id_buku"];
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $foto = $_POST["foto"];

    $sql = "insert into buku values ('$id_buku', '$judul', '$penulis', '$foto')";

    $hasil = mysqli_query($kon, $sql);
