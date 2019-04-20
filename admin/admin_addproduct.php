<?php 
	require_once('scripts/config.php');
	confirm_logged_in();

	$tbl_2 = 'tbl_category';
	$categories = getAll($tbl_2);

if(isset($_POST['submit'])){
	$img = $_FILES['img'];
	$title = $_POST['title'];
	$brand = $_POST['brand'];
	$color = $_POST['color'];
	$price = $_POST['price'];
    $category = $_POST['categoryList'];
    $result = addProduct($img, $title, $brand, $color, $price, $category);
	$message = $result;
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
	<form action="admin_addproduct.php" method="post" enctype="multipart/form-data">

		<label for="img">Product Image:</label>
        <input type="file" name="img" id="img" value=""><br><br>

        <label for="title">Product Name:</label>
        <input type="text" name="title" id="title" value=""><br><br>

        <label for="brand">Product Brand:</label>
        <input type="text" name="brand" id="brand" value=""><br><br>

        <label for="color">Product Colour:</label>
        <input type="text" name="color" id="color" value=""><br><br>

        <label for="price">Product Price: $</label>
        <input type="text" name="price" id="price" value=""><br><br>

        <label for="categorylist">Product Category:</label>
        <select name="categoryList" id="categorylist">
            <option>Please select a category.</option>
            <?php while ($category = $categories->fetch(PDO::FETCH_ASSOC)): ?>
            <option value="<?php echo $category['category_id']; ?>">
                <?php echo $category['category_name']; ?>
            </option>
            <?php endwhile; ?>
        </select><br><br>


        <button type="submit" name="submit">Add Product</button>
	</form>

</body>
</html>