<?php require_once('admin/scripts/config.php');
if(isset($_GET['id'])){
	$tbl = 'tbl_products';
	$col = 'product_id';
	$value = $_GET['id'];
	$results = getSingle($tbl, $col, $value);
}else{
	
}
?>

<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>SportChek Products</title>
</head>
<body>
	<?php include('templates/header.html'); ?>
	<h1>This is the product site</h1>
	<div>
	<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
		<h2><?php echo $row['product_name'];?></h2>
	 <p><?php echo $row['product_brand'];?></p>
	 <h2>$<?php echo $row['product_price'];?></h2>
	 <h3><?php echo $row['product_color'];?></h3>

		<img src="images/<?php echo $row['product_img'];?>" 
	 alt="<?php echo $row['product_name'];?>">
	<?php endwhile;?>
	</div>

	<?php include('templates/footer.html');?>
</body>
</html>