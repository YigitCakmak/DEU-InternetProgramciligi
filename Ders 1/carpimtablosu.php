<form action="carpimtablosu.php" method="get">	
	Satır: <input type="text" name="satir">
	Sütun: <input type="text" name="sutun">
		   <input type="submit" value="Giriş">
</form>

<?php 
$satir=$_GET['satir'];
$sutun=$_GET['sutun'];
echo "<table border=1>";
	
for ($i=1; $i <= $satir; $i++) { 
	echo "<tr>";
		for ($j=1; $j <= $sutun; $j++) { 
			if ($i==$j) {
				echo "<td bgcolor= pink>";
					echo $i." * ".$j." = ".($i*$j);
				echo "</td>";
			}
			elseif ($i==3 && $j==5) {				
				echo "<td bgcolor= #22222>";
					echo "YİĞİT";
				echo "</td>";				
			}
			elseif ($i<$j) {
				echo "<td bgcolor= purple>";
					echo $i." * ".$j." = ".($i*$j);
				echo "</td>";
			}
			elseif ($i>$j) {				
				echo "<td bgcolor= yellow>";
					echo $i." * ".$j." = ".($i*$j);
				echo "</td>";				
			}
				
			else{
				echo "<td>";
					echo $i." * ".$j." = ".($i*$j);
				echo "</td>";
			}

		}
	echo "</tr>";
}

echo "</table>";

 ?>
