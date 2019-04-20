<?php require_once('admin/scripts/config.php');
if(isset($_GET['filter'])){
	$tbl = 'tbl_products';
	$tbl_2 = 'tbl_category';
	$tbl_3 = 'tbl_products_category';
	$col = 'product_id';
	$col_2 = 'category_id';
	$col_3 = 'category_name';
	$filter = $_GET['filter'];
	$results = filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter);
}else{
	$results = getAll('tbl_products');
}
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
	<meta charset='utf-8'>
	<title>Products</title>
</head>
<body>
	<?php include('templates/header.html'); ?>
	<h1>Products Available</h1>
	<div id="products">

<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
	<li float-left><img src="images/<?php echo $row['product_img'];?>" alt="<?php echo $row['product_name'];?>" id="productIMG">
	<h2><?php echo $row['product_brand'];?></h2>
	<p><?php echo $row['product_name'];?></p>
	<a href="details.php?id=<?php echo $row['product_id'];?>">See More</a><br><br>
	</li>
<?php endwhile;?>
	</div>

<?php include('templates/footer.html');?>
</body>
</html>