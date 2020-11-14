<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 2 | Robby Satya Wicaksana</title>
    </head>
<body>
    <?php 
	$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid" , "kifuat" , "asep" , "ujang" , "iteng");


	echo "Data sebelum diurutkan : <br>";
	$i = 0;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";
	echo "Mengurutkan data dari Huruf A-Z : <br>";
	sort($data);
	$i = 0;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}

	echo "<br>";
	echo "Mengurutkan data dari Huruf Z-A : <br>";
	rsort($data);
	$i = 0;
	foreach ($data as $value) {
		echo "$i. $value <br>";
		$i++;
	}
    ?>
 </body>
 </html>
