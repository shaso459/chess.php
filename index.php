<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr>
		<table>
			<?php
			$array = array("a","b","c","d","e","f","g","h");
			for ($i=0; $i < 8 ; $i++) {
				echo "<tr>";
				for ($y=1; $y <= 8 ; $y++) { 
					
					$total=$i+$y;
					if ($total %2==0) {
					echo "<td style=\"width: 30px; color:red; height : 30px; background: #000\">".$y.$array[$i]."</td>";
						
					}else{
					echo "<td style=\"width: 30px;  height : 30px; background: #fff\">".$y.$array[$i]."</td>";
					}
				}
				echo "</tr>";			}
			?>
		</table>
	</hr>

</body>
</html>