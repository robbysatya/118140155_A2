<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 - 118140155 | Robby Satya Wicaksana</title>
</head>
<body>

<form method="post">
    Nama : <input type="text" name="huruf">
    <button type="submit" name="submit">Submit</button>
    <button onClick="window.location.reload();">Refresh</button>
</form>

<?php 

function jumhuruf($huruf){
    $jum = strlen($huruf);
    return $jum;
}

if(isset($_POST['submit'])){
    $huruf = $_POST['huruf'];
    if(jumhuruf($huruf)==" "){
        echo '<font color="red">Nama : Nama Kosong Belum Diisi</font>'; echo '<br>';
        echo '<font color="red">Harga : Harga Kosong Karena Nama Kosong </font>';
    }

    else if(jumhuruf($huruf)<=10){
        $harga = 300;
        $tot = jumhuruf($huruf)*$harga;
        echo '<font color="blue">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="blue">Harga : '.$tot."</font>";
    }

    elseif(jumhuruf($huruf)<=20){
        $harga = 500;
        $tot = jumhuruf($huruf)*$harga;
        echo '<font color="yellow">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="yellow">Harga : '.$tot."</font>";
    }

    elseif(jumhuruf($huruf)>20){
        $harga = 700;
        $tot = jumhuruf($huruf)*$harga;
        echo '<font color="green">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="green">Harga : '.$tot."</font>";
    }
}

?>


</body>
</html>