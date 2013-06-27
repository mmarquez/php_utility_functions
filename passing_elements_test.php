<?php
$elements='~elem1~~elem2~~elem3~~elem4~';

$tok = strtok($elements, '~');
$aElements = [];
while ($tok !== false){
  if(strpos($elements,"~{$tok}~")!==false){
			$aElements[] = $tok;
		}
	$tok = strtok('~');
}

print_r($aElements);
