<?php

	include('functions/function.php');
	include('includes/function.php');
	
	define('MAX_FILE_SIZE', '2097152');
	$ext = ['image/jpg','image/jpeg','image/png'];

	if(array_key_exists('save', $_POST)){
		//print_r($_FILES);

		$error =[]; // initialize error array

		$name = $_FILES['pics']['name'];

		$size = $_FILES['pics']['size'];

		$tmp_name = $_FILES['pics']['tmp_name'];

		$file = picupload($name, $size, $tmp_name);
/*
		if(empty($_FILES['pics']['name'])){
			$error[] = "Please select a file";
		}
		if($_FILES['pics']['size'] > MAX_FILE_SIZE){
			$error[] = "File too large. Maximum: .MAX_FILE_SIZE";
		}*/
		if(!in_array($_FILES['pics']['type'], $ext)){
			$error[] = "File format not suported";
		}

		/*$rnd = rand(0000000000, 9999999999);
		$strip_name = str_replace(' ', '_', $_FILES['pics']['name']);

		$filename = $rnd.$strip_name;
		$destination = './uploads/'.$filename;

		if(!move_uploaded_file($_FILES['pics']['tmp_name'], $destination)){
			$error[] = "File not uploaded";
		} 
		
*/
		if (empty ($error)){
			$msg = uploadFile($_FILES, 'pics', 'upload');

			if($msg[0]){
				echo $msg[0];

				echo "file uploaded";
			}
		}else


		if(empty($error)){
			echo "File upload successful";
		} else{
			foreach ($error as $err) {
				echo $err.'<br>';
			}
		}


	}


?>
<form id="register" method="POST", enctype="multipart/form-data">
	<p>Please upload a picture</p>
	<input type="file" name="pics">

	<input type="submit" name="save">
</form>