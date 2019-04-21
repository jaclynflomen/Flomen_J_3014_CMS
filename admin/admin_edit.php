<?php  require_once('scripts/config.php');
if(isset($_GET['id'])){
	$tbl = 'tbl_products';
	$col = 'product_id';
	$value = $_GET['id'];
	$results = getSingle($tbl, $col, $value);
}

if(is_string($results)){
    $message = 'Failed to get user info!';
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $img = $_POST['img'];
    $title = $_POST['title'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $result = editProduct($id, $img, $title, $brand, $color, $price);
    $message = 'Data seems alright...';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>

    <h2>Edit Product</h2>

    <?php if($found_product = $results->fetch(PDO::FETCH_ASSOC));?>
    <form method="POST" action="admin_edit.php">

        <label for="id">Product ID:</label>
        <input type="text" id="id" name="id" value="<?php echo $found_product['product_id'];?>"><br><br>

        <label for="img">Product Image: (Must re-upload image!)</label>
        <input type="file" name="img" id="img" value="<?php echo $found_product['product_img']; ?>"><br><br>

        <label for="title">Product Name:</label>
        <input type="text" name="title" id="title" value="<?php echo $found_product['product_name']; ?>"><br><br>

        <label for="brand">Product Brand:</label>
        <input type="text" name="brand" id="brand" value="<?php echo $found_product['product_brand']; ?>"><br><br>

        <label for="color">Product Colour:</label>
        <input type="text" name="color" id="color" value="<?php echo $found_product['product_color']; ?>"><br><br>

        <label for="price">Product Price: $</label>
        <input type="text" name="price" id="price" value="<?php echo $found_product['product_price']; ?>"><br><br>

		<button type="submit" name="submit">Edit Product</button> 
        
    </form>
</body>
</html>
