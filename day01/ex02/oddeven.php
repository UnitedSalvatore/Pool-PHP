#!/usr/bin/php
<?php
	while (1)
	{
		echo "Enter a number: ";
		$line = trim(fgets(STDIN));
		if (feof(STDIN))
			exit();
		if (!is_numeric($line))
			echo "'$line' is not a number\n";
		else if (($line % 2))
			echo "The number $line is odd\n";
		else
			echo "The number $line is even\n";
		$line = NULL;
	}
?>