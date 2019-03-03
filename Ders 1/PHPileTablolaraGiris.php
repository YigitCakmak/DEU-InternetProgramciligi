<form action="tablogiris.php" method="get">
	Satır: <input type="text" name="satir">
	Sütun: <input type="text" name="sutun">
	       <input type="submit" value="Giriş">

</form>
<?php 

$satir=$_GET['satir'];
$sutun=$_GET['sutun'];

echo "<table border=1>";
	
	for ($i=0; $i < $satir ; $i++) { 
		echo "<tr>";
			for ($j=0; $j < $sutun; $j++) { 
				echo "<td>";
					echo (($i*$sutun) + $j +1);
				echo "</td>";
			}
		echo "</tr>";
	}

echo "</table>";

 ?>
