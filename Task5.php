<?php
	goto even;
	even:{
		print "Label with Loop printing even numbers.<br>";
		for($n = 0; $n <= 10; $n += 2){
			print $n." ";
			if($n == 10){
				print "<br>";
				goto odd;
			}
		}
	}
	odd:{
		print "Label with Loop printing odd numbers.<br>";
		for($n = 1; $n <= 9; $n += 2){
			print $n." ";
		}
		print "<br>";
	}
?>