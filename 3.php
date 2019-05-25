<?php 
	function huruf_hidup($hidup){
	    preg_match_all('/[AaIiUuEeOo]/', $hidup, $match);
	    return count($match[0]);
	} 
	echo huruf_hidup("Programmer");
	echo PHP_EOL;
	echo huruf_hidup("Ini Huruf Hidup");
?>
