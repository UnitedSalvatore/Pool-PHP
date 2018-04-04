<?php
	function ft_split($str)
	{
		$array = array_filter(explode(' ', $str));
		sort($array);
		return ($array);
	}
?>
