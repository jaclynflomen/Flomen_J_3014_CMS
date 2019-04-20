<?php 

	function editProduct($id, $fname, $username, $password, $email){
		include('connect.php');

		$update_product_query = 'UPDATE tbl_products SET user_fname=:fname, user_name=:username,';
		$update_product_query .=' user_pass=:password, user_email=:email';
		$update_product_query .=' WHERE product_id = :id';

		$update_product_set = $pdo->prepare($update_product_query);
		$update_product_set->execute(
			array(
				':fname'=>$fname,
				':username'=>$username,
				':password'=>$password,
				':email'=>$email,
				':id'=>$id
			)
		);
		//When update successfully, redirect user to index.php
		if($update_user_set->rowCount()){
			redirect_to('index.php');
		}else{
			//otherwise, return an error message
			$message = 'Guess you got canned...';
			return $message;
		}
	}

	function deleteProduct($id){
		include('connect.php');
		$delete_product_query = 'DELETE FROM tbl_products WHERE product_id = :id';
		$delete_product = $pdo->prepare($delete_product_query);
		$delete_product->execute(
			array(
				':id'=>$id
			)
		);

		if($delete_product){
			redirect_to('../index.php');
		}else{
			$message = 'Not deleted yet..';
			return $message;
		}
		
		//4.* (Dev) What's the security concern here???
	}