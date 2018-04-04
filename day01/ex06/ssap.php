#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$array = array_filter(explode(' ', $str));
		sort($array);
		return ($array);
	}

	$array = array();
	$res = array();
	if ($argc > 1)
	{
		for($i = 1; $i < $argc; $i++)
			$array[] = ft_split($argv[$i]);
		foreach($array as $split)
			$res = array_merge($res, $split);
		sort($res);
		foreach ($res as $word)
			echo $word.PHP_EOL;
	}
?>
