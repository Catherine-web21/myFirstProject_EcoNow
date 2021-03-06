<?php

require_once('./dao/productDAO.php');

$id = $_GET['id'];

$productDAO = new productDAO();
$product = $productDAO->getProduct($id);

$img_name = $product['img'];
$img_name_arr = explode('.', $img_name);

$img_name2 = substr($img_name_arr[0], 0, -1).'2.'.$img_name_arr[1];
$img_name3 = substr($img_name_arr[0], 0, -1).'3.'.$img_name_arr[1];
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $product['name'];?></title>
		<link rel="stylesheet" href="style_project2.css">
		<link rel="stylesheet" href="product.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
	</head>
	<body>	
		<!-- This is the header of the page -->
		<div class = "header_homepage">
			<div class = "logo">
				<h1><a href = "home.html"><i class = "fa fa-envira">EcoNow</i></a></h1>
			</div >
			
			<div class = "search">
					<form action = "search_tester.html">
						<input type = "text" placeholder = "Search..." name = "container-searchbox">
						<button type = "Submit" target = "search_tester.html"><i class = "fa fa-search"></i></button>
					</form>
			</div>
			
			<div class = "sign">
				<h3>Welcome, <a href = "signin.html">Sign in </a><h3>
			</div>
			
			<div class = "cart">				
				<a href = "cart.html" class = "cart_page"><i class = "fa fa-shopping-cart fa-3x"></i></a>
			</div>			
		</div>
		
		<!-- Navigation panel -->
		<div class = "navigation">
			<a href="home.html">Home</a>
			<a href="reusable.html">Reusable Products</a>
			<a href="recyclable.html">Recyclable Products</a>
			<a href="organic.html">Organic Products</a>				
		</div>
		
		<!-- Social media sticky bar -->
		<div class="social_media">
			<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
			<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
			<a href="#" class="google"><i class="fa fa-google"></i></a>
			<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
			<a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
		</div>
		
		<!-- This section includes images of the selcted product along with description, price, rating etc. -->
		<div class="row">
			<div class="leftcolumn">
			  <div class="card">
				<h4><a href = "home.html">Home</a> / <a href = "recyclable.html"> <?php echo $product['category'];?></a> / <?php echo $product['name'];?> </h4>
				  <div class="image1">
					  <img src="Asset/Product/<?php echo $product['img'];?>" class = "responsive" width="380" height="450">
					  
				  </div>
				  <div class="image2">
					  <img src="Asset/Product/<?php echo $img_name2;?>" class = "responsive" width="180" height="200">
				  </div>
				  <div class="image3">
					  <img src="Asset/Product/<?php echo $img_name3;?>" class = "responsive"  width="180" height="200">
				  </div>
			  </div>
			  
			</div>

			<div class="rightcolumn">
				 <div class="card">
					<h3><?php echo $product['name'];?></h3>
					  <span class="heading">User Rating</span>
					  <span class="fa fa-star <?php if($product['review']>=1){echo 'checked';} ?>"></span>
					  <span class="fa fa-star <?php if($product['review']>=2){echo 'checked';} ?>"></span>
					  <span class="fa fa-star <?php if($product['review']>=3){echo 'checked';} ?>"></span>
					  <span class="fa fa-star <?php if($product['review']>=4){echo 'checked';} ?>"></span>
					  <span class="fa fa-star <?php if($product['review']>=5){echo 'checked';} ?>"></span>
						<p><?php echo $product['review'];?> average based on 666 reviews.</p>
						<p class="price">$ <?php echo $product['price'];?></p>
					   <form action="Cart.html">
						  <label for="quantity">Quantity:</label>
						  <input type="number" id="quantity" name="quantity" min="1">
						  <p><button type ="submit" target = "Cart.html" class = "cart_page"> Add to Cart</button></p>
					   </form>
					  
					<h4>Discription & Features</h4>
                     <p><?php echo $product['desc'];?></p>
<!--						<p>Plant-Based Toothbrush</p>-->
<!--					<h4>Features</h4>-->
<!--						<ul>-->
<!--							<li>Plastic Free</li>-->
<!--							<li>Recyclable</li>-->
<!--							<li>Bamboo Handle</li>-->
<!--							<li>Soft Bristles Made From 100% Castor Bean Oil</li>-->
<!--						</ul>-->
				 </div>
			
			</div>
		</div>
		
		<!-- Footer of the page -->
		<div class = "footer">
			<div class = "footer_links">
				<a href="#">Contact Us</a>
				<a href="#">About us</a>
				<a href="#">Customer Support</a>
				<a href="#">Join Our Team</a><br>
				<p>Copyright <a href = "home.html">EcoNow</a></p>
			</div>
		</div>

  </body>
</html>