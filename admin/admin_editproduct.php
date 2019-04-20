<?php
require_once('scripts/config.php');
confirm_logged_in();
$id = $_SESSION['product_id']; //we put data into the session in the login.php file

$tbl = 'tbl_products';
$col = 'product_id';


//TODO: Pull all product columns from tbl_product where product_id = $id
// include('./scripts/connect.php');
// $query = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$id;
// $runQuery = $pdo->query($query);
// $found_product = $runQuery->fetch(PDO::FETCH_ASSOC);
// var_dump($found_product);
// exit;

$found_product_set = getSingle($tbl, $col, $id);
if(is_string($found_product_set)){
    $message = 'Failed to get product info!';
}

// $found_product = $found_product_set->fetch(PDO::FETCH_ASSOC);
// var_dump($found_product);
// exit;



if(isset($_POST['submit'])){
    $product_img = trim($_POST['product_img']);
    $product_name = trim($_POST['product_name']);
    $product_brand = trim($_POST['product_brand']);
    $product_color = trim($_POST['product_color']);
    $product_price = trim($_POST['product_price']);

    //Validation
    if(empty($product_name) || empty($product_brand) || empty($product_color)){
        //ensure consistency between admin_createproduct.php and admin_editproduct.php
        $message = 'Please fill the required fields';
    }else{
        //Do the edit
        //how do we know the product's information? SESSION
        $result = editProduct($id, $product_img, $product_name, $product_brand, $product_color,$product_price);
		$message = $result;
    }
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

    <form method="POST" action="admin_editproduct.php">
    <label for="product_img">Product Image:</label>
        <input type="file" name="product_img" id="product_img" value="<?php echo $found_product['product_img']; ?>"><br><br>

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" value="<?php echo $found_product['product_name']; ?>"><br><br>

        <label for="product_brand">Product Brand:</label>
        <input type="text" name="product_brand" id="product_brand" value="<?php echo $found_product['product_brand']; ?>"><br><br>

        <label for="product_color">Product Colour:</label>
        <input type="text" name="product_color" id="product_color" value="<?php echo $found_product['product_color']; ?>"><br><br>

        <label for="product_price">Product Price:</label>
        <input type="text" name="product_price" id="product_price" value="<?php echo $found_product['product_price']; ?>"><br><br>

		<button type="submit" name="submit">Edit Product</button> 
        
    </form>
    <?php endif;?>
</body>
</html>