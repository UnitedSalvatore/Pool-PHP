#!/usr/bin/php
<?php
	if ($argc != 2)
		echo "Incorrect Parameters\n";
	else
	{
		$op = explode(";", "+;-;*;/;%");
		$args = sscanf($argv[1], "%d %c %d %s");
		if ($args[0] && $args[1] && $args[2] && !$args[3])
		{
			if($args[1] == '*')
				$result = $args[0] * $args[2];
			if($args[1] == '-')
				$result = $args[0] - $args[2];
			if($args[1] == '/')
				$result = $args[0] / $args[2];
			if ($args[1] == '%')
				$result = $args[0] % $args[2];
			if ($args[1] == '+')
				$result = $args[0] + $args[2];
			echo $result."\n";
		}
		else
			echo "Syntax Error\n";
	}
?>
