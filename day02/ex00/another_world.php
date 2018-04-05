#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$regex = preg_replace('/[ \t]+/', ' ', trim($argv[1]));
		echo $regex."\n";
	}
?>