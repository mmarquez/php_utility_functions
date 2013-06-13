<?php
/**
 * Returns a string in uppercase, making the accents in their corresponding alternates and removing invalid characters.
 * @param String $str To convert
 * @param String $pattern To be used with the accepted characters
 * @return String Converted string
 */
function clean_characters($str, $pattern = "/[^0-9A-Za-z ]/"){
  $str = mb_convert_case($cadena, MB_CASE_UPPER, "UTF-8");

	$original = array('Ă','Â','Å','À','Á','Â','Ã','Ä','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ţ','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','å','á','á','â','ã','ä','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ß','ş','ţ');
	$replacement = array('A','A','A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','N','T','O','O','O','O','O','U','U','U','U','Y','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','ss','s','t');
	for ($i = 0; $i < sizeof($pattern); $i++) {
	    $str = mb_ereg_replace($original[$i], $replacement[$i], $str);
	} 

	return preg_replace($pattern, "", $str);
}
