<?php 
function sinaWburl2ID($url) {
	$surl[2] = str62to10(substr($url, strlen($url) - 4, 4));
	$surl[1] = str62to10(substr($url, strlen($url) - 8, 4));
	$surl[0] = str62to10(substr($url, 0, strlen($url) - 8));
	$int10 = $surl[0] . $surl[1] . $surl[2];
	return ltrim($int10, '0');
}
function str62to10($str62) { //62进制到10进制
	$strarry = str_split($str62);
	$str = 0;
	for ($i = 0; $i < strlen($str62); $i++) {
		$vi = Pow(62, (strlen($str62) - $i -1));
 
		$str += $vi * str62keys($strarry[$i]);
	}
	$str = str_pad($str, 7, "0", STR_PAD_LEFT);
	return $str;
}
 
function str62keys($ks) //62进制字典
{
	$str62keys = array (
		"0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q",
		"r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q",
		"R","S","T","U","V","W","X","Y","Z"
	);
	return array_search($ks, $str62keys);
}
