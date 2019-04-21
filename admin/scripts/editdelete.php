<?php 

	function editProduct($id, $img, $title, $brand, $color, $price){
		include('connect.php');

		$update_product_query = 'UPDATE tbl_products SET product_img=:img, product_name=:title,';
		$update_product_query .=' product_brand=:brand, product_color=:color, product_price=:price';
		$update_product_query .=' WHERE product_id = :id';

		$update_product_set = $pdo->prepare($update_product_query); 
		$update_product_set->execute(
			array(
				':img'=>$img,
				':title'=>$title,
				':brand'=>$brand,
				':color'=>$color,
				':price'=>$price,
				':id'=>$id
		)
	);
	if($update_product_set->rowCount()){
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
