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

if(isset($_GET["action"]) && $_GET["action"] == "delete"){
    $productName = $_GET["name"]; 

    $productName = mysqli_real_escape_string($conn, $productName);

    $deleteQuery = "DELETE FROM `cart` WHERE description = '$productName'";
    mysqli_query($conn, $deleteQuery);

    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section id="header">
        <h1>La Cave Des Pape</h1>
    	<div>
    		<ul id="navbar">
    			<li><a href="homepage.php">Home</a></li>
    			<li><a href="product.php">Product</a></li>
    			<li><a href="about.html">About</a></li>
    			<li><a href="contact.html">Contact</a></li>
                <li><a href="index.php">Account</a></li>
    			<a class="active" href="cart.php"><img src="images/cart1.png" width="30" height="30px"></a>
    		</ul>
    	</div>

    </section>

<div class="table_container">
    <div class="table">
    <table>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove Item</th>
        </tr>
        <?php
        $query = "SELECT * FROM `cart` ORDER BY id ASC";
        $result = mysqli_query($conn, $query);
        $total = 0;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $price = floatval($row["price"]);
                $quantity = intval($row["quantity"]);
                $totalPrice = $price * $quantity;
                ?>
                <tr>
                    <td><img src="images/<?php echo $row["image"]; ?>" alt=""></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo number_format($price, 2); ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo number_format($totalPrice, 2); ?></td>
                    <td><a href="cart.php?action=delete&name=<?php echo urlencode($row["description"]); ?>"><span>Remove Item</span></a></td>
                </tr>
                <?php
                 $total += $totalPrice;
            }
        }
        ?>
        <tr></tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td><?php echo number_format($total, 2); ?></td>
            <td><button><a href="index.php">Proceed to payment</a></button></td>
        </tr>
    </table>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-log">
                    <a href="https://play.google.com/store/games?hl=en&pli=1"><img src="images/play-store.jpg"></a>
                    <a href="https://www.apple.com/app-store/"><img src="images/app-store.jpg"></a>
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
                    <a href=""><li>Facebook</li></a>
                    <a href=""><li>Twitter</li></a>
                    <a href=""><li>Instagram</li></a>
                    <a href=""><li>YouTube</li></a>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2024 - Patrick Mwiseneza. Alcohol abuse is dangerous to your health. Please drink responsibly.
</p>
    </div>
</div>
</body>
</html>