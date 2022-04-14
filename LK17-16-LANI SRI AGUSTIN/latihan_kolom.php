<!DOCTYPE html>
<html>
<head>
	<title>Latihan Looping Kolom</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0" >
	<tr>
		<th>Kolom 1</th>
		<th>Kolom 2</th>
		<th>Kolom 3</th>
		<th>Kolom 4</th>
		<th>Kolom 5</th>
	</tr>

	<!-- TULISKAN SCRIPT PHP DI BAGIAN INI -->
<?php
for($i=1; $i <=3; $i++){
      echo "<tr>";
      for($k=1; $k<=5; $k++){
            
            echo "<td>Kolom ke-$k Baris ke-$k</td>";
     
}
echo "</tr>";
}
?>

	</table>
</body>
</html>
