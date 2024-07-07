<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Fail to connect DB".$conn->connect_error;
}

if(isset($_POST["add"])){
    $productId = $_POST["product_id"];
    $productName = $_POST["hidden_name"];
    $productImage = $_POST["hidden_image"];
    $productPrice = $_POST["hidden_price"];
    $productQuantity = $_POST["quantity"];

    $sql = "INSERT INTO `cart` (`description`, `image`, `price`, `quantity`) VALUES ('$productName', '$productImage', '$productPrice', '$productQuantity');";
    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Product -La Cave Des Pape</title>
	<link rel="stylesheet"  href="style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<section id="header">
        <h1>La Cave Des Pape</h1>
    	<div>
    		<ul id="navbar">
    			<li><a href="homepage.php">Home</a></li>
    			<li><a class="active" href="product.php">Product</a></li>
    			<li><a href="about.html">About</a></li>
    			<li><a href="contact.html">Contact</a></li>
                <li><a href="index.php">Account</a></li>
    			<a href="cart.php"><img src="images/cart1.png" width="30" height="30px"></a>
    		</ul>
    	</div>

    </section>
	
<!--------All product -------->
  <div class="small-container"> 
  <div class="row row-2" >
      <h2>All Products</h2>
      <select>
          <option>Default Shorting</option>
          <option>Short by price </option>
          <option>Short by popularity</option>
          <option>Short by rating</option>
          <option>Short by sale</option>
      </select>
  </div>	

  <div class="row">
  	<div class="col-4" onclick="window.location.href='product_details.html';"> 
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
          <form action="product.php?action=add&id=1" method="post">
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
          <form action="product.php?action=add&id=1" method="post">
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
          <form action="product.php?action=add&id=1" method="post">
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
          <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="4">
                <input type="hidden" name="hidden_name" value="Laurent-Perrier Cuvee Rose Brut<br>
                         Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image13.jpg">
                <input type="hidden" name="hidden_price" value="11,157">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
</div>
  <div class="row">
  	<div class="coll-5">
  		<img src="images/image1.jpg">
  		<h4>Moet  & Chandon<br>
          Champagne, France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 13,613</p>
          <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="5">
                <input type="hidden" name="hidden_name" value="Moet  & Chandon<br>
                    Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image1.jpg">
                <input type="hidden" name="hidden_price" value="13613">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
  		<div class="coll-5">
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
          <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="6">
                <input type="hidden" name="hidden_name" value="Saint Pey<br>
                       Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image2.jpg">
                <input type="hidden" name="hidden_price" value="13200">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
  		<div class="coll-5">
  		<img src="images/image.jpg">
  		<h4>Ruinart Yellow Brut  Champagne,<br>
        France</h4>
  		<div class="rating">
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star"></i>
  			<i class="fa fa-star-half"></i>
  			<i class="fa fa-star-o"></i>
  		</div>
  		<p>KES 11,833</p>
          <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="7">
                <input type="hidden" name="hidden_name" value="Ruinart Yellow Brut  Champagne,<br>
                  France">
                <input type="hidden" name="hidden_image" value="images/image.jpg">
                <input type="hidden" name="hidden_price" value="11,833">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
  		<div class="coll-5">
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
          <form action="product.php?action=add&id=1" method="post">
               <input type="hidden" name="product_id" value="9">
                <input type="hidden" name="hidden_name" value="MARSURET Champagne,<br>
                                  France">
                <input type="hidden" name="hidden_image" value="images/image.9.jpg">
                <input type="hidden" name="hidden_price" value="19,500">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
  	</div>
  </div>
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
        <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="10">
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
        <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="11">
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
        <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="12">
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
        <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="13">
                <input type="hidden" name="hidden_name" value="Laurent-Perrier Alexandra Rose">
                <input type="hidden" name="hidden_image" value="images/image14.jpg">
                <input type="hidden" name="hidden_price" value="43613">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
    </div>
</div>
<div class="row">
    <div class="coll-5">
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
        <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="14">
                <input type="hidden" name="hidden_name" value="Moet & Chandon<br>
                 Champagne, France">
                <input type="hidden" name="hidden_image" value="images/image1.jpg">
                <input type="hidden" name="hidden_price" value="13,613">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
    </div>
       
        <div class="coll-5">
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
        <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="15">
                <input type="hidden" name="hidden_name" value="Saint Pey Champagne,<br>
                 France">
                <input type="hidden" name="hidden_image" value="images/image2.jpg">
                <input type="hidden" name="hidden_price" value="13,200">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
    </div>
        <div class="coll-5">
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
        <p>KES 21,800</p>
        <form action="product.php?action=add&id=1" method="post">
                <input type="hidden" name="product_id" value="16">
                <input type="hidden" name="hidden_name" value="Ruinart Yellow Brut Champagne,<br>
                   France">
                <input type="hidden" name="hidden_image" value="images/image.jpg">
                <input type="hidden" name="hidden_price" value="21,800">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
    </div>
        <div class="coll-5">
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
        <form action="product.php?action=add&id=1" method="post">
               <input type="hidden" name="product_id" value="17">
                <input type="hidden" name="hidden_name" value="MARSURET Champagne,<br>
                 France">
                <input type="hidden" name="hidden_image" value="images/image.9.jpg">
                <input type="hidden" name="hidden_price" value="19,500">
                <input type="number" name="quantity" value="1" min="1">
                <input type="submit" name="add" value="Add to Cart" class="btn cart-btn">
            </form>
    </div>
</div>

<div class="page-btn">
    <span>1</span>
    <span>2</span>
    <span>3</span>
    <span>4</span>
    <span>5</span>
    <span>&#8594;</span>
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
</div>
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