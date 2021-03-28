<?php
include("header.php")
?>
		<div class="new-arrivals text-center">
			<div class="col-md-3 new-arrival-head">
				<h3>New Arrivals</h3>
				<a class="btn btn-1 btn-1d" href="products.html">View All</a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="images/watch.jpg" class="img-responsive" alt="" /></a>
				<h3>Watches</h3>
				<a href="single.html">Shop Now<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="images/men-jacket.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>jackets</h3>
				<a href="single.html">Shop Now<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="images/shoes.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>Footwear</h3>
				<a href="single.html">Shop Now<i class="go"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="best-sellers">
			<div class="clearfix"></div>
		</div>
		<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		
    		
    		<div class="clearfix"></div>
    	</div>
        
         <?php
include("config.php");
$sql= "select *from tbl_product where status=0";
$result= mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
	$Path="product/".$row['image'];

	?>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="single.html">
                     
                     
                     
                     
                     <?php echo "<img class='img-responsive' alt='' src='./admin/product/$row[2]'style='height:285px;width:200px;'>" ?>
                     </a>
					 <h2><?php echo $row['pro_name'];?></h2>
					 
					 <p><span class="price">Rs.<?php echo $row['price'];?></span></p>
					  <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.php" class="cart-button">Add to Cart</a></span> </div>
				     <div class="button"><span><a href="single.php?pro_id=<?php echo $row['pro_id'];?>" class="details">Details</a></span></div>
				</div><?php
}
?>
				<div class="clearfix"></div>
                
			</div>
			
	 <?php
	 include("footer.php")
	 ?>