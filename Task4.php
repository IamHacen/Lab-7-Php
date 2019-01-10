<?php
	$name = "Zohaib";
	$length = strlen($name);
	print "name = ".$name."<br>";
	print "Output = ";
	for($i = 0; $i < $length; $i++){
		$str = $name[$i];
		switch($str){
			case "a":
			case "A":
				print "Apple ";
				break;
			case "b":
			case "B":
				print "Ball ";
				break;
			case "c":
			case "C":
				print "Cat ";
				break;
			case "d":
			case "D":
				print "Duck ";
				break;
			case "e":
			case "E":
				print "Eagle ";
				break;
			case "f":
			case "F":
				print "Fish ";
				break;
			case "g":
			case "G":
				print "Green ";
				break;
			case "h":
			case "H":
				print "Hat ";
				break;
			case "i":
			case "I":
				print "Igloo ";
				break;
			case "j":
			case "J":
				print "Jocker ";
				break;
			case "k":
			case "K":
				print "Kite ";
				break;
			case "l":
			case "L":
				print "Lion ";
				break;
			case "m":
			case "M":
				print "Monkey ";
				break;
			case "n":
			case "N":
				print "Needle ";
				break;
			case "o":
			case "O":
				print "Orange ";
				break;
			case "p":
			case "P":
				print "Parrot ";
				break;
			case "q":
			case "Q":
				print "Queen ";
				break;
			case "r":
			case "R":
				print "Rocket ";
				break;
			case "s":
			case "S":
				print "Socks ";
				break;
			case "t":
			case "T":
				print "Tie ";
				break;
			case "u":
			case "U":
				print "Umbrella ";
				break;
			case "v":
			case "V":
				print "Violet ";
				break;
			case "w":
			case "W":
				print "Watch ";
				break;
			case "x":
			case "X":
				print "Xylophone ";
				break;
			case "y":
			case "Y":
				print "Yellow ";
				break;
			case "z":
			case "Z":
				print "Zebra ";
				break;
		}
	}
?>