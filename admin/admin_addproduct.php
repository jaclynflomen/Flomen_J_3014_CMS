<?php 
	require_once('scripts/config.php');
	// confirm_logged_in();

	$tbl_2 = 'tbl_category';
	$category = getAll($tbl_2);

if(isset($_POST['submit'])){
    // var_dump($_POST);
	// var_dump($_FILES['cover']);
	$product_img = trim($_POST['product_img']);
	$product_name = trim($_POST['product_name']);
	$product_brand = trim($_POST['product_brand']);
	$product_color = trim($_POST['product_color']);
	$product_price = trim($_POST['product_price']);
    $category = $_POST['categoryList'];
    $result = addProduct($product_img, $product_name, $product_brand, $product_color, $product_price, $category);
	$message = $result;
	
	//Validation?
	if(empty($product_name) || empty($product_brand) || empty($product_color)){
		$message = 'Please fill the required fields';
	}else{
		$result = createProduct($product_img,$product_name,$product_brand,$product_color, $product_price);
		$message = $result;
	}
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Product</title>
</head>
<body>
	<?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>
	<h2>Add Product</h2>
	<form action="admin_addproduct.php" method="post">
		
		<label for="categorylist">Category:</label>
        <select name="categoryList" id="categorylist">
        <option>Please select a category</option>
         <?php while($categorys = $category->fetch(PDO::FETCH_ASSOC)):?>    
            <option value="<?php echo $categorys['category_id'];?>">
                <?php echo $categorys['category_name'];?>
            </option>
            
            <?php endwhile; ?>
        </select><br><br>

		<label for="product_img">Product Image:</label>
        <input type="file" name="product_img" id="product_img" value=""><br><br>

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" value=""><br><br>

        <label for="product_brand">Product Brand:</label>
        <input type="text" name="product_brand" id="product_brand" value=""><br><br>

        <label for="product_color">Product Colour:</label>
        <input type="text" name="product_color" id="product_color" value=""><br><br>

        <label for="product_price">Product Price: $</label>
        <input type="text" name="product_price" id="product_price" value=""><br><br>

        <button type="submit" name="submit">Add Product</button>
	</form>

</body>
</html>