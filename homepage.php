<?php
session_start();
include("connect.php")
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>La Cave des pape | Ecommerce Website</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="header"> 
	<div class="container">
	     <div class="navbar">
<!---		<div class="logo">
			<img src="images/LOGO.jpg" width="100px">
		</div>   -->
		<h1 style="text-align: center;" >La Cave Des Pape</h1>
		<nav>
			<ul id="MenuItems">
            <li><a href="homepage.php">Home</a></li>
				<li><a href="product.html">Products</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="index.php">Account</a></li>
			</ul>
		</nav>
		<a href="cart.html"><img src="images/cart1.png" width="30" height="30px"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
	<div class="row">
		<div class="col-2">
			<h1>Give Your Workout<br> A New Style!</h1>
			<p>Success isn't always about greatness. It's about consistency.<br> Consistent hard word gains success. Greatness will come.</p>
			<a href="product.html" class="btn">Explore Now &#8594;</a>
		</div>
		<div class="col-2">
			<img src="images/ruinart.jpg">
		</div>
	</div>
	</div>
</div>

<!--------featured categories -------->
   <div class="categories">
   	   <div class="small-container">
   	   	<div class="row">
   		<div class="col-3">
   			<img src="images/image14.jpg">
   		</div>
   		<div class="col-3">
   			<img src="images/image15.jpg">
   		</div>
   		<div class="col-3">
   			<img src="images/image13.jpg">
   		</div>
   	</div>
   </div>

   	</div>
<!--------featured categories -------->
  <div class="small-container">
  <h2 class="title">Featured Products</h2> 	
  <div class="row">
  	<div class="col-4">
  		<img src="images/image14.jpg">
  		<h4>Laurent-Perrier Alexandra Rose<br>
         Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 43,613</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>
  		<div class="col-4">
  		<img src="images/image15.jpg">
  		<h4> Dom Perignon Brut<br>
         Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-half-o"></i>
  		</div>
  		<p>KES 33,132</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>
  		<div class="col-4">
  		<img src="images/image16.jpg">
  		<h4>Veuve Clicquot Ponsardin Yellow Brut<br>
        Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-half"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 11,833</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>
  		<div class="col-4">
  		<img src="images/image13.jpg">
  		<h4>Laurent-Perrier Cuvee Rose Brut<br>
         Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES  11,157</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>

  	<h2 class="title">Latest Products</h2> 	
  <div class="row">
  	<div class="col-5">
  		<img src="images/image1.jpg">
  		<h4>Laurent-Perrier Alexandra Rose<br>
         Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 43,613</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>
  		<div class="col-5">
  		<img src="images/image2.jpg">
  		<h4> Dom Perignon Brut<br>
         Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-half-o"></i>
  		</div>
  		<p>KES 33,132</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>
  		<div class="col-5">
  		<img src="images/image.jpg">
  		<h4>Veuve Clicquot Ponsardin Yellow Brut<br>
        Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-half"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 11,833</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>
  		<div class="col-5">
  		<img src="images/image.9.jpg">
  		<h4>Laurent-Perrier Cuvee Rose Brut<br>
         Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES  11,157</p>
        <a href="cart.html" class="btn cart-btn">Add to Cart</a>
  	</div>
  		
  <!-----------offer ------------>
  <div class="offer">
  	<h2 class="title">Exclusively Offers Available on La Cave Des Pape Store</h2>
  	<div class="small-container">
  	  <div class="row">
  	  	  <div class="col-2">
  	  	  	  <img src="images/image11.jpg" class="offer-img" alt="Veuve Clicquot">
  	  	  </div>
  	  	  <div class="col-2">
  	  	<!--  	<p>Exclusively Available on La Cave Des Pape Store</p>  -->
  	  	  	<h1>Veuve Clicquot</h1>
  	  	  	<small>Veuve Clicquot Brut is a brand of champagne produced by the Champagne house Veuve Clicquot in Reims, France. The wine is made from a blend of Chardonnay, Pinot Noir, and Pinot Meunier grape varieties, and is noted for its crisp, dry flavor and delicate bubbles. Aromas and flavors include citrus, green apple, and toast. Often enjoyed as an aperitif or paired with seafood or white meat dishes.</small>
  	  	  	<a href="" class="btn">Buy Now &#8594;</a>
  	  	  </div>
  	   </div>
  	</div>
  </div>
  		
 <!-----testimonial -------->
 <div class="testimonial">	
 <div class="container">
 	<div class="row">
 		<div class="col-1">
 			<i class="fa fa-quote-left"></i>
    <p> Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry.<br> Lorem Ipsum has been the industry's <br>standard dummy text ever</p>
           <div class="rating">
  			    <i class="fa fa-star"></i>
  		    	<i class="fa fa-star"></i>
  		    	<i class="fa fa-star"></i>
  			    <i class="fa fa-star"></i>
  		      	<i class="fa fa-star-half-o"></i>
  		    </div>
       <img src="images/patrick.jpg">
       <h2>Patrick Mwiseneza</h2>
       
        </div>
       <div class="col-1">
 			<i class="fa fa-quote-left"></i>
    <p> Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry.<br> Lorem Ipsum has been the industry's<br> standard dummy text ever</p>
           <div class="rating">
  			    <i class="fa fa-star"></i>
  		    	<i class="fa fa-star"></i>
  		    	<i class="fa fa-star"></i>
  			    <i class="fa fa-star"></i>
  		      	<i class="fa fa-star-half-o"></i>
  		    </div>
       <img src="images/ngabo.jpg">
       <h2>Jean Claude Ngabo</h2>
        </div>
        <div class="col-1">
 			<i class="fa fa-quote-left"></i>
    <p> Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry.<br> Lorem Ipsum has been the industry's<br> standard dummy text ever</p>
           <div class="rating">
  			    <i class="fa fa-star"></i>
  		    	<i class="fa fa-star"></i>
  		    	<i class="fa fa-star"></i>
  			    <i class="fa fa-star"></i>
  		      	<i class="fa fa-star-half-o"></i>
  		    </div>
       <img src="images/eric.jpg">
       <h2>Eric Hakizimana</h2>
       
        </div>
</div>

<!-------------brands -------------->
     <div class="brands">
     	<div class="pazzo">
     		<div class="row">
     			<div class="col-6">
     				<img src="images/google.png">
     			</div>
     			<div class="col-6">
     				<img src="images/oppo.png">
     			</div>
     			<div class="col-6">
     				<img src="images/coca-cola.jpg">
     			</div>
     			<div class="col-6">
     				<img src="images/philips.png">
     			</div>
     		</div>
     	</div>
     </div>

   <!---- footer ---->

   <div class="footer">
   	   <div class="container">
   	   	   <div class="row">
   	   	   <div class="footer-col-1">
   	   	   	<h3>Download Our App</h3>
   	   	   	<p>Download App for Android and ios mobile phone.</p>
   	   	   	<div class="app-log">
   	   	   		<img src="images/play-store.jpg">
   	   	   		<img src="images/app-store.jpg">
   	   	   	</div>
   	   	   </div>
   	   	    <div class="footer-col-2">
   	   	   	<h3>Our Mission</h3>
   	   	   	<p>Our Purpose Is To Sustainably Drinks to the Many</p>
   	   	   </div>
   	   	    <div class="footer-col-3">
   	   	   	<h3>Useful Links</h3>
   	   	   	<ul>
   	   	   		<li>Coupons</li>
   	   	   		<li>Blog Post</li>
   	   	   		<li>Return Policy</li>
   	   	   		<li>Join Affiliate</li>
   	   	   	</ul>
   	   	   </div>
   	   	    <div class="footer-col-4">
   	   	   	<h3>Follow us</h3>
   	   	   	<ul>
   	   	   		<li>Facebook</li>
   	   	   		<li>Twitter</li>
   	   	   		<li>Instagram</li>
   	   	   		<li>YouTube</li>
   	   	   	</ul>
   	   	   </div>
   	   	 </div>
   	   	 <hr>
   	   	 <p class="copyright">Copyright 2024 -Patrick Mwiseneza</p>
   	   </div>
   </div>

   <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
<!-------js for toggle menu ----->
   <script>
   	var MenuItems =document.getElementById("MenuItems");

   	MenuItems.style.maxHeight = "0px";

   	function menutoggle(){
         if(MenuItems.style.maxHeight == "0px")
         	  {
         	  	MenuItems.style.maxHeight = "200px"
         	  }
         else
              {
         	    MenuItems.style.maxHeight = "0px"
              }
   	}
   </script>


</body>		
</html>
    