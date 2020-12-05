<?php
	if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
	include 'admin_header.php';
	require_once '../controllers/CategoriesController.php';
	require_once '../controllers/ProductsController.php';
	$products=getAllProduct();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		<?php
			$i=1;
			foreach($products as $prod){
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$prod["name"]."</td>";
				echo "<td>".getCategoryName($prod["category_id"])."</td>";
				echo "<td>".$prod["price"]."</td>";
				echo "<td>".$prod["quantity"]."</td>";
				echo "<td><a href=\"editproduct.php?product_id=".$prod["id"]."\" class=\"btn btn-success\">Edit</a></td>";
				echo "<td><a href=\"delete_product.php?product_id=".$prod["id"]."\" class=\"btn btn-danger\" target=\"_blank\">Delete</td>";
				echo "</tr>";
				$i++;
			}
		?>	
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>