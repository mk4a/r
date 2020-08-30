<?php
	if(isset($_GET['h']) && $_GET['h'] != ''){
		$hex = $_GET['h'];
		#hex
		function hexToStr($fhex){
			$fstring='';
			for ($i=0; $i < strlen($fhex)-1; $i+=2){
				$fstring .= chr(hexdec($fhex[$i].$fhex[$i+1]));
			}
			return $fstring;
		}
		$way = hexToStr($hex);
		header('Location: http://mk3a.ru/r/?l='.$way);
		#hex
	}else if(isset($_GET['l']) && $_GET['l'] != ''){
		#full link
		$fl = $_GET['l'];
		header('Location: http://mk3a.ru/r/?l='.$fl);
		#full link
	}else{
		#nothing
		echo '<h2>link is damaged</h2>';
		#nothing
	}
?>