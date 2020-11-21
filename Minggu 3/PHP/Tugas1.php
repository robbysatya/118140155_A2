<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 - 118140155 | Robby Satya Wicaksana</title>
</head>
<body>

<?php 

function faktorial($n){
    $angka = 1;
    $faktorial = 1;
    while($angka <= $n){
        $faktorial = $faktorial * $angka;
        $angka = $angka + 1;
    }
    return $faktorial;
}

if(isset($_POST['hitung'])){
    $n = $_POST['faktorial'];
    echo 'Hasilnya = '.faktorial($n);
}

?>

<form method="POST">
    <input type="number" name="faktorial" required>
    <button type="submit" name="hitung">Hitung Angka</button>
</form>

</body>
</html>