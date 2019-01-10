<?php
	for($i = 1; $i <= 7; $i++){
		$sum = $i;
		for($j = 1; $j <= 7; $j++){
			print $sum." ";
			$sum += $i;
		}
		print "<br>";
	}
?>