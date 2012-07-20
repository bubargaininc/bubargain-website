<?php 
function midToStr($mid) {
	settype($mid, 'string');
	$mid_length = strlen($mid);
	$url = '';
	$str = strrev($mid);
	$str = str_split($str, 7);
 
	foreach ($str as $v) {
		$char = intTo62(strrev($v));
		$char = str_pad($char, 4, "0");
		$url .= $char;
	}
 
	$url_str = strrev($url);
 
	return ltrim($url_str, '0');
}
 
function str62keys_int_62($key) //62进制字典
{
	$str62keys = array (
		"0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q",
		"r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q",
		"R","S","T","U","V","W","X","Y","Z"
	);
	return $str62keys[$key];
}
 
/* url 10 进制 转62进制*/
 
function intTo62($int10) {
	$s62 = '';
	$r = 0;
	while ($int10 != 0) {
		$r = $int10 % 62;
		$s62 .= str62keys_int_62($r);
		$int10 = floor($int10 / 62);
	}
 
	return $s62;
}
