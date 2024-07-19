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
	<link rel="stylesheet" type="text/css" href="styless.css">  
     <link rel="stylesheet"  href="style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<section id="header">
        <h1>La Cave Des Pape</h1>
    	<div>
    		<ul id="navbar">
    			<li><a class="active" href="homepage.php">Home</a></li>
    			<li><a href="product.php">Product</a></li>
    			<li><a href="about.html">About</a></li>
    			<li><a href="contact.php">Contact</a></li>
                <li><a href="index.php">Account</a></li>
    			<a href="cart.php"><img src="images/cart1.png" width="30" height="30px"></a>
    		</ul>
    	</div>

    </section>

    <div class="header"> 
	<div class="container">
	 
	<div class="row">
		<div class="col-2">
			<h1>Give Your Workout<br> A New Style!</h1>
			<p>Success isn't always about greatness. It's about consistency.<br> Consistent hard word gains success. Greatness will come.</p>
			<a href="product.php" class="btn">Explore Now &#8594;</a>
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
		  <form action="homepage.php?action=add&id=1" method="post">
		        <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="hidden_name" value="Laurent-Perrier Alexandra Rose">
                <input type="hidden" name="hidden_image" value="images/image14.jpg">
                <input type="hidden" name="hidden_price" value="43613">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
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
		  <form action="homepage.php?action=add&id=1" method="post">
		  <input type="hidden" name="product_id" value="2">
		  <input type="hidden" name="hidden_name" value="Dom Perignon Brut<br>
                       Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image15.jpg">
                <input type="hidden" name="hidden_price" value="33,132">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
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
		  <form action="homepage.php?action=add&id=1" method="post">
		        <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="hidden_name" value="Veuve Clicquot Ponsardin Yellow Brut<br>
                       Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image16.jpg">
                <input type="hidden" name="hidden_price" value="11,833">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
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
		  <form action="phomepage.php?action=add&id=1" method="post">
		        <input type="hidden" name="product_id" value="4">
                <input type="hidden" name="hidden_name" value="Laurent-Perrier Cuvee Rose Brut<br>
                         Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image13.jpg">
                <input type="hidden" name="hidden_price" value="11,157">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>

  	<h2 class="title">Latest Products</h2> 	
  <div class="row">
  	<div class="col-5">
  		<img src="images/image1.jpg">
  		<h4>Moet & Chandon <br>
		  Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 13,613</p>
		  <form action="phomepage.php?action=add&id=1" method="post">
		  <input type="hidden" name="product_id" value="5">
                <input type="hidden" name="hidden_name" value="Moet & Chandon <br>
                Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image1.jpg">
                <input type="hidden" name="hidden_price" value="13613">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
  		<div class="col-5">
  		<img src="images/image2.jpg">
  		<h4> Saint Pey Champagne,<br>
		  France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-half-o"></i>
  		</div>
  		<p>KES 13,200</p>
		  <form action="homepage.php?action=add&id=1" method="post">
		        <input type="hidden" name="product_id" value="6">
                <input type="hidden" name="hidden_name" value="Saint Pey Champagne,<br>
                France">
                <input type="hidden" name="hidden_image" value="images/image2.jpg">
                <input type="hidden" name="hidden_price" value="13,200">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
  		<div class="col-5">
  		<img src="images/image.jpg">
  		<h4>Ruinart Yellow Brut Champagne,<br>
          France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-half"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 11,800</p>
		  <form action="homepage.php?action=add&id=1" method="post">
		  <input type="hidden" name="product_id" value="7">
                <input type="hidden" name="hidden_name" value="Ruinart Yellow Brut Champagne,<br>
               France">
                <input type="hidden" name="hidden_image" value="images/image.jpg">
                <input type="hidden" name="hidden_price" value="21,800">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
  		<div class="col-5">
  		<img src="images/image.9.jpg">
  		<h4>MARSURET Champagne,<br>
          France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES  19,500</p>
		  <form action="homepage.php?action=add&id=1" method="post">
		        <input type="hidden" name="product_id" value="8">
                <input type="hidden" name="hidden_name" value="MARSURET Champagne,<br>
                 France">
                <input type="hidden" name="hidden_image" value="images/image.9.jpg">
                <input type="hidden" name="hidden_price" value="19,500">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
</div>
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
   	   	 <p class="copyright">Copyright © - 2024 -Patrick Mwiseneza. Alcohol abuse is dangerous to your health. Please drink responsibly.</p>
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
    