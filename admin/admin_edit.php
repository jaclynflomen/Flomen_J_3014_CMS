<?php
require_once('scripts/config.php');
confirm_logged_in();
$id2 = $_SESSION['user_id']; //we put data into the session in the login.php file

$tbl = 'tbl_products';
$id = 'product_id';
$col = 'product_id';
$products = getAll($tbl);

$found_product_set = getSingle($tbl, $col, $id);
if(is_string($found_product_set)){
    $message = 'Failed to get product info!';
}

if(isset($_POST['submit'])){
    $img = $_POST['img'];
    $name = $_POST['title'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $result = editProduct($id, $img, $title, $brand, $color, $price);
	$message = $result;
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

    <?php if($found_product = $found_product_set->fetch(PDO::FETCH_ASSOC)):?>

    <h2>Edit Product</h2>

    <form method="POST" action="admin_edit.php">
    <label for="img">Product Image:</label>
        <input type="file" name="img" id="img" value="<?php echo $found_product['product_img']; ?>"><br><br>

        <label for="title">Product Name:</label>
        <input type="text" name="title" id="title" value="<?php echo $found_product['product_name']; ?>"><br><br>

        <label for="brand">Product Brand:</label>
        <input type="text" name="brand" id="brand" value="<?php echo $found_product['product_brand']; ?>"><br><br>

        <label for="color">Product Colour:</label>
        <input type="text" name="color" id="color" value="<?php echo $found_product['product_color']; ?>"><br><br>

        <label for="price">Product Price:</label>
        <input type="text" name="price" id="price" value="<?php echo $found_product['product_price']; ?>"><br><br>

		<button type="submit" name="submit">Edit Product</button> 
        
    </form>
    <?php endif;?>
</body>
</html>