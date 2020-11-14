<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 3 | Robby Satya Wicaksana</title>
    </head>
<body>
    <?php 
	echo "<h3>Mencari Bilangan Prima dari 1-50 : </h3>";
	for ($i=1;$i<=50;$i++){
		$n=0;
		for ($j=1;$j<=$i;$j++){
			if($i%$j==0){
				$n++;
			}
		}
		if($n==2){
			echo $i." ";
		}
	}
    ?>
</body>
</html>
