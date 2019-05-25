<?php
	function ganti_huruf($str, $cari, $ganti){
		for ($i=0; $i < strlen($str); $i++) { 
			if($str[$i]==$cari){
				$str[$i]=$ganti;
			}
		}echo $str;
	}ganti_huruf("Contoh",'o','a');
	echo PHP_EOL;
	ganti_huruf("Purwakarta",'a','o');
?>