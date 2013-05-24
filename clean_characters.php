<?php
/**
 * Returns a string in uppercase, making the accents in their corresponding alternates and removing invalid characters.
 */
function clean_characters($cadena){
  $cadena = mb_convert_case($cadena, MB_CASE_UPPER, "UTF-8");

	$pattern = array('À','Á','Â','Ã','Ä','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý');
	$replacement = array('A','A','A','A','A','C','E','E','E','E','I','I','I','I','N','O','O','O','O','O','U','U','U','U','Y');
	for ($i = 0; $i < sizeof($pattern); $i++) {
	    $cadena = mb_ereg_replace($pattern[$i], $replacement[$i], $cadena);
	} 

	$pattern = "/[^0-9A-Z ]/";
	return preg_replace($pattern, "", $cadena);
}
