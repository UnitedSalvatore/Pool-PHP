#!/usr/bin/php
<?php
	$i = 1;
	$array = array();
	$res = array();

	function ft_split($str)
	{
		$array = array_filter(explode(' ', $str));
		sort($array);
		return ($array);
	}

	function cmp($a, $b)
	{
		if (ctype_alpha($a) && ctype_alpha($b))
			return (ord(strtolower($a)) - ord(strtolower($b)));
		if (is_numeric($a) && is_numeric($b))
			return (ord($a) - ord($b));
		if (ctype_alpha($a) || ctype_alpha($b))
			return ((ctype_alpha($a)) ? -1 : 1);
		if (is_numeric($a) || is_numeric($b))
			return ((is_numeric($a)) ? -1 : 1);
		return (ord($a) - ord($b));
	}

	function call($a, $b)
	{
		$i = 0;
		$len1 = strlen($a);
		$len2 = strlen($b);
		while ((ord($a[$i]) && ord($b[$i])) && (!$r = cmp($a[$i], $b[$i])))
			$i++;
		if (!$r)
			return (($len1 < $len2) ? -1 : 1);
		return ($r);
	}

	$i = 1;
	$array = array();
	$res = array();
	while (!empty($argv[$i]))
	{
		array_push($array, ft_split($argv[$i]));
		$i++;
	}
	foreach ($array as $value)
		$res = array_merge($res, $value);
	usort($res, call);
	foreach ($res as $value)
		print_r($value.PHP_EOL);
?>
