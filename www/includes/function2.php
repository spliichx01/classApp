<?php
	
	function uploadsFile($files, $name, $loc){
		$result = [];

		$rnd = rand(0000000000, 9999999999);
		$srtip_name = str_replace('', '_', s$files[$name]['name']);

		$fileName = $rnd.$srtip_name;
		$destination = $loc.$fileName;

		if (move_uploaded_file($file[$name]['tmp_name', $destination));{

			$result[] = true;

		}else{

			$result[] = false;
		}

		return $result;
	}

?>