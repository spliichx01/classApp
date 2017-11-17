<?php

	function picupload($dummy_name, $dummy_size, $dummy_tmp_name){
/*
		if(empty($_FILES['pics']['name'])){
			$error[] = "Please select a file";
		}
		if($_FILES['pics']['size'] > MAX_FILE_SIZE){
			$error[] = "File too large. Maximum: .MAX_FILE_SIZE";
		}
		if(!in_array($_FILES['pics']['type'], $ext)){
			$error[] = "File format not suported";
		}

		$rnd = rand(0000000000, 9999999999);
		$strip_name = str_replace('', '', $_FILES['pics']['name']);

		$filename = $rnd.$strip_name;
		$destination = './uploads/'.$filename;

		if(!move_uploaded_file($_FILES['pics']['tmp_name'], $destination)){
			$error[] = "File not uploaded";
		}*/


		if(empty($dummy_name)){
			$error[] = "Please select a file";
		}

		
		if($dummy_size > MAX_FILE_SIZE){
			$error[] = "File too large. Maximum: ".MAX_FILE_SIZE;
			$dummy_tmp_name = null;
		}

		$rnd = rand(0000000000, 9999999999);
		$strip_name = str_replace(' ', '_', $dummy_name);

		$filename = $rnd.$strip_name;
		$destination = './uploads/'.$filename;

		if(!move_uploaded_file($dummy_tmp_name, $destination)){ //validates for if file is moved
			$error[] = "File not uploaded";
		}


	}

?>