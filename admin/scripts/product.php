<?php 
	function createProduct($product_img,$product_name,$product_brand,$product_color){
			include('connect.php');
	
		$create_user_query = 'INSERT INTO tbl_products(product_img,product_name,product_brand,product_color, product_price)';
		$create_user_query .= ' VALUES(:product_img, :product_name, :product_brand, :product_color, :product_price)';

		$create_user_set = $pdo->prepare($create_user_query);
		$create_user_set->execute(
			array(
				':product_img'=>$product_img,
				':product_name'=>$product_name,
				':product_brand'=>$product_brand,
				':product_color'=>$product_color,
				':product_price'=>$product_price
			)
		);

		if($create_product_set->rowCount()){
			redirect_to('admin_editproduct.php');
		}else{
			$message = 'Your hiring practices have failed you.. this individual sucks...';
			return $message;
		}

}

function editProduct($id, $product_img, $product_name, $product_brand, $product_color) {
include('connect.php');
	
		$update_product_query = 'UPDATE tbl_products SET product_img=:product_img, product_name=:product_name, product_brand=:product_brand, product_color=:product_color WHERE product_id = :id';

		$update_product_set = $pdo->prepare($update_product_query);
		$update_product_set->execute(
			array(
				':id'=>$id,
				':product_img'=>$product_img,
				':product_name'=>$product_name,
				':product_brand'=>$product_brand,
				':product_color'=>$product_color,
				':product_price'=>$product_price
			)
		);

		if($update_product_set->rowCount()){
			redirect_to('admin_login.php');
			// redirect_to('index.php');
			// redirect to admin page after log out and log back in
		}else{
			$message = 'Something went wrong, oops!';
			return $message;
		}

}

function deleteProduct($id){
//ToDo: 
//1. Build the sql query to delete product where product_id = $id
//2. Run the sql query
//3. If the execution is successful, redirect product to index.php
//Otherwise return an error

include('connect.php');
$delete_product_query = 'DELETE FROM tbl_products WHERE product_id = :id';

		$delete_product_set = $pdo->prepare($delete_product_query);
		$delete_product_set->execute(
			array(
				':id'=>$id
			)
		);

		if($delete_product_set->rowCount()){
			redirect_to('../index.php');
		}else{
			$message = 'Could not complete this task!';
			return $message;
		}

}