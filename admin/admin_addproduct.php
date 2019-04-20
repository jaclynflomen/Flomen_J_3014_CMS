<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>

    <?php if(!empty($message)):?>
        <p><?php echo $message;?></p>
	<?php endif;?>

    <form action="admin_addproduct.php" method="post">
        <label for="cover">Product Image:</label>
        <input type="file" name="cover" id="cover" value=""><br><br>

        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" value=""><br><br>

        <label for="brand">Product Brand:</label>
        <input type="text" name="brand" id="brand" value=""><br><br>

        <label for="color">Product Colour:</label>
        <input type="text" name="color" id="color" value=""><br><br>

        <label for="price">Product Price:</label>
        <input type="text" name="price" id="price" value=""><br><br>

        <button type="submit" name="submit">Add Movie</button>

    </form>
    
</body>
</html>