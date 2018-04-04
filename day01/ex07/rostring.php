#!/usr/bin/php
<?php
	if ($argc > 1) {
		$str = trim($argv[1]);
		$str = preg_replace("/(\s){2,}/", " ", $str);
		$first = substr($str, 0, strpos($str, " "));
		if (!strpos($str, " "))
			$main = substr($str, strpos($str, " "));
		else
			$main = substr($str, strpos($str, " ") + 1);
		print($main." ".$first.PHP_EOL);
	}
?>
