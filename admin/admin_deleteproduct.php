<?php 
	require_once('scripts/config.php');
    confirm_logged_in();
    
    //ToDo: Pull all product from tbl_products
    //save the result to be an array $product

    $tbl = 'tbl_products';
    $products = getAll($tbl);

    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
</head>
<body>

    <h2>Delete Products (Make sure you know what you're deleting!)</h2> 
    <!-- ope -->

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Colour</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php while($product = $products->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $product['product_name'];?></td>
                <td><?php echo $product['product_brand'];?></td>
                <td><?php echo $product['product_color'];?></td>
                <td><a href="./scripts/caller.php?caller_id=delete&id=<?php echo $product['product_id'];?>">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    
    
    
</body>
</html>