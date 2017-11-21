<?php
		session_start();
		$page_title = "Admin Dashboard";
		include'includes/function.php';
		include'includes/dashboard_header.php';
		include'includes/db.php';
		

		checkLogin();
		
		$errors = [];
		if(array_key_exists('add', $_POST)){

			if(empty($_POST['cat_name'])){

				$errors['cat_name'] = "Please enter category name";
			}
		
		if(empty($errors)){
			$clean  = array_map('trim', $_POST);

			addCategory($conn, $clean);		

			header("location: view_category.php");
			
		}

	}
?>







<div class="wrapper">
		<div id="stream">
			
			<form id="register"  action ="add_category.php" method ="POST">
			 <div>
				<?php 

					$info = displayErrors($errors, 'cat_name');
					echo $info;
				?>
				<label>Add Category:</label>
				<input type="text" name="cat_name" placeholder="Category name">
			</div>

			<input type="submit" name="add" value="Add">
		</div>
	</div>

<?php
	
	include'includes/footer.php';

?>