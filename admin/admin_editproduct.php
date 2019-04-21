<?php
require_once('scripts/config.php');
confirm_logged_in();

$tbl = 'tbl_products';
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
                <td><a href="admin_edit.php?id=<?php echo $product['product_id'];?>"><p>Edit</p></a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
