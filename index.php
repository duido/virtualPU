<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Esercizi in PHP</title>
	</head>
	<body>
		<?php
			include "funzioni.php";

			echo "<h4>Esercizio 1</h4>";
			$date = array("1957, 4, 25", "2004, 11, 7", "2000, 12, 31", "2012, 2, 29");
			foreach($date as $d){
				$dd = explode(",", $d);
				echo "$d: giorno ".ese1($dd[0],$dd[1],$dd[2])."<br/>";
				$dd = null;
			}

			echo "<h4>Esercizio 2</h4>";
			$anni = array(1984,1990,1992,2000,2009);
			foreach($anni as $a){
				echo "Anni perfetti per il $a: ";
				foreach (ese2($a) as $item){
	  			echo $item . ' ';
				}
				echo "<br/>";
			}
			echo "<h4>Esercizio 3</h4>";

			$num = array(1,2,4,7);
			foreach($num as $i){
				echo "Somma dei primi $i numeri reciproci: ".ese3($i)."<br/>";
			}
			echo "<h4>Esercizio 4</h4>";


			echo "<h4>Esercizio 4</h4>";

			echo "<h4>Esercizio 5</h4>";


		?>

	</body>
</html>
