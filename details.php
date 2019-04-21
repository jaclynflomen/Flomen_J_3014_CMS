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
<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
	<meta charset='utf-8'>
	<title>SportChek Products</title>
</head>
<body>
	<?php include('templates/header.html'); ?>
	<div class="details">
	<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
		<h1><?php echo $row['product_name'];?></h1>
	
	<div class="productDetails">
		<h2><?php echo $row['product_brand'];?></h2>
		<h3>$<?php echo $row['product_price'];?> - <?php echo $row['product_color'];?></h3>
	 </div>

		<img class="detailsImage" src="images/<?php echo $row['product_img'];?>" 
	 alt="<?php echo $row['product_name'];?>">
	<?php endwhile;?>
	</div>

	<?php include('templates/footer.html');?>
</body>
</html>