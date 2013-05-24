<?php
/**
 * Returns a string in uppercase, making the accents in their corresponding alternates and removing invalid characters.
 * @param String $str To convert
 * @param String $pattern To be used with the accepted characters
 * @return String Converted string
 */
function clean_characters($str, $pattern = "/[^0-9A-Z ]/"){
  $str = mb_convert_case($cadena, MB_CASE_UPPER, "UTF-8");

	$original = array('À','Á','Â','Ã','Ä','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý');
	$replacement = array('A','A','A','A','A','C','E','E','E','E','I','I','I','I','N','O','O','O','O','O','U','U','U','U','Y');
	for ($i = 0; $i < sizeof($pattern); $i++) {
	    $str = mb_ereg_replace($original[$i], $replacement[$i], $str);
	} 

	return preg_replace($pattern, "", $str);
}
