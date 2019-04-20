<?php
require_once('scripts/config.php');
confirm_logged_in();
$id = $_SESSION['user_id']; //we put data into the session in the login.php file
$_SESSION['id'] = $row['id'];

$tbl = 'tbl_products';
$col = 'product_id';
$products = getAll($tbl);

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

    <!-- $_GET['product_id'] -->

    <h2>Edit Product</h2>

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Colour</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php while($product = $products->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $product['product_name'];?></td>
                <td><?php echo $product['product_brand'];?></td>
                <td><?php echo $product['product_color'];?></td>
                <td><a href="admin_edit.php?=$row['id']">Edit</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
