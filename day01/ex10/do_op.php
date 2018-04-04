#!/usr/bin/php
<?php
	if ($argc == 4) {
		$first_arg = (int)trim($argv[1]);
		$second_arg = (int)trim($argv[3]);
	
		switch(trim($argv[2])) {
			case '+':
				print($first_arg + $second_arg.PHP_EOL);
				break;
			case '-':
				print($first_arg - $second_arg.PHP_EOL);
				break;
			case '*':
				print($first_arg * $second_arg.PHP_EOL);
				break;
			case '/':
				if ((int)$second_arg === 0) {
					print("Error: division by zero!\n");
					return (0);
				}
				else
					print($first_arg / $second_arg.PHP_EOL);
				break;
			case '%':
				if ((int)$second_arg === 0) {
					print("Error: division by zero!\n");
					return (0);
				}
				else
					print($first_arg % $second_arg.PHP_EOL);
				break;
			default:
				print("Incorrect Parameters\n");
				break;
		}
	} else {
		print("Incorrect Parameters\n");
	}
 ?>
